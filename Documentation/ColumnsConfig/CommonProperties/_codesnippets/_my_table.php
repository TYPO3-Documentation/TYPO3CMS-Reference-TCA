<?php

use MyVendor\MyExtension\Processors\SpecialRelationsProcessor;
use MyVendor\MyExtension\Processors\SpecialRelationsProcessor2;

return [
  'ctrl' => [
    'title' => 'My table',
    'label' => 'relation',
  ],
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
        'foreign_table' => 'tx_myextension_related',
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
  'types' => [
    '0' => [
      'showitem' => 'relation',
    ],
  ],
];
