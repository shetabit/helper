<?php

namespace Shetabit\Helper;

use Verta;

class Helper
{
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
<<<<<<< HEAD
     * 
     * @param  string $jDate 
     * @return null|string
=======
     *
     * @param string $jDate
     *
     * @return string
>>>>>>> 887ce24ebe1ee8290b5d72241060327179b371c1
     */
    public function toGregorian(string $jDate) : string
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
