<?php

namespace Admingate\ACL\Http\Requests;

use Admingate\Support\Http\Requests\Request;
use RvMedia;

class AvatarRequest extends Request
{
    public function rules(): array
    {
        return [
            'avatar_file' => RvMedia::imageValidationRule(),
            'avatar_data' => 'required',
        ];
    }
}
