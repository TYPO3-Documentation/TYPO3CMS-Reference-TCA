<?php

return [
  'ctrl' => [
    'title' => 'Speaker of an event',
    'label' => 'speaker',
    'label_alt' => 'role',
    'label_alt_force' => true,
    'sortby' => 'sorting',
    'delete' => 'deleted',
    'hideTable' => true,
  ],
  'columns' => [
    'event' => [
      'config' => [
        'type' => 'passthrough',
      ],
    ],
    'speaker' => [
      'label' => 'Speaker',
      'config' => [
        'type' => 'group',
        'allowed' => 'tx_myextension_person',
        'minitems' => 1,
        'maxitems' => 1,
      ],
    ],
    'role' => [
      'label' => 'Role',
      'config' => [
        'type' => 'select',
        'renderType' => 'selectSingle',
        'items' => [
          ['label' => 'Talk', 'value' => 'talk'],
          ['label' => 'Keynote', 'value' => 'keynote'],
          ['label' => 'Panel', 'value' => 'panel'],
        ],
      ],
    ],
  ],
  'types' => [
    '0' => [
      'showitem' => 'speaker, role',
    ],
  ],
];
