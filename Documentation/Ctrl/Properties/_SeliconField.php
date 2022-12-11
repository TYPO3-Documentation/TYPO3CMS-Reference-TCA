<?php

return [
    'ctrl' => [
        'title' => 'Form engine elements - select foreign single_12',
        'label' => 'fal_1',
        'selicon_field' => 'fal_1',
        // ...
    ],

    'columns' => [
        'fal_1' => [
            'label' => 'fal_1 selicon_field',
            'config' => [
                'type' => 'file',
                'allowed' => 'common-media-types',
                'maxitems' => 1,
            ],
        ],

    ],

    // ...

];
