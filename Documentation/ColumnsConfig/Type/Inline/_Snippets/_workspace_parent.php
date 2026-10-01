<?php

return [
  'ctrl' => [
    'title' => 'My workspace aware parent',
    'label' => 'title',
    'versioningWS' => true,
  ],
  'columns' => [
    'title' => [
      'label' => 'Title',
      'config' => [
        'type' => 'input',
      ],
    ],
    'children' => [
      'label' => 'Children',
      'config' => [
        'type' => 'inline',
        'foreign_table' => 'tx_myextension_mychild',
        'foreign_field' => 'parentid',
      ],
    ],
  ],
  'types' => [
    '0' => [
      'showitem' => 'title, children',
    ],
  ],
];
