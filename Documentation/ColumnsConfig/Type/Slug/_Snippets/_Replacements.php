<?php

return [
  'ctrl' => [
    'title' => 'Product',
    'label' => 'title',
    'delete' => 'deleted',
    'enablecolumns' => [
      'disabled' => 'hidden',
    ],
  ],
  'columns' => [
    'title' => [
      'label' => 'Title',
      'config' => [
        'type' => 'input',
        'required' => true,
      ],
    ],
    'slug' => [
      'label' => 'URL segment',
      'config' => [
        'type' => 'slug',
        'generatorOptions' => [
          'fields' => ['title'],
          'replacements' => [
            '&' => 'and',
          ],
        ],
        'fallbackCharacter' => '-',
        'eval' => 'uniqueInPid',
      ],
    ],
  ],
  'types' => [
    '0' => [
      'showitem' => 'title, slug, hidden',
    ],
  ],
];
