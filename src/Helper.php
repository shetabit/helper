<?php

namespace Shetabit\Helper;

use Verta;

class Helper
{
    /**
     * Generate random password.
     *
     * @param int    $length
     * @param string $availableSets
     *
     * @return string
     */
    public function randomPassword(int $length = 9, string $availableSets = 'luds')
    {
        $sets = [];
        if (strpos($availableSets, 'l') !== false) {
            $sets[] = 'abcdefghjkmnpqrstuvwxyz';
        }
        if (strpos($availableSets, 'u') !== false) {
            $sets[] = 'ABCDEFGHJKMNPQRSTUVWXYZ';
        }
        if (strpos($availableSets, 'd') !== false) {
            $sets[] = '23456789';
        }
        if (strpos($availableSets, 's') !== false) {
            $sets[] = '!@#$%&*?';
        }

        $all = '';
        $password = '';
        foreach ($sets as $set) {
            $password .= $set[array_rand(str_split($set))];
            $all .= $set;
        }

        $allArray = str_split($all);
        for ($i = 0; $i < $length - count($sets); $i++) {
            $password .= $allArray[array_rand($allArray)];
        }
        $password = str_shuffle($password);

        return $password;
    }

    /**
     * Generate persian slug.
     *
     * @param string $string
     * @param string $separator
     *
     * @return false|mixed|string|string[]|null
     */
    public function persianSlug(string $string, string $separator = '-')
    {
        $_transliteration = [
            '/ä|æ|ǽ/'                         => 'ae',
            '/ö|œ/'                           => 'oe',
            '/ü/'                             => 'ue',
            '/Ä/'                             => 'Ae',
            '/Ü/'                             => 'Ue',
            '/Ö/'                             => 'Oe',
            '/À|Á|Â|Ã|Å|Ǻ|Ā|Ă|Ą|Ǎ/'           => 'A',
            '/à|á|â|ã|å|ǻ|ā|ă|ą|ǎ|ª/'         => 'a',
            '/Ç|Ć|Ĉ|Ċ|Č/'                     => 'C',
            '/ç|ć|ĉ|ċ|č/'                     => 'c',
            '/Ð|Ď|Đ/'                         => 'D',
            '/ð|ď|đ/'                         => 'd',
            '/È|É|Ê|Ë|Ē|Ĕ|Ė|Ę|Ě/'             => 'E',
            '/è|é|ê|ë|ē|ĕ|ė|ę|ě/'             => 'e',
            '/Ĝ|Ğ|Ġ|Ģ/'                       => 'G',
            '/ĝ|ğ|ġ|ģ/'                       => 'g',
            '/Ĥ|Ħ/'                           => 'H',
            '/ĥ|ħ/'                           => 'h',
            '/Ì|Í|Î|Ï|Ĩ|Ī|Ĭ|Ǐ|Į|İ/'           => 'I',
            '/ì|í|î|ï|ĩ|ī|ĭ|ǐ|į|ı/'           => 'i',
            '/Ĵ/'                             => 'J',
            '/ĵ/'                             => 'j',
            '/Ķ/'                             => 'K',
            '/ķ/'                             => 'k',
            '/Ĺ|Ļ|Ľ|Ŀ|Ł/'                     => 'L',
            '/ĺ|ļ|ľ|ŀ|ł/'                     => 'l',
            '/Ñ|Ń|Ņ|Ň/'                       => 'N',
            '/ñ|ń|ņ|ň|ŉ/'                     => 'n',
            '/Ò|Ó|Ô|Õ|Ō|Ŏ|Ǒ|Ő|Ơ|Ø|Ǿ/'         => 'O',
            '/ò|ó|ô|õ|ō|ŏ|ǒ|ő|ơ|ø|ǿ|º/'       => 'o',
            '/Ŕ|Ŗ|Ř/'                         => 'R',
            '/ŕ|ŗ|ř/'                         => 'r',
            '/Ś|Ŝ|Ş|Ș|Š/'                     => 'S',
            '/ś|ŝ|ş|ș|š|ſ/'                   => 's',
            '/Ţ|Ț|Ť|Ŧ/'                       => 'T',
            '/ţ|ț|ť|ŧ/'                       => 't',
            '/Ù|Ú|Û|Ũ|Ū|Ŭ|Ů|Ű|Ų|Ư|Ǔ|Ǖ|Ǘ|Ǚ|Ǜ/' => 'U',
            '/ù|ú|û|ũ|ū|ŭ|ů|ű|ų|ư|ǔ|ǖ|ǘ|ǚ|ǜ/' => 'u',
            '/Ý|Ÿ|Ŷ/'                         => 'Y',
            '/ý|ÿ|ŷ/'                         => 'y',
            '/Ŵ/'                             => 'W',
            '/ŵ/'                             => 'w',
            '/Ź|Ż|Ž/'                         => 'Z',
            '/ź|ż|ž/'                         => 'z',
            '/Æ|Ǽ/'                           => 'AE',
            '/ß/'                             => 'ss',
            '/Ĳ/'                             => 'IJ',
            '/ĳ/'                             => 'ij',
            '/Œ/'                             => 'OE',
            '/ƒ/'                             => 'f',
        ];
        $quotedReplacement = preg_quote($separator, '/');
        $merge = [
            '/[^\s\p{Zs}\p{Ll}\p{Lm}\p{Lo}\p{Lt}\p{Lu}\p{Nd}]/mu' => ' ',
            '/[\s\p{Zs}]+/mu'                                     => $separator,
            sprintf('/^[%s]+|[%s]+$/', $quotedReplacement, $quotedReplacement) => '',
        ];
        $map = $_transliteration + $merge;
        unset($_transliteration);

        return mb_strtolower(preg_replace(array_keys($map), array_values($map), $string));
    }

    /**
     * Convert all Persian(Farsi) numbers to English.
     *
     * @param string $number
     *
     * @return mixed
     */
    public function faToEnNums(string $number)
    {
        $persianDigits1 = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
        $persianDigits2 = ['٩', '٨', '٧', '٦', '٥', '٤', '٣', '٢', '١', '٠'];
        $allPersianDigits = array_merge($persianDigits1, $persianDigits2);
        $replaces = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '9', '8', '7', '6', '5', '4', '3', '2', '1', '0'];

        return str_replace($allPersianDigits, $replaces, $number);
    }

    /**
     * Remove comma's from value.
     *
     * @param string $value
     *
     * @return string
     */
    public function removeComma(string $value) : string
    {
        return str_replace(',', '', $value);
    }

    /**
     * Convert jalali date to gregorian date.
     *
     * @param string $jDate
     *
     * @return null|string
     */
    public function toGregorian(string $jDate)
    {
        $output = null;
        $pattern = '#^(\\d{4})/(0?[1-9]|1[012])/(0?[1-9]|[12][0-9]|3[01])$#';

        if (preg_match($pattern, $jDate)) {
            $jDateArray = explode('/', $jDate);
            $dateArray = Verta::getGregorian(
                $jDateArray[0],
                $jDateArray[1],
                $jDateArray[2]
            );
            $output = implode('/', $dateArray);
        }

        return $output;
    }
}
