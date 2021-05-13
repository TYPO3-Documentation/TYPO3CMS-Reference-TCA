<?php // Automatic screenshot: Remove this comment if you wand to manually change this file

return [
   'ctrl' => [ 
      'title' => 'Form engine - inline mn mm',
      'label' => 'uid',
      'tstamp' => 'tstamp',
      'crdate' => 'crdate',
      'cruser_id' => 'cruser_id',
      'languageField' => 'sys_language_uid',
      'transOrigPointerField' => 'l10n_parent',
      'transOrigDiffSourceField' => 'l10n_diffsource',
      'translationSource' => 'l10n_source',
      'delete' => 'deleted',
      'enablecolumns' => [ 
         'disabled' => 'hidden',
      ],
      'iconfile' => 'EXT:styleguide/Resources/Public/Icons/tx_styleguide.svg',
      'versioningWS' => true,
      'origUid' => 't3_origuid',
   ],
   'columns' => [ 
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
      // Example from extension "styleguide", table "tx_styleguide_inline_mn_mm"
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
            'foreign_table' => 'tx_styleguide_inline_mn_mm',
            'foreign_table_where' => 'AND {#tx_styleguide_inline_mn_mm}.{#pid}=###CURRENT_PID### AND {#tx_styleguide_inline_mn_mm}.{#sys_language_uid} IN (-1,0)',
            'default' => 0,
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_inline_mn_mm"
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
            'foreign_table' => 'tx_styleguide_inline_mn_mm',
            'foreign_table_where' => 'AND {#tx_styleguide_inline_mn_mm}.{#pid}=###CURRENT_PID### AND {#tx_styleguide_inline_mn_mm}.{#uid}!=###THIS_UID###',
            'default' => 0,
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_inline_mn_mm"
      // [end l10n_source]
      // [start l10n_diffsource]
      'l10n_diffsource' => [ 
         'config' => [ 
            'type' => 'passthrough',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_inline_mn_mm"
      // [end l10n_diffsource]
      // [start hidden]
      'hidden' => [ 
         'exclude' => 1,
         'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
         'config' => [ 
            'type' => 'check',
            'default' => '0',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_inline_mn_mm"
      // [end hidden]
      // [start parentid]
      'parentid' => [ 
         'label' => 'parentid',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'tx_styleguide_inline_mn',
            'foreign_table_where' => 'AND {#tx_styleguide_inline_mn}.{#pid}=###CURRENT_PID### AND {#tx_styleguide_inline_mn}.{#sys_language_uid}=\'###REC_FIELD_sys_language_uid###\'',
            'maxitems' => 1,
            'localizeReferences' => 1,
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_inline_mn_mm"
      // [end parentid]
      // [start childid]
      'childid' => [ 
         'label' => 'childid',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'tx_styleguide_inline_mn_child',
            'foreign_table_where' => 'AND {#tx_styleguide_inline_mn_child}.{#pid}=###CURRENT_PID### AND {#tx_styleguide_inline_mn_child}.{#sys_language_uid}=\'###REC_FIELD_sys_language_uid###\'',
            'maxitems' => 1,
            'localizeReferences' => 1,
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_inline_mn_mm"
      // [end childid]
      // [start parentsort]
      'parentsort' => [ 
         'config' => [ 
            'type' => 'passthrough',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_inline_mn_mm"
      // [end parentsort]
      // [start childsort]
      'childsort' => [ 
         'config' => [ 
            'type' => 'passthrough',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_inline_mn_mm"
      // [end childsort]
      // [start check_1]
      'check_1' => [ 
         'label' => 'check_1',
         'config' => [ 
            'type' => 'check',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_inline_mn_mm"
      // [end check_1]
   ],
   'types' => [ 
      '0' => [ 
         'showitem' => '
                --div--;General, parentid, childid, check_1,
                --div--;Visibility, sys_language_uid, l18n_parent, l18n_diffsource, hidden, hotelsort, branchsort',
      ],
   ],
];