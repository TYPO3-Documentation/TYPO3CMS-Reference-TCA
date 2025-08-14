<?php

return [
    'ctrl' => [
        'title' => 'Table with special FlexForm per Type',
        'type' => 'my_type_field',
        'label' => 'uid',
    ],
    'columns' => [
        'my_type_field' => [
            // ...
        ],
        'pi_flexform' => [
            'config' => [
                // FlexFormDefault.xml is used if not overridden in the columnsOverrides
                'ds' => 'FILE:EXT:news/Configuration/FlexFormDefault.xml',
            ],
        ],
    ],
    'types' => [
        0 => [
            'showitem' => 'my_type_field, pi_flexform',
        ],
        1 => [
            'showitem' => 'my_type_field, pi_flexform',
            'columnsOverrides' => [
                'pi_flexform' => [
                    'config' => [
                        'ds' => 'FILE:EXT:news/Configuration/FlexForm1.xml',
                    ],
                ],
            ],
        ],
        2 => [
            'showitem' => 'my_type_field, pi_flexform',
            'columnsOverrides' => [
                'pi_flexform' => [
                    'config' => [
                        'ds' => 'FILE:EXT:news/Configuration/FlexForm2.xml',
                    ],
                ],
            ],
        ],
        3 => [
            'showitem' => 'my_type_field, pi_flexform',
        ],
    ],
];
