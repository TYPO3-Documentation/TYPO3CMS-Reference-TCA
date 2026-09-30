<?php

return [
  'ctrl' => [
    'title' => 'Something',
    'label' => 'a_field',
  ],
  'columns' => [
    'a_field' => [
      'label' => 'A field',
      'config' => [
        'type' => 'check',
        'fieldWizard' => [
          'localizationStateSelector' => [
            'disabled' => true,
          ],
        ],
      ],
    ],
  ],
  'types' => [
    '0' => [
      'showitem' => 'a_field',
    ],
  ],
];
