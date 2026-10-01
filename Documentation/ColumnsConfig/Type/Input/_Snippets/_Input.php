<?php

use MyVendor\MyExtension\Evaluation\ExampleEvaluation;

return [
  'ctrl' => [
    'title' => 'My table',
    'label' => 'trimmed',
  ],
  'columns' => [
    'trimmed' => [
      'label' => 'Trimmed',
      'config' => [
        'type' => 'input',
        'eval' => 'trim',
      ],
    ],

    'combined' => [
      'label' => 'Lower case without spaces',
      'config' => [
        'type' => 'input',
        'required' => true,
        'eval' => 'nospace,lower,unique',
      ],
    ],

    'custom_eval' => [
      'label' => 'Custom evaluation',
      'config' => [
        'type' => 'input',
        'required' => true,
        'eval' => 'trim,' . ExampleEvaluation::class,
      ],
    ],

    'autocomplete' => [
      'label' => 'With autocomplete',
      'config' => [
        'type' => 'input',
        'size' => 20,
        'nullable' => true,
        'autocomplete' => true,
      ],
    ],

    'nullable_column' => [
      'label' => 'A nullable field',
      'config' => [
        'type' => 'input',
        'nullable' => true,
        'eval' => 'trim',
      ],
    ],

    'with_placeholder' => [
      'label' => 'My input field',
      'config' => [
        'type' => 'input',
        'placeholder' => 'Enter a title',
        'mode' => 'useOrOverridePlaceholder',
      ],
    ],

    'my_favorite_season' => [
      'label' => 'Season',
      'config' => [
        'type' => 'input',
        'valuePicker' => [
          'items' => [
            ['label' => 'Spring', 'value' => 'spring'],
            ['label' => 'Summer', 'value' => 'summer'],
            ['label' => 'Autumn', 'value' => 'autumn'],
            ['label' => 'Winter', 'value' => 'winter'],
          ],
        ],
      ],
    ],
  ],
  'types' => [
    '0' => [
      'showitem' => 'trimmed',
    ],
  ],
];
