<?php

namespace Admingate\ACL\Repositories\Interfaces;

use Admingate\Support\Repositories\Interfaces\RepositoryInterface;

interface UserInterface extends RepositoryInterface
{
    public function getUniqueUsernameFromEmail(string $email): string;
}
