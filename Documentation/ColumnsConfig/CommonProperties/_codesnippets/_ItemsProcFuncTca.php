<?php

use MyVendor\MyExtension\UserFunctions\FormEngine\ItemsProcFunc;

return [
  'ctrl' => [
    'title' => 'Something',
    'label' => 'my_select',
  ],
  'columns' => [
    'my_select' => [
      'label' => 'Select with itemsProcFunc',
      'config' => [
        'type' => 'select',
        'renderType' => 'selectSingle',
        'items' => [
          ['label' => 'foo', 'value' => 1],
          ['label' => 'bar', 'value' => 'bar'],
        ],
        'itemsProcFunc' => ItemsProcFunc::class . '->itemsProcFunc',
      ],
    ],
  ],
  'types' => [
    '0' => [
      'showitem' => 'my_select',
    ],
  ],
];
