<?php

namespace Admingate\Table\Http\Requests;

use Admingate\Support\Http\Requests\Request;

class FilterRequest extends Request
{
    public function rules(): array
    {
        return [
            'class' => 'required',
        ];
    }
}
