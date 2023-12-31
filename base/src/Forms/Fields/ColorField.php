<?php

namespace Admingate\Base\Forms\Fields;

use Assets;
use Kris\LaravelFormBuilder\Fields\FormField;

class ColorField extends FormField
{
    protected function getTemplate(): string
    {
        Assets::addScripts(['colorpicker'])
            ->addStyles(['colorpicker']);

        return 'core/base::forms.fields.color';
    }
}
