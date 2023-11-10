<?php

namespace Admingate\ACL\Providers;

use Admingate\ACL\Commands\UserCreateCommand;
use Illuminate\Support\ServiceProvider;

class CommandServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                UserCreateCommand::class,
            ]);
        }
    }
}
