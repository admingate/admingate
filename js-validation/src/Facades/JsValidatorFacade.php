<?php

namespace Admingate\JsValidation\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Admingate\JsValidation\JsValidatorFactory
 */
class JsValidatorFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'js-validator';
    }
}
