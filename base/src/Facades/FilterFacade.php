<?php

namespace Admingate\Base\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Admingate\Base\Supports\Filter
 */
class FilterFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'core:filter';
    }
}
