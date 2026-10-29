<?php
/**
 * Orgame Lead-Intake: schickt jede erfolgreich versendete Website-Anfrage zusätzlich
 * per Webhook an Orgame. Nicht blockierend fürs Formular: Fehler landen nur im error_log.
 *
 * Konfiguration: Env ORGAME_LEAD_INTAKE_URL / ORGAME_LEAD_INTAKE_SECRET (Produktion,
 * K8s-Secret padelbee-orgame) oder inc/orgame-config.php (lokal, gitignored).
 */

function orgameConfig() {
    $url    = (string) (getenv('ORGAME_LEAD_INTAKE_URL') ?: '');
    $secret = (string) (getenv('ORGAME_LEAD_INTAKE_SECRET') ?: '');

    $cfgFile = __DIR__ . '/orgame-config.php';
    if (($url === '' || $secret === '') && file_exists($cfgFile)) {
        $cfg = include $cfgFile;
        if (is_array($cfg)) {
            if ($url === '' && !empty($cfg['url'])) {
                $url = (string) $cfg['url'];
            }
            if ($secret === '' && !empty($cfg['secret'])) {
                $secret = (string) $cfg['secret'];
            }
        }
    }
    if ($url === '') {
        $url = 'https://orga.mpm-ag.de/api/webhooks/lead-intake';
    }
    return [$url, $secret];
}

function orgamePlain($v) {
    if (is_array($v)) {
        return array_map('orgamePlain', $v);
    }
    return html_entity_decode((string) $v, ENT_QUOTES | ENT_HTML5, 'UTF-8');
}

function sendToOrgame(array $data): void {
    try {
        list($url, $secret) = orgameConfig();
        if ($secret === '' || !function_exists('curl_init')) {
            return; // nicht konfiguriert: stillschweigend überspringen
        }

        $referer = (string) ($_SERVER['HTTP_REFERER'] ?? '');
        $page = $referer !== '' ? (string) parse_url($referer, PHP_URL_PATH) : '';
        if ($page === '') {
            $page = '/';
        }
        $locale = (isset($_COOKIE['padelbee_lang']) && $_COOKIE['padelbee_lang'] === 'en') ? 'en' : 'de';

        $payload = [
            'source'      => 'padelbee-website',
            'name'        => orgamePlain($data['name'] ?? ''),
            'email'       => orgamePlain($data['email'] ?? ''),
            'phone'       => orgamePlain($data['tel'] ?? ''),
            'city'        => orgamePlain($data['city'] ?? ''),
            'organisation' => orgamePlain($data['unternehmen_organisation'] ?? ''),
            'interesse'   => orgamePlain($data['interesse'] ?? ''),
            'text'        => orgamePlain($data['text'] ?? ''),
            'page'        => $page,
            'locale'      => $locale,
            'submittedAt' => gmdate('Y-m-d\TH:i:s\Z'),
            'meta'        => [
                'ip'        => function_exists('clientIp') ? clientIp() : ($_SERVER['REMOTE_ADDR'] ?? ''),
                'userAgent' => (string) ($_SERVER['HTTP_USER_AGENT'] ?? ''),
            ],
        ];
        $json = json_encode($payload, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_INVALID_UTF8_SUBSTITUTE);
        if ($json === false) {
            error_log('Orgame-Intake: JSON-Encoding fehlgeschlagen');
            return;
        }

        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_POST           => true,
            CURLOPT_POSTFIELDS     => $json,
            CURLOPT_HTTPHEADER     => ['Content-Type: application/json', 'X-Lead-Secret: ' . $secret],
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CONNECTTIMEOUT => 4,
            CURLOPT_TIMEOUT        => 6,
        ]);
        $res  = curl_exec($ch);
        $code = (int) curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
        if ($res === false) {
            error_log('Orgame-Intake fehlgeschlagen: ' . curl_error($ch));
        } elseif ($code < 200 || $code >= 300) {
            error_log('Orgame-Intake HTTP ' . $code . ': ' . substr((string) $res, 0, 200));
        }
        curl_close($ch);
    } catch (\Throwable $e) {
        error_log('Orgame-Intake Fehler: ' . $e->getMessage());
    }
}
