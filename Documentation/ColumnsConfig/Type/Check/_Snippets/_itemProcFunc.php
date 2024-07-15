<?php

use MyVendor\MyExtension\UserFunctions\MyItemsProcFunc;

return [
    'columns' => [
        'checkbox_itemsProcFunc' => [
            'exclude' => 1,
            'label' => 'checkbox itemsProcFunc',
            'config' => [
                'type' => 'check',
                'items' => [
                    ['label' => 'foo', 'value' => 1],
                    ['label' => 'bar', 'value' => 'bar'],
                ],
                'itemsProcFunc' => MyItemsProcFunc::class . '->itemsProcFunc',
            ],
        ],
    ],
];
