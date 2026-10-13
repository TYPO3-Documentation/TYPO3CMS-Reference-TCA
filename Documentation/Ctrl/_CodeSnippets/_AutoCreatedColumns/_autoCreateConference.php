<?php

$GLOBALS['TCA']['tx_myextension_conference']['columns']['hidden'] = [
  'label' => 'core.db.general:enabled',
  'exclude' => true,
  'config' => [
    'type' => 'check',
    'renderType' => 'checkboxToggle',
    'default' => 0,
    'items' => [
      [
        'label' => '',
        'invertStateDisplay' => true,
      ],
    ],
  ],
];
