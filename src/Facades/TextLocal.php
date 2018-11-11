<?php

namespace App\TextLocal\Facades;

use Illuminate\Support\Facades\Facade;

class TextLocal extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'textlocal';
    }
}
