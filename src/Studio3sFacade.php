<?php

namespace Studio3s\Studio3s;

use Illuminate\Support\Facades\Facade;

class Studio3sFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'studio3s';
    }
}
