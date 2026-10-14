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

    'with_value_picker' => [
      'label' => 'Text field with value picker',
      'config' => [
        'type' => 'text',
        'valuePicker' => [
          'items' => [
            [
              'Lorem ipsum',
              'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.',
            ],
            [
              'Brown fox',
              'The quick brown fox jumps over the lazy dog',
            ],
            [
              'Old story',
              'It\'s the same old story everywhere. The layout is done, but the text is taking forever to come.',
            ],
            [
              'Li Europan lingues',
              "Li Europan lingues es membres del sam familie.\nLor separat existentie es un myth.\nPor scientie, musica, sport etc, litot Europa usa li sam vocabular.",
            ],
          ],
        ],
      ],
    ],
  ],
  'types' => [
    '0' => [
      'showitem' => 'my_editor',
    ],
  ],
];
