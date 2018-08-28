<?php

namespace Itiden\Fields;

use Laravel\Nova\Fields\Field;

class FileSize extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'fileSize';

    public function __construct(string $name, ?string $attribute = null, ?mixed $resolveCallback = null)
    {
        parent::__construct($name, $attribute, $resolveCallback);
    }
}
