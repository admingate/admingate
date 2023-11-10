<?php

namespace Admingate\ACL\Events;

use Admingate\ACL\Models\Role;
use Admingate\ACL\Models\User;
use Admingate\Base\Events\Event;
use Illuminate\Queue\SerializesModels;

class RoleAssignmentEvent extends Event
{
    use SerializesModels;

    public Role $role;

    public User $user;

    public function __construct(Role $role, User $user)
    {
        $this->role = $role;
        $this->user = $user;
    }
}
