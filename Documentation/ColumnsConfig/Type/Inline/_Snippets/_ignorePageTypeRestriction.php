<?php

return [
  'ctrl' => [
    'title' => 'Something',
    'label' => 'title',
    'security' => [
      'ignorePageTypeRestriction' => true,
    ],
  ],
  'columns' => [
    'title' => [
      'label' => 'Title',
      'config' => [
        'type' => 'input',
      ],
    ],
  ],
  'types' => [
    '0' => [
      'showitem' => 'title',
    ],
  ],
];
