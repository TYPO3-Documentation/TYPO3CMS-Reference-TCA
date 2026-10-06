<?php

return [
  'ctrl' => [
    'title' => 'my_extension.db:sponsor',
    'label' => 'name',
    'default_sortby' => 'name',
    'tstamp' => 'tstamp',
    'crdate' => 'crdate',
    'delete' => 'deleted',
    'iconfile' => 'EXT:my_extension/Resources/Public/Icons/Sponsor.svg',
  ],
  'columns' => [
    'name' => [
      'label' => 'my_extension.db:sponsor.name',
      'config' => [
        'type' => 'input',
        'required' => true,
      ],
    ],
  ],
  'types' => [
    '0' => [
      'showitem' => 'name',
    ],
  ],
];
