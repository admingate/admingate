<?php

namespace Admingate\Base\Listeners;

use Admingate\Base\Events\AdminNotificationEvent;
use Admingate\Base\Models\AdminNotification;

class AdminNotificationListener
{
    public function handle(AdminNotificationEvent $event): void
    {
        $item = $event->item;

        AdminNotification::create([
            'title' => $item->getTitle(),
            'action_label' => $item->getLabel(),
            'action_url' => $item->getRoute(),
            'description' => $item->getDescription(),
        ]);
    }
}
