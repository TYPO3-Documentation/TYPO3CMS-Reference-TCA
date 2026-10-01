<?php

return [
  'ctrl' => [
    'title' => 'Haiku',
    'label' => 'title',
  ],
  'columns' => [
    'title' => [
      'label' => 'Title',
      'config' => [
        'type' => 'input',
      ],
    ],
    'poem' => [
      'label' => 'Poem',
      'config' => [
        'type' => 'text',
      ],
    ],
    'season' => [
      'label' => 'Season',
      'config' => [
        'type' => 'input',
      ],
    ],
  ],
  'types' => [
    '0' => [
      'showitem' => 'title, poem, --palette--;;details',
    ],
  ],
  'palettes' => [
    'details' => [
      'showitem' => 'season',
    ],
  ],
];
