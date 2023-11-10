<?php

namespace Admingate\Table\Http\Requests;

use Admingate\Support\Http\Requests\Request;

class BulkChangeRequest extends Request
{
    public function rules(): array
    {
        return [
            'class' => 'required',
        ];
    }
}
