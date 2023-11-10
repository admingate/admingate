<?php

namespace Admingate\Base\Facades;

use Admingate\Base\Supports\MetaBox;
use Illuminate\Support\Facades\Facade;

/**
 * @see \Admingate\Base\Supports\MetaBox
 */
class MetaBoxFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return MetaBox::class;
    }
}
