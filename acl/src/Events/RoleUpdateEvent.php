<?php

namespace Admingate\ACL\Events;

use Admingate\ACL\Models\Role;
use Admingate\Base\Events\Event;
use Illuminate\Queue\SerializesModels;

class RoleUpdateEvent extends Event
{
    use SerializesModels;

    public Role $role;

    public function __construct(Role $role)
    {
        $this->role = $role;
    }
}
