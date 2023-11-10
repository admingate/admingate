<?php

namespace Admingate\ACL\Providers;

use Admingate\ACL\Events\RoleAssignmentEvent;
use Admingate\ACL\Events\RoleUpdateEvent;
use Admingate\ACL\Listeners\LoginListener;
use Admingate\ACL\Listeners\RoleAssignmentListener;
use Admingate\ACL\Listeners\RoleUpdateListener;
use Illuminate\Auth\Events\Login;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        RoleUpdateEvent::class => [
            RoleUpdateListener::class,
        ],
        RoleAssignmentEvent::class => [
            RoleAssignmentListener::class,
        ],
        Login::class => [
            LoginListener::class,
        ],
    ];
}
