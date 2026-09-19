<?php

// Inline field in the parent table
$GLOBALS['TCA']['tx_myextension_parent']['columns']['children'] = [
  'label' => 'Children',
  'config' => [
    'type' => 'inline',
    // The intermediate table
    'foreign_table' => 'tx_myextension_parent_child_mm',
    'foreign_field' => 'parent',
    'foreign_selector' => 'child',
    'foreign_unique' => 'child',
    'appearance' => [
      'useCombination' => true,
    ],
  ],
];

// Fields in the intermediate table
$GLOBALS['TCA']['tx_myextension_parent_child_mm']['columns']['parent'] = [
  'label' => 'Parent',
  'config' => [
    'type' => 'select',
    'renderType' => 'selectSingle',
    'foreign_table' => 'tx_myextension_parent',
  ],
];
$GLOBALS['TCA']['tx_myextension_parent_child_mm']['columns']['child'] = [
  'label' => 'Child',
  'config' => [
    'type' => 'group',
    // Only the first table is used by the foreign_selector
    'allowed' => 'tx_myextension_child',
  ],
];

// The child table tx_myextension_child needs no relation fields
