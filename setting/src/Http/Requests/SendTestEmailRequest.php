<?php

namespace Admingate\Setting\Http\Requests;

use Admingate\Support\Http\Requests\Request;

class SendTestEmailRequest extends Request
{
    public function rules(): array
    {
        return [
            'email' => 'required|email',
        ];
    }
}
