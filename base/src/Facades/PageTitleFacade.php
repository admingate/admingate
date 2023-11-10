<?php

namespace Admingate\Base\Facades;

use Admingate\Base\Supports\PageTitle;
use Illuminate\Support\Facades\Facade;

/**
 * @see \Admingate\Base\Supports\PageTitle
 */
class PageTitleFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return PageTitle::class;
    }
}
