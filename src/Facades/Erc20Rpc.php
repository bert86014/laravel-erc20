<?php

namespace Bert86014\Erc20Rpc\Facades;

use Illuminate\Support\Facades\Facade;

class Erc20Rpc extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return "Erc20Rpc";
    }
}