<?php

/**
 * Tiny i18n system
 */
class I18N
{
    public static $lang = null;
    public static $defaultLang = null;
    public static $locales = [];
    public static $translations = [];

    public static function debug($value)
    {
        die(var_dump($value));
    }

    public static function getCurrentLang(){
        return self::$lang;
    }

    public static function get($key, $default = null)
    {
        if (isset(self::$translations[self::$lang][$key])) {
            return self::$translations[self::$lang][$key];
        }

        self::$translations[self::$lang][$key] = $key;

        file_put_contents(__DIR__ . '/../langs/' . self::$lang . '.php', "<?php \n\n return " . var_export(self::$translations[self::$lang], true) . ';');

        return $key;
    }

    /**
     * Load the current lang and translation file
     *
     * @param null $lang
     */
    public static function load($lang = null, $defaultLang = 'en')
    {
        self::$defaultLang = $defaultLang;

        self::getLangs();

        $langDetected = self::detectLanguage();

        $langUri = self::currentUriLang();

        /**
         * If force_locale is set we must store it in a cookie
         */
        if (isset($_REQUEST['force_locale'])) {
            setcookie('_lang', $langUri);
            $_COOKIE['_lang'] = $langUri;
        }

        if (!$lang) {
            if (isset($_COOKIE['_lang'])) {
                $lang = $_COOKIE['_lang'];
            } elseif ($langDetected) {
                $lang = $langDetected;
            } else {
                $lang = $defaultLang;
            }
        }

        self::redirectLangIfNeeded($lang, $defaultLang);

        self::$lang = $lang;
    }

    /**
     * Get all localization
     *
     * @return array
     */
    public static function getLangs()
    {

        $langsFile = glob(__DIR__ . '/../langs/*.php');

        $langs = array_map(function ($file) {

            $translation = include $file;

            $locale = str_replace([__DIR__ . '/../langs/', '.php'], '', $file);

            self::$translations[$locale] = $translation;

            return $locale;

        }, $langsFile);

        self::$locales = $langs;

        return $langs;
    }

    /**
     * @return false|string
     */
    public static function detectLanguage()
    {
        return substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    }

    /**
     * Get the current lang by URI
     *
     * @return false|string
     */
    public static function currentUriLang()
    {
        $lang = substr($_SERVER['REQUEST_URI'], 1, 2);

        if (!in_array($lang, self::$locales)) {
            return self::$defaultLang;
        }

        return $lang;
    }

    /**
     * Redirect current file if needed
     *
     * @param $lang
     */
    public static function redirectLangIfNeeded($lang, $defaultLang)
    {

        if (in_array($lang, self::$locales, true)) {
            if ($lang !== self::currentUriLang()) {

                if ($lang === self::$defaultLang) {
                    $lang = null;
                }

                header("Location: /" . $lang);
                die();
            }
        } else {
            self::$lang = $defaultLang;
        }
    }
}

if (!function_exists('__')) {
    function __($key, $default = null)
    {
        return I18N::get($key, $default);
    }
}