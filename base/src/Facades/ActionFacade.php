<?php

namespace Admingate\Base\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Admingate\Base\Supports\Action
 */
class ActionFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'core:action';
    }
}
