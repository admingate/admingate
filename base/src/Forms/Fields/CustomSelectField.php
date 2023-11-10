<?php

namespace Admingate\Base\Forms\Fields;

use Kris\LaravelFormBuilder\Fields\SelectType;

class CustomSelectField extends SelectType
{
    protected function getTemplate(): string
    {
        return 'core/base::forms.fields.custom-select';
    }
}
