<?php

namespace Admingate\Base\Listeners;

use Admingate\Base\Events\UpdatedContentEvent;
use Exception;

class UpdatedContentListener
{
    public function handle(UpdatedContentEvent $event): void
    {
        try {
            do_action(BASE_ACTION_AFTER_UPDATE_CONTENT, $event->screen, $event->request, $event->data);
        } catch (Exception $exception) {
            info($exception->getMessage());
        }
    }
}
