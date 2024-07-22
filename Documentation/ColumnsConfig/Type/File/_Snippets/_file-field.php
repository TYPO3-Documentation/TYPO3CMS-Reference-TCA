<?php

return [
    // ...
    'columns' => [
        'my_image' => [
            'label' => 'My image',
            'config' => [
                'type' => 'file',
                'maxitems' => 6,
                'allowed' => 'common-image-types'
            ],
        ],
        // ...
    ],
];