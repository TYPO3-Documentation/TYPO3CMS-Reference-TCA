<?php // Example from extension "styleguide", table "tx_styleguide_inline_mnsymmetric"

return [
   // [start ctrl]
   'ctrl' => [ 
      'title' => 'Form engine - inline mn symmetric',
      'label' => 'input_1',
      'tstamp' => 'tstamp',
      'crdate' => 'crdate',
      'cruser_id' => 'cruser_id',
      'languageField' => 'sys_language_uid',
      'transOrigPointerField' => 'l10n_parent',
      'transOrigDiffSourceField' => 'l10n_diffsource',
      'translationSource' => 'l10n_source',
      'sortby' => 'sorting',
      'delete' => 'deleted',
      'enablecolumns' => [ 
         'disabled' => 'hidden',
      ],
      'iconfile' => 'EXT:styleguide/Resources/Public/Icons/tx_styleguide.svg',
      'versioningWS' => true,
      'origUid' => 't3_origuid',
   ],
   // [end ctrl]
   // [start columns]
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
      // Example from extension "styleguide", table "tx_styleguide_inline_mnsymmetric"
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
            'foreign_table' => 'tx_styleguide_inline_mnsymmetric',
            'foreign_table_where' => 'AND {#tx_styleguide_inline_mnsymmetric}.{#pid}=###CURRENT_PID### AND {#tx_styleguide_inline_mnsymmetric}.{#sys_language_uid} IN (-1,0)',
            'default' => 0,
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_inline_mnsymmetric"
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
            'foreign_table' => 'tx_styleguide_inline_mnsymmetric',
            'foreign_table_where' => 'AND {#tx_styleguide_inline_mnsymmetric}.{#pid}=###CURRENT_PID### AND {#tx_styleguide_inline_mnsymmetric}.{#uid}!=###THIS_UID###',
            'default' => 0,
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_inline_mnsymmetric"
      // [end l10n_source]
      // [start l10n_diffsource]
      'l10n_diffsource' => [ 
         'config' => [ 
            'type' => 'passthrough',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_inline_mnsymmetric"
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
      // Example from extension "styleguide", table "tx_styleguide_inline_mnsymmetric"
      // [end hidden]
      // [start input_1]
      'input_1' => [ 
         'exclude' => 1,
         'l10n_mode' => 'prefixLangTitle',
         'label' => 'input_1',
         'config' => [ 
            'type' => 'input',
            'size' => '30',
            'eval' => 'required',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_inline_mnsymmetric"
      // [end input_1]
      // [start branches]
      'branches' => [ 
         'exclude' => 1,
         'label' => 'branches',
         'config' => [ 
            'type' => 'inline',
            'foreign_table' => 'tx_styleguide_inline_mnsymmetric_mm',
            'foreign_field' => 'hotelid',
            'foreign_sortby' => 'hotelsort',
            'foreign_label' => 'branchid',
            'symmetric_field' => 'branchid',
            'symmetric_sortby' => 'branchsort',
            'symmetric_label' => 'hotelid',
            'maxitems' => 10,
            'appearance' => [ 
               'showSynchronizationLink' => 1,
               'showAllLocalizationLink' => 1,
               'showPossibleLocalizationRecords' => 1,
               'showRemovedLocalizationRecords' => 1,
            ],
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_inline_mnsymmetric"
      // [end branches]
   ],
   // [end columns]
   // [start types]
   'types' => [ 
      '0' => [ 
         'showitem' => '
                --div--;General, input_1, branches,
                --div--;Visibility, sys_language_uid, l18n_parent,l18n_diffsource, hidden
            ',
      ],
   ],
   // [end types]
];