<?php

namespace Admingate\Base\Providers;

use Admingate\Base\Commands\ActivateLicenseCommand;
use Admingate\Base\Commands\CleanupSystemCommand;
use Admingate\Base\Commands\ClearLogCommand;
use Admingate\Base\Commands\ExportDatabaseCommand;
use Admingate\Base\Commands\FetchGoogleFontsCommand;
use Admingate\Base\Commands\InstallCommand;
use Admingate\Base\Commands\PublishAssetsCommand;
use Admingate\Base\Commands\UpdateCommand;
use Illuminate\Support\ServiceProvider;

class CommandServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->commands([
            ClearLogCommand::class,
            InstallCommand::class,
            UpdateCommand::class,
            PublishAssetsCommand::class,
            CleanupSystemCommand::class,
            ExportDatabaseCommand::class,
            FetchGoogleFontsCommand::class,
            ActivateLicenseCommand::class,
        ]);
    }
}
