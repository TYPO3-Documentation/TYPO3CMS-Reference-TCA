<?php

return [
  'ctrl' => [
    'title' => 'My table',
    'label' => 'title',
    'languageField' => 'sys_language_uid',
  ],
  'columns' => [
    'title' => [
      'label' => 'Title',
      'config' => [
        'type' => 'input',
      ],
    ],
    'sys_language_uid' => [
      'label' => 'Language',
      'config' => [
        'type' => 'language',
      ],
    ],
  ],
  'types' => [
    '0' => [
      'showitem' => 'sys_language_uid, title',
    ],
  ],
];
