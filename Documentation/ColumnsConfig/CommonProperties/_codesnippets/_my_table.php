<?php

use MyVendor\MyExtension\Processors\SpecialRelationsProcessor;

return
    [
        // ...
        'columns' => [
            'relation' => [
                'label' => 'Relational field',
                'config' => [
                    'type' => 'select',
                    'renderType' => 'selectSingle',
                    'items' => [
                        [
                            'value' => 0,
                            'label' => '',
                        ],
                    ],
                    'foreign_table' => 'some_foreign_table',
                    'itemsProcessors' => [
                        100 => [
                            'class' => SpecialRelationsProcessor::class,
                            'parameters' => [
                                'foo' => 'bar',
                            ],
                        ],
                        50 => [
                            'class' => SpecialRelationsProcessor2::class,
                        ],
                    ],
                ],
            ],
        ],
    ];
