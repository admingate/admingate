<?php

namespace Admingate\Base\Facades;

use Admingate\Base\Supports\BreadcrumbsManager;
use Illuminate\Support\Facades\Facade;

/**
 * @see \Admingate\Base\Supports\BreadcrumbsManager
 */
class BreadcrumbsFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return BreadcrumbsManager::class;
    }
}
