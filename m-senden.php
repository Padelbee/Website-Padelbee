<?php
if(count($_POST) == 0){
    header('HTTP/1.0 404 Not Found');
    exit;
}

// Rate-Limiting: Max 3 Formulare pro Stunde pro IP
function checkRateLimit($ip) {
    $rateFile = 'rate_limit.json';
    $currentTime = time();
    $rateLimit = 3; // Max 3 Formulare
    $timeWindow = 3600; // Pro Stunde (3600 Sekunden)
    
    $data = [];
    if (file_exists($rateFile)) {
        $data = json_decode(file_get_contents($rateFile), true) ?: [];
    }
    
    // Alte Einträge löschen (älter als 1 Stunde)
    foreach ($data as $storedIp => $times) {
        $data[$storedIp] = array_filter($times, function($time) use ($currentTime, $timeWindow) {
            return ($currentTime - $time) < $timeWindow;
        });
        if (empty($data[$storedIp])) {
            unset($data[$storedIp]);
        }
    }
    
    // Prüfen ob IP Limit erreicht
    if (isset($data[$ip]) && count($data[$ip]) >= $rateLimit) {
        return false; // Rate limit exceeded
    }
    
    // IP hinzufügen
    if (!isset($data[$ip])) {
        $data[$ip] = [];
    }
    $data[$ip][] = $currentTime;
    
    // Speichern
    file_put_contents($rateFile, json_encode($data));
    return true;
}

function cleanInput($data){
    if(is_array($data)){
        foreach($data as $key => $val){
            $ok[$key] = trim(htmlspecialchars(strip_tags($val)));
        }
    }else{
        $ok = trim(htmlspecialchars(strip_tags($data)));
    }
    return $ok;
}

function _build_Body($data, $betreff) {
    $body = $betreff. "\n\n";

    foreach ($data as $key => $field) {
        // Datenschutz-Checkbox und Turnstile-Token nicht im Body anzeigen
        if($key == 'datenschutz' || $key == 'cf-turnstile-response') continue;
        
        $v = is_array($field) ? implode(", ", $field) : $field;
        if (!empty($v)) {
            $body .= str_replace("_", " ", ucfirst($key)) . ': ' . html_entity_decode($v)  ."\n\r";
        }
    }
    return $body;
}

$data = cleanInput($_POST);

// Spam-Schutz: Honeypot prüfen
if (!empty($data['website'])) {
    // Honeypot wurde ausgefüllt = Bot/Spam
    header('Location: /index.php?error=spam');
    exit;
}

// Bot-Schutz: Cloudflare Turnstile (siteverify) – Gate vor der bestehenden Verarbeitung.
// Secret/Hostnames aus Env (Produktion, K8s-Secret padelbee-turnstile) oder inc/turnstile-config.php (lokal).
function turnstileConfig() {
    $secret    = (string) (getenv('TURNSTILE_SECRET') ?: '');
    $hostnames = (string) (getenv('TURNSTILE_HOSTNAMES') ?: '');

    $cfgFile = __DIR__ . '/inc/turnstile-config.php';
    if (($secret === '' || $hostnames === '') && file_exists($cfgFile)) {
        $cfg = include $cfgFile;
        if (is_array($cfg)) {
            if ($secret === '' && !empty($cfg['secret'])) {
                $secret = (string) $cfg['secret'];
            }
            if ($hostnames === '' && !empty($cfg['hostnames'])) {
                $hostnames = is_array($cfg['hostnames']) ? implode(',', $cfg['hostnames']) : (string) $cfg['hostnames'];
            }
        }
    }
    if ($hostnames === '') {
        $hostnames = 'padelbee.de,www.padelbee.de';
    }
    $list = array_values(array_filter(array_map('trim', explode(',', $hostnames))));
    return [$secret, $list];
}

function clientIp() {
    // Hinter nginx-Ingress/Cloudflare-Tunnel steht die echte IP in den Forward-Headern
    if (!empty($_SERVER['HTTP_CF_CONNECTING_IP'])) {
        return trim($_SERVER['HTTP_CF_CONNECTING_IP']);
    }
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return trim(explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])[0]);
    }
    return $_SERVER['REMOTE_ADDR'] ?? '';
}

function verifyTurnstile($token, $expectedAction, $secret, array $expectedHostnames, $remoteIp) {
    if (!is_string($token) || $token === '' || strlen($token) > 2048 || empty($expectedHostnames)) {
        return false;
    }

    $payload = http_build_query([
        'secret'   => $secret,
        'response' => $token,
        'remoteip' => $remoteIp,
    ]);
    $url  = 'https://challenges.cloudflare.com/turnstile/v0/siteverify';
    $raw  = false;
    $code = 0;

    if (function_exists('curl_init')) {
        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_POST           => true,
            CURLOPT_POSTFIELDS     => $payload,
            CURLOPT_HTTPHEADER     => ['Content-Type: application/x-www-form-urlencoded'],
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT        => 10,
            CURLOPT_CONNECTTIMEOUT => 5,
        ]);
        $raw  = curl_exec($ch);
        $code = (int) curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
        curl_close($ch);
    } else {
        $ctx = stream_context_create(['http' => [
            'method'        => 'POST',
            'header'        => "Content-Type: application/x-www-form-urlencoded\r\n",
            'content'       => $payload,
            'timeout'       => 10,
            'ignore_errors' => true,
        ]]);
        $raw = @file_get_contents($url, false, $ctx);
        if (isset($http_response_header[0]) && preg_match('/\s(\d{3})\s/', $http_response_header[0], $m)) {
            $code = (int) $m[1];
        }
    }

    if ($raw === false || $code !== 200) {
        error_log('Turnstile siteverify nicht erreichbar (HTTP ' . $code . ')');
        return false;
    }
    $result = json_decode($raw, true);
    if (!is_array($result) || empty($result['success'])) {
        error_log('Turnstile abgelehnt: ' . implode(',', $result['error-codes'] ?? ['unbekannt']));
        return false;
    }
    // Cloudflares Test-Keys (1x…/2x…) liefern keine Action zurück; nur dann die Action-Prüfung überspringen
    $testingKey = !empty($result['metadata']['result_with_testing_key']);
    if (!$testingKey && ($result['action'] ?? '') !== $expectedAction) {
        error_log('Turnstile: unerwartete Action ' . ($result['action'] ?? ''));
        return false;
    }
    if (!in_array($result['hostname'] ?? '', $expectedHostnames, true)) {
        error_log('Turnstile: unerwarteter Hostname ' . ($result['hostname'] ?? ''));
        return false;
    }
    return true;
}

list($turnstileSecret, $turnstileHostnames) = turnstileConfig();
if ($turnstileSecret === '') {
    // Kein Secret konfiguriert: Formular nicht blockieren, aber laut warnen (Honeypot + Rate-Limit greifen weiter)
    error_log('WARNUNG: TURNSTILE_SECRET nicht gesetzt – Kontaktformular läuft ohne Turnstile-Prüfung');
} elseif (!verifyTurnstile($_POST['cf-turnstile-response'] ?? '', 'contact', $turnstileSecret, $turnstileHostnames, clientIp())) {
    header('Location: /index.php?error=captcha');
    exit;
}

// Rate-Limiting prüfen
$userIP = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
if (!checkRateLimit($userIP)) {
    // Rate limit exceeded
    header('Location: /index.php?error=ratelimit');
    exit;
}

if(count($data) > 0){
	include("inc/class.phpmailer.php");

	$sendmail = 'info@padelbee.de';
	$zielmail = 'martin.gaffal@padelbee.de';
	$betreff  = 'Anfrage Padelbee Website';

	$smtpConfigFile = __DIR__ . '/inc/smtp-config.php';
	$smtp = file_exists($smtpConfigFile) ? include $smtpConfigFile : [];
	if (is_array($smtp) && !empty($smtp['from_email'])) {
		$sendmail = $smtp['from_email'];
	}

	$mail = new PHPMailer();
	$mail->From     = $sendmail;
	$mail->FromName = 'Padelbee';
	$mail->AddAddress($zielmail);
	$mail->Subject  = $betreff;
	$mail->Body     = _build_Body($data, $betreff);

	if (is_array($smtp) && !empty($smtp['host'])) {
		$mail->PluginDir = __DIR__ . '/inc/';
		$mail->IsSMTP();
		$mail->Host       = $smtp['host'];
		$mail->Port       = (int) ($smtp['port'] ?? 587);
		$mail->SMTPSecure = $smtp['secure'] ?? 'tls';
		if (!empty($smtp['auth'])) {
			$mail->SMTPAuth = true;
			$mail->Username = $smtp['username'] ?? '';
			$mail->Password = $smtp['password'] ?? '';
		}
	}

	if ($mail->send()) {
		// Zusätzlich an Orgame melden (nicht blockierend, Fehler nur im error_log)
		include_once __DIR__ . '/inc/orgame-intake.php';
		sendToOrgame($data);
		header('Location: /danke.php');
		exit;
	} else {
		header('Location: /index.php?error=mail');
		exit;
	}
}

?>