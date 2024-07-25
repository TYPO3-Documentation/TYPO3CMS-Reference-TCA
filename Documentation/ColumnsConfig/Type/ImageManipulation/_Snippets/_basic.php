<?php

return [
    // ...
    'columns' => [
        'my_image_manipulation' => [
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.crop',
            'config' => [
                'type' => 'imageManipulation',
            ],
        ],
    ],
];
