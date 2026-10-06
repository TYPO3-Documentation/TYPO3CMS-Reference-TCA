<?php

return [
  'ctrl' => [
    'title' => 'my_extension.db:partnership',
    'label' => 'partner',
    'hideTable' => true,
    'tstamp' => 'tstamp',
    'crdate' => 'crdate',
    'delete' => 'deleted',
    'versioningWS' => true,
    'iconfile' => 'EXT:my_extension/Resources/Public/Icons/Partnership.svg',
  ],
  'columns' => [
    'conference' => [
      'label' => 'my_extension.db:partnership.conference',
      'config' => [
        'type' => 'select',
        'renderType' => 'selectSingle',
        'foreign_table' => 'tx_myextension_conference',
        'foreign_table_where' => 'AND {#tx_myextension_conference}.{#sys_language_uid} IN (-1, 0)',
      ],
    ],
    'partner' => [
      'label' => 'my_extension.db:partnership.partner',
      'config' => [
        'type' => 'select',
        'renderType' => 'selectSingle',
        'foreign_table' => 'tx_myextension_conference',
        'foreign_table_where' => 'AND {#tx_myextension_conference}.{#sys_language_uid} IN (-1, 0)',
      ],
    ],
  ],
  'types' => [
    '0' => [
      'showitem' => 'conference, partner',
    ],
  ],
];
