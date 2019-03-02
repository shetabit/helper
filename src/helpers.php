<?php

if (!function_exists('random_password')) {
    /**
     * Generate random password.
     *
     * @param int $length
     * @param string $availableSets
     * @return string
     */
    function random_password(int $length = 9, string $availableSets = 'luds')
    {
        return app('helper')->randomPassword($length, $availableSets);
    }
}

if (!function_exists('persian_slug')) {
    /**
     * Generate persian slug.
     *
     * @param string $string
     * @param string $separator
     * @return false|mixed|string|string[]|null
     */
    function persian_slug(string $string, string $separator = '-')
    {
        return app('helper')->persianSlug($string, $separator);
    }
}

if (!function_exists('fa_to_en_nums')) {
    /**
     * Convert all Persian(Farsi) numbers to English.
     *
     * @param string $number
     * @return mixed
     */
    function fa_to_en_nums(string $number)
    {
        return app('helper')->faToEnNums($number);
    }
}

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
     * @return null|string
     */
    function to_gregorian(string $jDate)
    {
        return app('helper')->toGregorian($jDate);
    }
}
