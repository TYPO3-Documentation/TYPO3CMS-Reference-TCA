<?php

return [
    // ...
    'columns' => [
        'my-country' => [
            'label' => 'Country of Receiver',
            'config' => [
                'type' => 'country',
                'labelField' => 'iso2',
                'default' => 'CH',
            ],
        ],
    ],
];
