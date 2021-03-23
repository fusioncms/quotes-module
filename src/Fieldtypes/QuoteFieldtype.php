<?php

namespace Addon\Quotes\Fieldtypes;

use Fusion\Fieldtypes\Fieldtype;

class QuoteFieldtype extends Fieldtype
{
    /**
     * @var string
     */
    public $name = 'Quote';

    /**
     * @var string
     */
    public $icon = 'quote-right';

    /**
     * @var string
     */
    public $description = 'Quote selector.';

    /**
     * @var string
     */
    public $cast = 'string';

    /**
     * @var array
     */
    public $settings = [
        'multiple'   => false,
        'filterable' => false,
    ];

    /**
     * @var array
     */
    public $column = [
        'type' => 'string',
    ];
}
