<?php

namespace MyagmarsurenSedjav\SimplePaymentPocketDriver\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MyagmarsurenSedjav\SimplePaymentPocketDriver\SimplePaymentPocketDriver
 */
class SimplePaymentPocketDriver extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \MyagmarsurenSedjav\SimplePaymentPocketDriver\SimplePaymentPocketDriver::class;
    }
}
