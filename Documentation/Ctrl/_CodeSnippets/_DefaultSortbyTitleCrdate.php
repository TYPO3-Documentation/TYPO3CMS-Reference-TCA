<?php

return [
  'ctrl' => [
    'title' => 'Product',
    'label' => 'title',
    'crdate' => 'crdate',
    'default_sortby' => 'title ASC, crdate DESC',
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
