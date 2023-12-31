<?php

namespace Admingate\Media\Facades;

use Admingate\Media\RvMedia;
use Illuminate\Support\Facades\Facade;

/**
 * @see \Admingate\Media\RvMedia
 */
class RvMediaFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return RvMedia::class;
    }
}
