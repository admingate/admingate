<?php

namespace Admingate\Setting\Facades;

use Admingate\Setting\Supports\SettingStore;
use Illuminate\Support\Facades\Facade;

/**
 * @see \Admingate\Setting\Supports\SettingStore
 */
class SettingFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return SettingStore::class;
    }
}
