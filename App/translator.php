<?php
    /**
     * Created by PhpStorm.
     * User: kai
     * Date: 6/28/14
     * Time: 4:02 PM
     */

    include_once "lang/register.php";


    function array_get($array, $key, $default = null)
    {
        if (is_null($key)) return $array;

        if (isset($array[$key])) return $array[$key];

        foreach (explode('.', $key) as $segment) {
            if (!is_array($array) || !array_key_exists($segment, $array)) {
                return value($default);
            }
            $array = $array[$segment];
        }
        return $array;
    }

    function trans($key)
    {
        global $en, $es;
        if (isset($_SESSION['lang'])) {
            $languague = $$_SESSION['lang'];
            $text = array_get($languague, $key, $key);
            return $text;
        } else {
            return $key;
        }
    }

