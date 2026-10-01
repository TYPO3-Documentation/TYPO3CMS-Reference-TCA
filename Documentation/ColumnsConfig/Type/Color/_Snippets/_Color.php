<?php

return [
  'ctrl' => [
    'title' => 'My table',
    'label' => 'a_color',
  ],
  'columns' => [
    'a_color' => [
      'label' => 'Color field',
      'config' => [
        'type' => 'color',
      ],
    ],

    'nullable_color' => [
      'label' => 'A nullable field',
      'config' => [
        'type' => 'color',
        'nullable' => true,
      ],
    ],

    'with_placeholder' => [
      'label' => 'My color field',
      'config' => [
        'type' => 'color',
        'placeholder' => '#FF8700',
        'mode' => 'useOrOverridePlaceholder',
      ],
    ],

    'with_opacity' => [
      'label' => 'My Color',
      'config' => [
        'type' => 'color',
        'opacity' => true,
      ],
    ],

    'my_color' => [
      'label' => 'Highlight color',
      'config' => [
        'type' => 'color',
        'required' => true,
        'valuePicker' => [
          'items' => [
            ['label' => 'TYPO3 orange', 'value' => '#FF8700'],
            ['label' => 'Black', 'value' => '#000000'],
            ['label' => 'White', 'value' => '#FFFFFF'],
          ],
        ],
      ],
    ],
  ],
  'types' => [
    '0' => [
      'showitem' => 'a_color',
    ],
  ],
];
