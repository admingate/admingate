<?php

namespace Admingate\Base\Facades;

use Admingate\Base\Supports\MacroableModels;
use Illuminate\Support\Facades\Facade;

/**
 * @see \Admingate\Base\Supports\MacroableModels
 */
class MacroableModelsFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return MacroableModels::class;
    }
}
