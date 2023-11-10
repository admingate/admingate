<?php

namespace Admingate\ACL\Repositories\Interfaces;

use Admingate\Support\Repositories\Interfaces\RepositoryInterface;

interface RoleInterface extends RepositoryInterface
{
    public function createSlug(string $name, int|string $id): string;
}
