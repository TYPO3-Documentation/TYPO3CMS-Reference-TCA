<?php

return [
  'ctrl' => [
    'title' => 'My table',
    'label' => 'title',
  ],
  'columns' => [
    'title' => [
      'label' => 'Title',
      'config' => [
        'type' => 'input',
      ],
    ],

    'extended_group' => [
      'label' => 'Extended group field',
      'config' => [
        'type' => 'group',
        'allowed' => 'tt_content,tx_myextension_teaser',
        'elementBrowserEntryPoints' => [
          // E.g. use a special marker
          '_default' => '###CURRENT_PID###',
          'tt_content' => 123,
          'tx_myextension_teaser' => 124,
        ],
      ],
    ],
  ],
  'types' => [
    '0' => [
      'showitem' => 'title, extended_group',
    ],
  ],
];
