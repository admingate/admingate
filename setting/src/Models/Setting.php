<?php

namespace Admingate\Setting\Models;

use Admingate\Base\Models\BaseModel;

class Setting extends BaseModel
{
    protected $table = 'settings';

    protected $fillable = [
        'key',
        'value',
    ];
}
