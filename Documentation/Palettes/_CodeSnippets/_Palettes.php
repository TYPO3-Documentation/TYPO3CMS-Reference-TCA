<?php

return [
  'ctrl' => [
    'title' => 'My table',
    'label' => 'aField',
  ],
  'types' => [
    'myType' => [
      'showitem' => 'aField, --palette--;;aPalette, someOtherField',
    ],
  ],
  'palettes' => [
    'aPalette' => [
      'label' => 'LLL:my_extension.db:aPaletteDescription',
      'showitem' => 'aFieldInAPalette, anotherFieldInPalette',
    ],
    'simplePalette' => [
      'showitem' => 'aFieldName, anotherFieldName',
    ],
    'labelOverridePalette' => [
      'showitem' => 'aFieldName;labelOverride, anotherFieldName',
    ],
    'linebreakPalette' => [
      'showitem' => 'aFieldName, anotherFieldName,'
        . ' --linebreak--, yetAnotherFieldName',
    ],
  ],
  'columns' => [
    'aField' => [
      'label' => 'A field',
      'config' => [
        'type' => 'input',
      ],
    ],
    'someOtherField' => [
      'label' => 'Some other field',
      'config' => [
        'type' => 'input',
      ],
    ],
    'aFieldInAPalette' => [
      'label' => 'A field in a palette',
      'config' => [
        'type' => 'input',
      ],
    ],
    'anotherFieldInPalette' => [
      'label' => 'Another field in a palette',
      'config' => [
        'type' => 'input',
      ],
    ],
    'aFieldName' => [
      'label' => 'A field name',
      'config' => [
        'type' => 'input',
      ],
    ],
    'anotherFieldName' => [
      'label' => 'Another field name',
      'config' => [
        'type' => 'input',
      ],
    ],
    'yetAnotherFieldName' => [
      'label' => 'Yet another field name',
      'config' => [
        'type' => 'input',
      ],
    ],
  ],
];
