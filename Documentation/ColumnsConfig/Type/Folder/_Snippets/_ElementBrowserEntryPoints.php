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

    'folder_group' => [
      'label' => 'Folder field',
      'config' => [
        'type' => 'folder',
        'elementBrowserEntryPoints' => [
          '_default' => '1:/styleguide/',
        ],
      ],
    ],
    'folder_tsconfig' => [
      'label' => 'Folder field with TSconfig entry point',
      'config' => [
        'type' => 'folder',
        'elementBrowserEntryPoints' => [
          '_default' => '###PAGE_TSCONFIG_ID###',
        ],
      ],
    ],
  ],
  'types' => [
    '0' => [
      'showitem' => 'title, folder_group, folder_tsconfig',
    ],
  ],
];
