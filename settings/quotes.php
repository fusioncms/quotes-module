<?php

return [
    'name'        => 'Quotes',
    'group'       => 'General',
    'icon'        => 'quote',
    'description' => 'Configure Quotes Module Settings.',
    'settings'    => [
		'General' => [
            [
                'name'        => 'Allow anonymous quotes',
                'handle'      => 'allow_anonymous_quotes',
                'description' => 'Control whether anonymous accounts can post quotes.',
                'type'        => 'select',
                'options'     => [
                    'enabled'  => 'Enabled',
                    'disabled' => 'Disabled',
                ],
                'default'  => 'enabled',
                'required' => true,
            ],
        ],
    ]
];