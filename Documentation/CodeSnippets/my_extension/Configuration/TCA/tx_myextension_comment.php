<?php

use MyVendor\MyExtension\Backend\CommentLabel;

return [
  'ctrl' => [
    'title' => 'my_extension.db:comment',
    'label' => 'name',
    'label_userFunc' => CommentLabel::class . '->getLabel',
    'default_sortby' => 'crdate DESC',
    'hideTable' => true,
    'adminOnly' => true,
    'crdate' => 'crdate',
    'delete' => 'deleted',
    'enablecolumns' => [
      'disabled' => 'hidden',
    ],
    'versioningWS' => true,
  ],
  'columns' => [
    'name' => [
      'label' => 'my_extension.db:comment.name',
      'config' => [
        'type' => 'input',
        'required' => true,
      ],
    ],
  ],
  'types' => [
    '0' => [
      'showitem' => 'name, hidden',
    ],
  ],
];
