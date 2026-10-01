<?php

use MyVendor\MyExtension\Processors\SomeItemProcessor;

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
        ],
        'itemsProcessors' => [
          100 => [
            'class' => SomeItemProcessor::class,
          ],
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
        ],
        'itemsProcessors' => [
          100 => [
            'class' => SomeItemProcessor::class,
          ],
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
        ],
        'itemsProcessors' => [
          100 => [
            'class' => SomeItemProcessor::class,
          ],
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
        ],
        'itemsProcessors' => [
          100 => [
            'class' => SomeItemProcessor::class,
          ],
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
        'itemsProcessors' => [
          100 => [
            'class' => SomeItemProcessor::class,
          ],
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
