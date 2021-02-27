<?php // Example from extension "styleguide", table "tx_styleguide_elements_group"

return [
   // [start ctrl]
   'ctrl' => [ 
      'title' => 'Form engine elements - special access rights',
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
      // Example from extension "styleguide", table "tx_styleguide_elements_special"
      // [end hidden]
      // [start sys_language_uid]
      'sys_language_uid' => [ 
         'exclude' => true,
         'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectSingle',
            'special' => 'languages',
            'items' => [ 
               '0' => [ 
                  '0' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                  '1' => -1,
                  '2' => 'flags-multiple',
               ],
            ],
            'default' => 0,
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_special"
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
            'foreign_table' => 'tx_styleguide_elements_special',
            'foreign_table_where' => 'AND {#tx_styleguide_elements_special}.{#pid}=###CURRENT_PID### AND {#tx_styleguide_elements_special}.{#sys_language_uid} IN (-1,0)',
            'default' => 0,
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_special"
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
            'foreign_table' => 'tx_styleguide_elements_special',
            'foreign_table_where' => 'AND {#tx_styleguide_elements_special}.{#pid}=###CURRENT_PID### AND {#tx_styleguide_elements_special}.{#uid}!=###THIS_UID###',
            'default' => 0,
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_special"
      // [end l10n_source]
      // [start l10n_diffsource]
      'l10n_diffsource' => [ 
         'config' => [ 
            'type' => 'passthrough',
            'default' => '',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_special"
      // [end l10n_diffsource]
      // [start special_custom_1]
      'special_custom_1' => [ 
         'exclude' => 1,
         'label' => 'special_custom_1, identical to be_groups custom_options description',
         'description' => 'field description',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'custom',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_special"
      // [end special_custom_1]
      // [start special_exclude_1]
      'special_exclude_1' => [ 
         'exclude' => 1,
         'label' => 'special_exclude_1, identical to be_groups non_exclude_fields description',
         'description' => 'field description',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'exclude',
            'size' => '25',
            'autoSizeMax' => 50,
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_special"
      // [end special_exclude_1]
      // [start special_explicitvalues_1]
      'special_explicitvalues_1' => [ 
         'exclude' => 1,
         'label' => 'special_explicitvalues_1, identical to be_groups explicit_allowdeny description',
         'description' => 'field description',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'explicitValues',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_special"
      // [end special_explicitvalues_1]
      // [start special_languages_1]
      'special_languages_1' => [ 
         'exclude' => 1,
         'label' => 'special_languages_1, identical to be_groups allowed_languages description',
         'description' => 'field description',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'languages',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_special"
      // [end special_languages_1]
      // [start special_modlistgroup_1]
      'special_modlistgroup_1' => [ 
         'exclude' => 1,
         'label' => 'special_modlistgroup_1, identical to be_groups groupMods description',
         'description' => 'field description',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'modListGroup',
            'size' => '5',
            'autoSizeMax' => 50,
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_special"
      // [end special_modlistgroup_1]
      // [start special_pagetypes_1]
      'special_pagetypes_1' => [ 
         'exclude' => 1,
         'label' => 'special_pagetypes_1, identical to be_groups pagetypes_select description',
         'description' => 'field description',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'pagetypes',
            'size' => '5',
            'autoSizeMax' => 50,
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_special"
      // [end special_pagetypes_1]
      // [start special_tables_1]
      'special_tables_1' => [ 
         'exclude' => 1,
         'label' => 'special_tables_1, identical to be_groups tables_modify & tables_select description',
         'description' => 'field description',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'tables',
            'size' => '5',
            'autoSizeMax' => 50,
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_special"
      // [end special_tables_1]
      // [start special_tables_2]
      'special_tables_2' => [ 
         'exclude' => 1,
         'label' => 'special_tables_2, identical to index_config table2index',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [ 
               '0' => [ 
                  '0' => 'dummy entry',
                  '1' => '0',
               ],
            ],
            'special' => 'tables',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_special"
      // [end special_tables_2]
      // [start special_tables_3]
      'special_tables_3' => [ 
         'exclude' => 1,
         'label' => 'special_tables_3, identical to sys_collection table_name',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectSingle',
            'special' => 'tables',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_special"
      // [end special_tables_3]
      // [start special_usermods_1]
      'special_usermods_1' => [ 
         'exclude' => 1,
         'label' => 'special_usermods_1, identical to be_users userMods description',
         'description' => 'field description',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'modListUser',
            'size' => '5',
            'autoSizeMax' => 50,
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_special"
      // [end special_usermods_1]
   ],
   // [end columns]
   // [start types]
   'types' => [ 
      '0' => [ 
         'showitem' => '
                --div--;special=custom,
                    special_custom_1,
                --div--;special=exclude,
                    special_exclude_1,
                --div--;special=explicitvalues,
                    special_explicitvalues_1,
                --div--;special=languages,
                    special_languages_1,
                --div--;special=modlistgroup,
                    special_modlistgroup_1,
                --div--;special=pagetypes,
                    special_pagetypes_1,
                --div--;special=tables,
                    special_tables_1, special_tables_2, special_tables_3,
                --div--;special=usermods,
                    special_usermods_1,
            ',
      ],
   ],
   // [end types]
];