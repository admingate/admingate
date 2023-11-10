<?php

namespace Admingate\Base\Facades;

use Admingate\Base\Helpers\BaseHelper;
use Illuminate\Support\Facades\Facade;

/**
 * @see \Admingate\Base\Helpers\BaseHelper
 */
class BaseHelperFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return BaseHelper::class;
    }
}
