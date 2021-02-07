<?php // Example from extension "styleguide", table "tx_styleguide_type_foreign"

return [
   // [start ctrl]
   'ctrl' => [ 
      'title' => 'Form engine - palette',
      'label' => 'uid',
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
      // Example from extension "styleguide", table "tx_styleguide_palette"
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
      // Example from extension "styleguide", table "tx_styleguide_palette"
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
            'foreign_table' => 'tx_styleguide_palette',
            'foreign_table_where' => 'AND {#tx_styleguide_palette}.{#pid}=###CURRENT_PID### AND {#tx_styleguide_palette}.{#sys_language_uid} IN (-1,0)',
            'default' => 0,
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_palette"
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
            'foreign_table' => 'tx_styleguide_palette',
            'foreign_table_where' => 'AND {#tx_styleguide_palette}.{#pid}=###CURRENT_PID### AND {#tx_styleguide_palette}.{#uid}!=###THIS_UID###',
            'default' => 0,
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_palette"
      // [end l10n_source]
      // [start l10n_diffsource]
      'l10n_diffsource' => [ 
         'config' => [ 
            'type' => 'passthrough',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_palette"
      // [end l10n_diffsource]
      // [start palette_1_1]
      'palette_1_1' => [ 
         'exclude' => 1,
         'label' => 'palette_1_1',
         'description' => 'field description',
         'config' => [ 
            'type' => 'check',
            'default' => 1,
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_palette"
      // [end palette_1_1]
      // [start palette_1_3]
      'palette_1_3' => [ 
         'exclude' => 1,
         'label' => 'palette_1_3',
         'config' => [ 
            'type' => 'check',
            'default' => 1,
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_palette"
      // [end palette_1_3]
      // [start palette_2_1]
      'palette_2_1' => [ 
         'exclude' => 1,
         'label' => 'palette_2_1',
         'config' => [ 
            'type' => 'input',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_palette"
      // [end palette_2_1]
      // [start palette_3_1]
      'palette_3_1' => [ 
         'exclude' => 1,
         'label' => 'palette_3_1',
         'config' => [ 
            'type' => 'input',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_palette"
      // [end palette_3_1]
      // [start palette_3_2]
      'palette_3_2' => [ 
         'exclude' => 1,
         'label' => 'palette_3_2',
         'config' => [ 
            'type' => 'input',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_palette"
      // [end palette_3_2]
      // [start palette_4_1]
      'palette_4_1' => [ 
         'exclude' => 1,
         'label' => 'palette_4_1',
         'config' => [ 
            'type' => 'input',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_palette"
      // [end palette_4_1]
      // [start palette_4_2]
      'palette_4_2' => [ 
         'exclude' => 1,
         'label' => 'palette_4_2',
         'config' => [ 
            'type' => 'input',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_palette"
      // [end palette_4_2]
      // [start palette_4_3]
      'palette_4_3' => [ 
         'exclude' => 1,
         'label' => 'palette_4_3',
         'config' => [ 
            'type' => 'input',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_palette"
      // [end palette_4_3]
      // [start palette_4_4]
      'palette_4_4' => [ 
         'exclude' => 1,
         'label' => 'palette_4_4',
         'config' => [ 
            'type' => 'input',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_palette"
      // [end palette_4_4]
      // [start palette_5_1]
      'palette_5_1' => [ 
         'exclude' => 1,
         'label' => 'palette_5_1',
         'config' => [ 
            'type' => 'input',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_palette"
      // [end palette_5_1]
      // [start palette_5_2]
      'palette_5_2' => [ 
         'exclude' => 1,
         'label' => 'palette_5_2',
         'config' => [ 
            'type' => 'input',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_palette"
      // [end palette_5_2]
      // [start palette_6_1]
      'palette_6_1' => [ 
         'exclude' => 1,
         'label' => 'palette_6_1',
         'config' => [ 
            'type' => 'input',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_palette"
      // [end palette_6_1]
      // [start palette_7_1]
      'palette_7_1' => [ 
         'exclude' => 1,
         'label' => 'palette_7_1',
         'config' => [ 
            'type' => 'input',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_palette"
      // [end palette_7_1]
   ],
   // [end columns]
   // [start types]
   'types' => [ 
      '0' => [ 
         'showitem' => '
                --div--;palette,
                    --palette--;;palette_1,
                    --palette--;Palette 2 label defined in showitem section of type;palette_2,
                    --palette--;Palette 3 label;palette_3,
                    --palette--;;palette_4,
                    --palette--;Palette 5 label;palette_5,
                --div--;hidden palette,
                    --palette--;Palette 6 label;palette_6,
                    --palette--;Palette 7 (palette_6 hidden);palette_7,
            ',
      ],
   ],
   // [end types]
   // [start palettes]
   'palettes' => [ 
      'palette_1' => [ 
         'label' => 'Palette 1, Label defined in palettes definition',
         'showitem' => 'palette_1_1, palette_1_3',
      ],
      'palette_2' => [ 
         'showitem' => 'palette_2_1',
      ],
      'palette_3' => [
          'label' => 'Palette 3 label gets overridden',
         'showitem' => 'palette_3_1, palette_3_2',
      ],
      'palette_4' => [ 
         'showitem' => 'palette_4_1, palette_4_2, palette_4_3, --linebreak--, palette_4_4',
      ],
      'palette_5' => [ 
         'showitem' => 'palette_5_1, --linebreak--, palette_5_2',
      ],
      'palette_6' => [ 
         'showitem' => 'palette_6_1',
         'isHiddenPalette' => true,
      ],
      'palette_7' => [ 
         'showitem' => 'palette_7_1',
      ],
   ],
   // [end palettes]
];