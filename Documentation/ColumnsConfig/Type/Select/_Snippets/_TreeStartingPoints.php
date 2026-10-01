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

    'site_categories' => [
      'label' => 'Categories',
      'config' => [
        'type' => 'select',
        'renderType' => 'selectTree',
        'foreign_table' => 'tx_myextension_category',
        'treeConfig' => [
          'parentField' => 'parent',
          'startingPoints' => '1,2,###SITE:categories.root###',
        ],
      ],
    ],
  ],
  'types' => [
    '0' => [
      'showitem' => 'title, site_categories',
    ],
  ],
];
