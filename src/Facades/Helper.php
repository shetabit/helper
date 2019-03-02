<?php

namespace Shetabit\Helper\Facades;

use Illuminate\Support\Facades\Facade;

class Helper extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'helper';
    }
}
