<?php

if (!function_exists('remove_comma')) {
    /**
     * Remove comma's from value.
     *
     * @param string $value
     *
     * @return string
     */
    function remove_comma(string $value) : string
    {
        return app('helper')->removeComma($value);
    }
}

if (!function_exists('to_gregorian')) {
    /**
     * Convert jalali date to gregorian date.
     *
     * @param string $jDate
     *
     * @return string
     */
    function to_gregorian(string $jDate) : string
    {
        return app('helper')->toGregorian($jDate);
    }
}
