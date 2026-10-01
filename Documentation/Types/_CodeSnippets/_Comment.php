<?php

return [
  'ctrl' => [
    'title' => 'Comment',
    'label' => 'name',
    'enablecolumns' => [
      'disabled' => 'hidden',
    ],
  ],
  'types' => [
    '0' => [
      'showitem' => 'hidden, name, email, content, date',
    ],
  ],
  'columns' => [
    'name' => [
      'label' => 'Name',
      'config' => [
        'type' => 'input',
      ],
    ],
    'email' => [
      'label' => 'Email',
      'config' => [
        'type' => 'email',
      ],
    ],
    'content' => [
      'label' => 'Comment',
      'config' => [
        'type' => 'text',
      ],
    ],
    'date' => [
      'label' => 'Date',
      'config' => [
        'type' => 'datetime',
      ],
    ],
  ],
];
