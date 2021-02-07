<?php // Example from extension "styleguide", table "tx_styleguide_type"

return [
   // [start ctrl]
   'ctrl' => [ 
      'title' => 'Form engine - type stored in foreign table',
      'label' => 'title',
      'tstamp' => 'tstamp',
      'crdate' => 'crdate',
      'cruser_id' => 'cruser_id',
      'delete' => 'deleted',
      'sortby' => 'sorting',
      'iconfile' => 'EXT:styleguide/Resources/Public/Icons/tx_styleguide.svg',
      'versioningWS' => true,
      'origUid' => 't3_origuid',
      'languageField' => 'sys_language_uid',
      'transOrigPointerField' => 'l10n_parent',
      'transOrigDiffSourceField' => 'l10n_diffsource',
      'translationSource' => 'l10n_source',
      'enablecolumns' => [ 
         'disabled' => 'hidden',
      ],
      'type' => 'foreign_table:record_type',
   ],
   // [end ctrl]
   // [start columns]
   'columns' => [ 
      // [start hidden]
      'hidden' => [ 
         'exclude' => 1,
         'config' => [ 
            'type' => 'check',
            'items' => [ 
               '1' => [ 
                  '0' => 'Disable',
               ],
            ],
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_type_foreign"
      // [end hidden]
      // [start sys_language_uid]
      'sys_language_uid' => [ 
         'exclude' => 1,
         'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_language',
            'foreign_table_where' => 'ORDER BY sys_language.title',
            'items' => [ 
               '0' => [ 
                  '0' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                  '1' => -1,
               ],
               '1' => [ 
                  '0' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                  '1' => 0,
               ],
            ],
            'default' => 0,
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_type_foreign"
      // [end sys_language_uid]
      // [start l10n_parent]
      'l10n_parent' => [ 
         'displayCond' => 'FIELD:sys_language_uid:>:0',
         'label' => 'Translation parent',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [ 
               '0' => [ 
                  '0' => '',
                  '1' => 0,
               ],
            ],
            'foreign_table' => 'tx_styleguide_type',
            'foreign_table_where' => 'AND {#tx_styleguide_type}.{#pid}=###CURRENT_PID### AND {#tx_styleguide_type}.{#sys_language_uid} IN (-1,0)',
            'default' => 0,
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_type_foreign"
      // [end l10n_parent]
      // [start l10n_source]
      'l10n_source' => [ 
         'exclude' => true,
         'displayCond' => 'FIELD:sys_language_uid:>:0',
         'label' => 'Translation source',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [ 
               '0' => [ 
                  '0' => '',
                  '1' => 0,
               ],
            ],
            'foreign_table' => 'tx_styleguide_type',
            'foreign_table_where' => 'AND {#tx_styleguide_type}.{#pid}=###CURRENT_PID### AND {#tx_styleguide_type}.{#uid}!=###THIS_UID###',
            'default' => 0,
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_type_foreign"
      // [end l10n_source]
      // [start l10n_diffsource]
      'l10n_diffsource' => [ 
         'config' => [ 
            'type' => 'passthrough',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_type_foreign"
      // [end l10n_diffsource]
      // [start foreign_table]
      'foreign_table' => [ 
         'label' => 'type stored in foreign table',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'tx_styleguide_type',
            'minitems' => 1,
            'maxitems' => 1,
            'size' => 1,
            'default' => 0,
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_type_foreign"
      // [end foreign_table]
      // [start title]
      'title' => [ 
         'label' => 'title',
         'config' => [ 
            'type' => 'input',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_type_foreign"
      // [end title]
      // [start color]
      'color' => [ 
         'label' => 'color',
         'config' => [ 
            'type' => 'input',
            'renderType' => 'colorpicker',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_type_foreign"
      // [end color]
      // [start text_1]
      'text_1' => [ 
         'exclude' => 1,
         'label' => 'text_1',
         'config' => [ 
            'type' => 'text',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_type_foreign"
      // [end text_1]
   ],
   // [end columns]
   // [start types]
   'types' => [ 
      '0' => [ 
         'showitem' => 'foreign_table, title, text_1',
      ],
      'withChangedFields' => [ 
         'showitem' => 'foreign_table, title, color, text_1',
      ],
      'withOverriddenColumns' => [ 
         'showitem' => 'foreign_table, title, color, text_1',
         'columnsOverrides' => [ 
            'color' => [ 
               'config' => [ 
                  'renderType' => '',
                  'readOnly' => true,
                  'size' => 10,
               ],
            ],
            'text_1' => [ 
               'config' => [ 
                  'renderType' => 't3editor',
                  'format' => 'html',
               ],
            ],
         ],
      ],
      'test' => [ 
         'showitem' => 'foreign_table, title, text_1',
         'columnsOverrides' => [ 
            'text_1' => [ 
               'config' => [ 
                  'renderType' => 't3editor',
                  'format' => 'html',
               ],
            ],
         ],
      ],
   ],
   // [end types]
];