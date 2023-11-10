<?php

namespace Admingate\Base\Facades;

use Admingate\Base\Supports\DashboardMenu;
use Illuminate\Support\Facades\Facade;

/**
 * @see \Admingate\Base\Supports\DashboardMenu
 */
class DashboardMenuFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return DashboardMenu::class;
    }
}
