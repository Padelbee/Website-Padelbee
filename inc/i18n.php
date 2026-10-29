<?php
/**
 * i18n: Language detection, cookie, and t() for DE/EN.
 * Include this first (e.g. at top of header.php).
 */

if (!defined('PADELBEE_I18N_LOADED')) {
    define('PADELBEE_I18N_LOADED', true);

    $PADELBEE_LANG_COOKIE = 'padelbee_lang';
    $PADELBEE_LANG_COOKIE_TTL = 60 * 60 * 24 * 365; // 1 year

    // 1) Read desired language from GET
    $lang_param = isset($_GET['lang']) ? strtolower(trim($_GET['lang'])) : null;
    if ($lang_param === 'en' || $lang_param === 'de') {
        setcookie($PADELBEE_LANG_COOKIE, $lang_param, time() + $PADELBEE_LANG_COOKIE_TTL, '/', '', false, true);
        $lang = $lang_param;
        // Redirect to same path without ?lang= to keep URL clean
        $redirect_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $redirect_url = $redirect_path ?: '/';
        header('Location: ' . $redirect_url, true, 302);
        exit;
    }

    // 2) Otherwise use cookie or default
    $lang = isset($_COOKIE[$PADELBEE_LANG_COOKIE]) && $_COOKIE[$PADELBEE_LANG_COOKIE] === 'en' ? 'en' : 'de';

    // Load language arrays
    $PADELBEE_TRANSLATIONS = [];
    $lang_file_de = __DIR__ . '/../lang/de.php';
    $lang_file_en = __DIR__ . '/../lang/en.php';
    if (file_exists($lang_file_de)) {
        include $lang_file_de;
        $PADELBEE_TRANSLATIONS['de'] = isset($translations_de) ? $translations_de : [];
    }
    if (file_exists($lang_file_en)) {
        include $lang_file_en;
        $PADELBEE_TRANSLATIONS['en'] = isset($translations_en) ? $translations_en : [];
    }

    /**
     * Translate key for current language.
     * @param string $key
     * @return string
     */
    function t($key) {
        global $lang, $PADELBEE_TRANSLATIONS;
        $tr = $PADELBEE_TRANSLATIONS[$lang] ?? $PADELBEE_TRANSLATIONS['de'] ?? [];
        return isset($tr[$key]) ? $tr[$key] : $key;
    }
}
