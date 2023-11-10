<?php

namespace Admingate\Base\Facades;

use Admingate\Base\Supports\EmailHandler;
use Illuminate\Support\Facades\Facade;

/**
 * @see \Admingate\Base\Supports\EmailHandler
 */
class EmailHandlerFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return EmailHandler::class;
    }
}
