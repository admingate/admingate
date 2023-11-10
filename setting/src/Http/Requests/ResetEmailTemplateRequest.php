<?php

namespace Admingate\Setting\Http\Requests;

use Admingate\Support\Http\Requests\Request;

class ResetEmailTemplateRequest extends Request
{
    public function rules(): array
    {
        return [
            'module' => 'required|string|alpha_dash',
            'template_file' => 'required|string|alpha_dash',
        ];
    }
}
