<?php

namespace Admingate\Dashboard\Repositories\Caches;

use Admingate\Dashboard\Repositories\Interfaces\DashboardWidgetSettingInterface;
use Admingate\Support\Repositories\Caches\CacheAbstractDecorator;

class DashboardWidgetSettingCacheDecorator extends CacheAbstractDecorator implements DashboardWidgetSettingInterface
{
    public function getListWidget()
    {
        return $this->getDataIfExistCache(__FUNCTION__, func_get_args());
    }
}
