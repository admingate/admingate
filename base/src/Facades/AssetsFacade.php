<?php

namespace Admingate\Base\Facades;

use Admingate\Base\Supports\Assets;
use Illuminate\Support\Facades\Facade;

/**
 * @see \Admingate\Base\Supports\Assets
 */
class AssetsFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return Assets::class;
    }
}
