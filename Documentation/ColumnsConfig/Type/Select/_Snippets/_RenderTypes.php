<?php

return [
  'ctrl' => [
    'title' => 'My table',
    'label' => 'select_single',
  ],
  'columns' => [
    'select_single' => [
      'label' => 'Single',
      'config' => [
        'type' => 'select',
        'renderType' => 'selectSingle',
        'items' => [
          ['label' => 'Some label', 'value' => 'some'],
          ['label' => 'Another label', 'value' => 'another'],
        ],
        'dbFieldLength' => 10,
        'behaviour' => [
          'allowLanguageSynchronization' => true,
        ],
      ],
    ],

    'select_single_box' => [
      'label' => 'Single box',
      'config' => [
        'type' => 'select',
        'renderType' => 'selectSingleBox',
        'items' => [
          ['label' => 'Some label', 'value' => 'some'],
          ['label' => 'Another label', 'value' => 'another'],
        ],
        'dbFieldLength' => 10,
        'behaviour' => [
          'allowLanguageSynchronization' => true,
        ],
      ],
    ],

    'select_checkbox' => [
      'label' => 'Checkboxes',
      'config' => [
        'type' => 'select',
        'renderType' => 'selectCheckBox',
        'items' => [
          ['label' => 'Some label', 'value' => 'some'],
          ['label' => 'Another label', 'value' => 'another'],
        ],
        'dbFieldLength' => 10,
        'behaviour' => [
          'allowLanguageSynchronization' => true,
        ],
      ],
    ],

    'select_multiple' => [
      'label' => 'Side by side',
      'config' => [
        'type' => 'select',
        'renderType' => 'selectMultipleSideBySide',
        'items' => [
          ['label' => 'Some label', 'value' => 'some'],
          ['label' => 'Another label', 'value' => 'another'],
        ],
        'dbFieldLength' => 10,
        'behaviour' => [
          'allowLanguageSynchronization' => true,
        ],
      ],
    ],

    'select_tree' => [
      'label' => 'Tree',
      'config' => [
        'type' => 'select',
        'renderType' => 'selectTree',
        'foreign_table' => 'tx_myextension_category',
        'treeConfig' => [
          'parentField' => 'parent',
        ],
        'dbFieldLength' => 10,
        'behaviour' => [
          'allowLanguageSynchronization' => true,
        ],
      ],
    ],
  ],
  'types' => [
    '0' => [
      'showitem' => 'select_single, select_single_box, select_checkbox,'
        . ' select_multiple, select_tree',
    ],
  ],
];
