<?php

namespace Asalout\DatetimePicker;

use Laravel\Nova\Fields\Field;

class DatetimePicker extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'datetime-picker';

    public function __construct($name, $attribute = null, callable $resolveCallback = null)
    {
        $this->withMeta([
            'fieldType' => 'date',
            'dateFormat' => 'Y-m-d H:i',
            'class' => 'ltr text-left',
        ]);
        parent::__construct($name, $attribute, $resolveCallback);
    }
}
