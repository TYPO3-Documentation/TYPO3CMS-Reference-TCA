<?php

return [
  'ctrl' => [
    'title' => 'Product',
    'label' => 'title',
  ],
  'columns' => [
    'title' => [
      'label' => 'Title',
      'config' => [
        'type' => 'input',
      ],
    ],

    'price' => [
      'label' => 'Price',
      'config' => [
        'type' => 'inline',
        'foreign_table' => 'tx_myextension_price',
        'foreign_field' => 'product',
        'relationship' => 'oneToOne',
      ],
    ],
  ],
  'types' => [
    '0' => [
      'showitem' => 'title, price',
    ],
  ],
];
