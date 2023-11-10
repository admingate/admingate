<?php

namespace Admingate\ACL\Http\Requests;

use Admingate\Support\Http\Requests\Request;

class RoleCreateRequest extends Request
{
    public function rules(): array
    {
        return [
            'name' => 'required|max:60|min:3',
            'description' => 'required|max:255',
        ];
    }
}
