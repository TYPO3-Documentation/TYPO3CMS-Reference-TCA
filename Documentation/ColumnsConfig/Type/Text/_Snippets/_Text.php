<?php

use MyVendor\MyExtension\Evaluation\TextEvaluation;

return [
  'ctrl' => [
    'title' => 'My table',
    'label' => 'my_editor',
  ],
  'columns' => [
    'my_editor' => [
      'label' => 'My HTML Editor',
      'description' => 'field description',
      'config' => [
        'type' => 'text',
        'renderType' => 'codeEditor',
        'format' => 'html',
        'rows' => 7,
      ],
    ],

    'nullable_text' => [
      'label' => 'A nullable field',
      'config' => [
        'type' => 'text',
        'nullable' => true,
      ],
    ],

    'custom_eval_text' => [
      'label' => 'Text with custom evaluation',
      'config' => [
        'type' => 'text',
        'eval' => TextEvaluation::class,
      ],
    ],
  ],
  'types' => [
    '0' => [
      'showitem' => 'my_editor',
    ],
  ],
];
