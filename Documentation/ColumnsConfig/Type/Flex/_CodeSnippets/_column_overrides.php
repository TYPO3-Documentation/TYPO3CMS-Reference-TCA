<?php

return [
  'ctrl' => [
    'title' => 'Table with special FlexForm per Type',
    'type' => 'my_type_field',
    'label' => 'uid',
  ],
  'columns' => [
    'my_type_field' => [
      'label' => 'Type',
      'config' => [
        'type' => 'select',
        'renderType' => 'selectSingle',
        'items' => [
          ['label' => 'Default', 'value' => 0],
          ['label' => 'Type 1', 'value' => 1],
          ['label' => 'Type 2', 'value' => 2],
          ['label' => 'Type 3', 'value' => 3],
        ],
      ],
    ],
    'pi_flexform' => [
      'label' => 'Settings',
      'config' => [
        'type' => 'flex',
        // Used if not overridden in the columnsOverrides
        'ds' => 'FILE:EXT:my_extension/Configuration/FlexForms/Default.xml',
      ],
    ],
  ],
  'types' => [
    0 => [
      'showitem' => 'my_type_field, pi_flexform',
    ],
    1 => [
      'showitem' => 'my_type_field, pi_flexform',
      'columnsOverrides' => [
        'pi_flexform' => [
          'config' => [
            'ds' => 'FILE:EXT:my_extension/Configuration/FlexForms/Type1.xml',
          ],
        ],
      ],
    ],
    2 => [
      'showitem' => 'my_type_field, pi_flexform',
      'columnsOverrides' => [
        'pi_flexform' => [
          'config' => [
            'ds' => 'FILE:EXT:my_extension/Configuration/FlexForms/Type2.xml',
          ],
        ],
      ],
    ],
    3 => [
      'showitem' => 'my_type_field, pi_flexform',
    ],
  ],
];
