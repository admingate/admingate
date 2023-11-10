<?php

namespace Admingate\Base\Providers;

use Admingate\Base\Events\AdminNotificationEvent;
use Admingate\Base\Events\BeforeEditContentEvent;
use Admingate\Base\Events\CreatedContentEvent;
use Admingate\Base\Events\DeletedContentEvent;
use Admingate\Base\Events\SendMailEvent;
use Admingate\Base\Events\UpdatedContentEvent;
use Admingate\Base\Listeners\AdminNotificationListener;
use Admingate\Base\Listeners\BeforeEditContentListener;
use Admingate\Base\Listeners\CreatedContentListener;
use Admingate\Base\Listeners\DeletedContentListener;
use Admingate\Base\Listeners\SendMailListener;
use Admingate\Base\Listeners\UpdatedContentListener;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        SendMailEvent::class => [
            SendMailListener::class,
        ],
        CreatedContentEvent::class => [
            CreatedContentListener::class,
        ],
        UpdatedContentEvent::class => [
            UpdatedContentListener::class,
        ],
        DeletedContentEvent::class => [
            DeletedContentListener::class,
        ],
        BeforeEditContentEvent::class => [
            BeforeEditContentListener::class,
        ],
        AdminNotificationEvent::class => [
            AdminNotificationListener::class,
        ],
    ];

    public function boot(): void
    {
        parent::boot();

        $this->app['events']->listen(['cache:cleared'], function () {
            $this->app['files']->delete([storage_path('cache_keys.json'), storage_path('settings.json')]);
        });
    }
}
