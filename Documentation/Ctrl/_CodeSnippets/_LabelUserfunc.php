<?php

use MyVendor\MyExtension\Userfuncs\Tca;

return [
  'ctrl' => [
    'title' => 'Haiku',
    'label' => 'title',
    'label_userFunc' => Tca::class . '->haikuTitle',
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
  ],
  'types' => [
    '0' => [
      'showitem' => 'title, poem',
    ],
  ],
];
