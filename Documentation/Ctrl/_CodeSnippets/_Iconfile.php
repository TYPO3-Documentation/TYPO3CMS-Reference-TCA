<?php

return [
  'ctrl' => [
    'title' => 'Haiku',
    'label' => 'title',
    'iconfile' => 'EXT:my_extension/Resources/Public/Icons/Haiku.svg',
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
