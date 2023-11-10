<?php

namespace Admingate\ACL\Repositories\Caches;

use Admingate\ACL\Repositories\Interfaces\RoleInterface;
use Admingate\Support\Repositories\Caches\CacheAbstractDecorator;

class RoleCacheDecorator extends CacheAbstractDecorator implements RoleInterface
{
    public function createSlug(string $name, int|string $id): string
    {
        return $this->flushCacheAndUpdateData(__FUNCTION__, func_get_args());
    }
}
