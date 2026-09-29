<?php

return [
  'ctrl' => [
    'title' => 'My table',
    'label' => 'title',
    'adminOnly' => true,
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
