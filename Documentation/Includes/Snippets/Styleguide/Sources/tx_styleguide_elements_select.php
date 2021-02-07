<?php // Example from extension "styleguide", table "tx_styleguide_elements_basic"

return [
   // [start ctrl]
   'ctrl' => [ 
      'title' => 'Form engine elements - select',
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
      // Example from extension "styleguide", table "tx_styleguide_elements_select"
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
      // Example from extension "styleguide", table "tx_styleguide_elements_select"
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
            'foreign_table' => 'tx_styleguide_elements_select',
            'foreign_table_where' => 'AND {#tx_styleguide_elements_select}.{#pid}=###CURRENT_PID### AND {#tx_styleguide_elements_select}.{#sys_language_uid} IN (-1,0)',
            'default' => 0,
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_select"
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
            'foreign_table' => 'tx_styleguide_elements_select',
            'foreign_table_where' => 'AND {#tx_styleguide_elements_select}.{#pid}=###CURRENT_PID### AND {#tx_styleguide_elements_select}.{#uid}!=###THIS_UID###',
            'default' => 0,
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_select"
      // [end l10n_source]
      // [start l10n_diffsource]
      'l10n_diffsource' => [ 
         'config' => [ 
            'type' => 'passthrough',
            'default' => '',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_select"
      // [end l10n_diffsource]
      // [start select_single_1]
      'select_single_1' => [ 
         'exclude' => 1,
         'label' => 'select_single_1 two items, long text description',
         'description' => 'field description',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [ 
               '0' => [ 
                  '0' => 'foo and this here is very long text that maybe does not really fit into the form in one line. Ok let us add even more text to see how this looks like if wrapped. Is this enough now? No? Then let us add some even more useless text here!',
                  '1' => 1,
               ],
               '1' => [ 
                  '0' => 'bar',
                  '1' => 'bar',
               ],
            ],
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_select"
      // [end select_single_1]
      // [start select_single_2]
      'select_single_2' => [ 
         'exclude' => 1,
         'label' => 'select_single_2 itemsProcFunc',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [ 
               '0' => [ 
                  '0' => 'foo',
                  '1' => 1,
               ],
               '1' => [ 
                  '0' => 'bar',
                  '1' => 'bar',
               ],
            ],
            'itemsProcFunc' => 'TYPO3\CMS\Styleguide\UserFunctions\FormEngine\TypeSelect2ItemsProcFunc->itemsProcFunc',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_select"
      // [end select_single_2]
      // [start select_single_3]
      'select_single_3' => [ 
         'exclude' => 1,
         'label' => 'select_single_3 static values, dividers, foreign_table_where',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [ 
               '0' => [ 
                  '0' => 'Static values',
                  '1' => '--div--',
               ],
               '1' => [ 
                  '0' => 'static -2',
                  '1' => -2,
               ],
               '2' => [ 
                  '0' => 'static -1',
                  '1' => -1,
               ],
               '3' => [ 
                  '0' => 'DB values',
                  '1' => '--div--',
               ],
            ],
            'foreign_table' => 'tx_styleguide_staticdata',
            'foreign_table_where' => 'AND {#tx_styleguide_staticdata}.{#value_1} LIKE \'%foo%\' ORDER BY uid',
            'foreign_table_prefix' => 'A prefix: ',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_select"
      // [end select_single_3]
      // [start select_single_4]
      'select_single_4' => [ 
         'exclude' => 1,
         'label' => 'select_single_4 items with icons',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [ 
               '0' => [ 
                  '0' => 'foo 1',
                  '1' => 'foo1',
                  '2' => 'EXT:styleguide/Resources/Public/Icons/tx_styleguide.svg',
               ],
               '1' => [ 
                  '0' => 'foo 2',
                  '1' => 'foo2',
                  '2' => 'EXT:styleguide/Resources/Public/Icons/tx_styleguide.svg',
               ],
            ],
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_select"
      // [end select_single_4]
      // [start select_single_5]
      'select_single_5' => [ 
         'exclude' => 1,
         'label' => 'select_single_5 selectIcons, items with icons',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [ 
               '0' => [ 
                  '0' => 'foo 1',
                  '1' => 'foo1',
                  '2' => 'EXT:styleguide/Resources/Public/Icons/tx_styleguide.svg',
               ],
               '1' => [ 
                  '0' => 'foo 2',
                  '1' => 'foo2',
                  '2' => 'EXT:styleguide/Resources/Public/Icons/tx_styleguide.svg',
               ],
            ],
            'fieldWizard' => [ 
               'selectIcons' => [ 
                  'disabled' => false,
               ],
            ],
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_select"
      // [end select_single_5]
      // [start select_single_7]
      'select_single_7' => [ 
         'exclude' => 1,
         'label' => 'select_single_7 fileFolder, dummy first entry, selectIcons',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [ 
               '0' => [ 
                  '0' => '',
                  '1' => 0,
               ],
            ],
            'fileFolder' => 'EXT:styleguide/Resources/Public/Icons',
            'fileFolder_extList' => 'svg',
            'fileFolder_recursions' => 1,
            'fieldWizard' => [ 
               'selectIcons' => [ 
                  'disabled' => false,
               ],
            ],
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_select"
      // [end select_single_7]
      // [start select_single_8]
      'select_single_8' => [ 
         'exclude' => 1,
         'label' => 'select_single_8 drop down with empty div',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [ 
               '0' => [ 
                  '0' => 'First div with items',
                  '1' => '--div--',
               ],
               '1' => [ 
                  '0' => 'item 1',
                  '1' => 1,
               ],
               '2' => [ 
                  '0' => 'item 2',
                  '1' => 2,
               ],
               '3' => [ 
                  '0' => 'Second div without items',
                  '1' => '--div--',
               ],
               '4' => [ 
                  '0' => 'Third div with items',
                  '1' => '--div--',
               ],
               '5' => [ 
                  '0' => 'item 3',
                  '1' => 3,
               ],
            ],
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_select"
      // [end select_single_8]
      // [start select_single_10]
      'select_single_10' => [ 
         'exclude' => 1,
         'label' => 'select_single_10 size=6, three options',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [ 
               '0' => [ 
                  '0' => 'foo 1',
                  '1' => 1,
               ],
               '1' => [ 
                  '0' => 'foo 2',
                  '1' => 2,
               ],
               '2' => [ 
                  '0' => 'a divider',
                  '1' => '--div--',
               ],
               '3' => [ 
                  '0' => 'foo 3',
                  '1' => 3,
               ],
            ],
            'size' => 6,
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_select"
      // [end select_single_10]
      // [start select_single_11]
      'select_single_11' => [ 
         'exclude' => 1,
         'label' => 'select_single_11 size=2, two options',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [ 
               '0' => [ 
                  '0' => 'foo 1',
                  '1' => 1,
               ],
               '1' => [ 
                  '0' => 'foo 2',
                  '1' => 2,
               ],
            ],
            'size' => 2,
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_select"
      // [end select_single_11]
      // [start select_single_12]
      'select_single_12' => [ 
         'exclude' => 1,
         'label' => 'select_single_12 foreign_table selicon_field',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'tx_styleguide_elements_select_single_12_foreign',
            'fieldWizard' => [ 
               'selectIcons' => [ 
                  'disabled' => false,
               ],
            ],
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_select"
      // [end select_single_12]
      // [start select_single_13]
      'select_single_13' => [ 
         'exclude' => 1,
         'label' => 'select_single_13 l10n_display=defaultAsReadonly',
         'l10n_mode' => 'exclude',
         'l10n_display' => 'defaultAsReadonly',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [ 
               '0' => [ 
                  '0' => 'foo',
                  '1' => 'foo',
               ],
               '1' => [ 
                  '0' => 'bar',
                  '1' => 'bar',
               ],
            ],
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_select"
      // [end select_single_13]
      // [start select_single_14]
      'select_single_14' => [ 
         'exclude' => 1,
         'label' => 'select_single_14 two items readOnly description',
         'description' => 'field description',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectSingle',
            'readOnly' => true,
            'items' => [ 
               '0' => [ 
                  '0' => 'bar',
                  '1' => 'bar',
               ],
            ],
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_select"
      // [end select_single_14]
      // [start select_single_15]
      'select_single_15' => [ 
         'exclude' => 1,
         'label' => 'select_single_15 foreign_table',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'tx_styleguide_staticdata',
            'MM' => 'tx_styleguide_elements_select_single_15_mm',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_select"
      // [end select_single_15]
      // [start select_singlebox_1]
      'select_singlebox_1' => [ 
         'exclude' => 1,
         'label' => 'select_singlebox_1 description',
         'description' => 'field description',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectSingleBox',
            'items' => [ 
               '0' => [ 
                  '0' => 'foo 1',
                  '1' => 1,
               ],
               '1' => [ 
                  '0' => 'foo 2',
                  '1' => 2,
               ],
               '2' => [ 
                  '0' => 'divider',
                  '1' => '--div--',
               ],
               '3' => [ 
                  '0' => 'foo 3',
                  '1' => 3,
               ],
               '4' => [ 
                  '0' => 'foo 4',
                  '1' => 4,
               ],
            ],
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_select"
      // [end select_singlebox_1]
      // [start select_singlebox_2]
      'select_singlebox_2' => [ 
         'exclude' => 1,
         'label' => 'select_singlebox_2 readOnly description',
         'description' => 'field description',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectSingleBox',
            'readOnly' => true,
            'items' => [ 
               '0' => [ 
                  '0' => 'foo 1',
                  '1' => 1,
               ],
               '1' => [ 
                  '0' => 'foo 2',
                  '1' => 2,
               ],
               '2' => [ 
                  '0' => 'divider',
                  '1' => '--div--',
               ],
               '3' => [ 
                  '0' => 'foo 3',
                  '1' => 3,
               ],
               '4' => [ 
                  '0' => 'foo 4',
                  '1' => 4,
               ],
            ],
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_select"
      // [end select_singlebox_2]
      // [start select_singlebox_3]
      'select_singlebox_3' => [ 
         'exclude' => 1,
         'label' => 'select_singlebox_3 special=languages',
         'description' => 'field description',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectSingleBox',
            'special' => 'languages',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_select"
      // [end select_singlebox_3]
      // [start select_singlebox_4]
      'select_singlebox_4' => [ 
         'exclude' => 1,
         'label' => 'select_singlebox_4 special=tables',
         'description' => 'field description',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectSingleBox',
            'special' => 'tables',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_select"
      // [end select_singlebox_4]
      // [start select_singlebox_5]
      'select_singlebox_5' => [ 
         'exclude' => 1,
         'label' => 'select_singlebox_5 special=pagetypes',
         'description' => 'field description',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectSingleBox',
            'special' => 'pagetypes',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_select"
      // [end select_singlebox_5]
      // [start select_singlebox_6]
      'select_singlebox_6' => [ 
         'exclude' => 1,
         'label' => 'select_singlebox_6 special=exclude',
         'description' => 'field description',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectSingleBox',
            'special' => 'exclude',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_select"
      // [end select_singlebox_6]
      // [start select_singlebox_7]
      'select_singlebox_7' => [ 
         'exclude' => 1,
         'label' => 'select_singlebox_7 special=modListGroup',
         'description' => 'field description',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectSingleBox',
            'special' => 'modListGroup',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_select"
      // [end select_singlebox_7]
      // [start select_singlebox_8]
      'select_singlebox_8' => [ 
         'exclude' => 1,
         'label' => 'select_singlebox_8 special=modListUser',
         'description' => 'field description',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectSingleBox',
            'special' => 'modListUser',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_select"
      // [end select_singlebox_8]
      // [start select_singlebox_9]
      'select_singlebox_9' => [ 
         'exclude' => 1,
         'label' => 'select_singlebox_9 special=explicitValues',
         'description' => 'field description',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectSingleBox',
            'special' => 'explicitValues',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_select"
      // [end select_singlebox_9]
      // [start select_singlebox_10]
      'select_singlebox_10' => [ 
         'exclude' => 1,
         'label' => 'select_singlebox_10 special=custom',
         'description' => 'field description',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectSingleBox',
            'special' => 'custom',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_select"
      // [end select_singlebox_10]
      // [start select_checkbox_1]
      'select_checkbox_1' => [ 
         'exclude' => 1,
         'label' => 'select_checkbox_1 description',
         'description' => 'field description',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'items' => [ 
               '0' => [ 
                  '0' => 'foo 1',
                  '1' => 1,
               ],
               '1' => [ 
                  '0' => 'foo 2',
                  '1' => 2,
               ],
               '2' => [ 
                  '0' => 'foo 3',
                  '1' => 3,
               ],
            ],
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_select"
      // [end select_checkbox_1]
      // [start select_checkbox_2]
      'select_checkbox_2' => [ 
         'exclude' => 1,
         'label' => 'select_checkbox_2, maxitems=1',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'maxitems' => 1,
            'items' => [ 
               '0' => [ 
                  '0' => 'foo 1',
                  '1' => 1,
               ],
               '1' => [ 
                  '0' => 'foo 2',
                  '1' => 2,
               ],
               '2' => [ 
                  '0' => 'foo 3',
                  '1' => 3,
               ],
            ],
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_select"
      // [end select_checkbox_2]
      // [start select_checkbox_3]
      'select_checkbox_3' => [ 
         'exclude' => 1,
         'label' => 'select_checkbox_3 icons, description',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'items' => [ 
               '0' => [ 
                  '0' => 'foo 1',
                  '1' => 1,
                  '2' => '',
                  '3' => 'optional description',
               ],
               '1' => [ 
                  '0' => 'foo 2',
                  '1' => 2,
                  '2' => 'EXT:styleguide/Resources/Public/Icons/tx_styleguide.svg',
                  '3' => 'LLL:EXT:styleguide/Resources/Private/Language/locallang.xlf:translatedHelpTextForSelectCheckBox3',
               ],
               '2' => [ 
                  '0' => 'foo 3',
                  '1' => 3,
                  '2' => 'EXT:styleguide/Resources/Public/Icons/tx_styleguide.svg',
               ],
               '3' => [ 
                  '0' => 'foo 4',
                  '1' => 4,
               ],
            ],
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_select"
      // [end select_checkbox_3]
      // [start select_checkbox_4]
      'select_checkbox_4' => [ 
         'exclude' => 1,
         'label' => 'select_checkbox_4 readOnly description',
         'description' => 'field description',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'readOnly' => true,
            'items' => [ 
               '0' => [ 
                  '0' => 'foo 1',
                  '1' => 1,
               ],
               '1' => [ 
                  '0' => 'foo 2',
                  '1' => 2,
               ],
            ],
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_select"
      // [end select_checkbox_4]
      // [start select_checkbox_5]
      'select_checkbox_5' => [ 
         'exclude' => 1,
         'label' => 'select_checkbox_5 dividers, expandAll',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'appearance' => [ 
               'expandAll' => true,
            ],
            'items' => [ 
               '0' => [ 
                  '0' => 'div 1',
                  '1' => '--div--',
               ],
               '1' => [ 
                  '0' => 'foo 1',
                  '1' => 1,
               ],
               '2' => [ 
                  '0' => 'foo 2',
                  '1' => 2,
               ],
               '3' => [ 
                  '0' => 'foo 3',
                  '1' => 3,
               ],
               '4' => [ 
                  '0' => 'div 2',
                  '1' => '--div--',
               ],
               '5' => [ 
                  '0' => 'foo 4',
                  '1' => 4,
               ],
               '6' => [ 
                  '0' => 'foo 5',
                  '1' => 5,
               ],
            ],
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_select"
      // [end select_checkbox_5]
      // [start select_checkbox_6]
      'select_checkbox_6' => [ 
         'exclude' => 1,
         'label' => 'select_checkbox_5 dividers',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'items' => [ 
               '0' => [ 
                  '0' => 'div 1',
                  '1' => '--div--',
               ],
               '1' => [ 
                  '0' => 'foo 1',
                  '1' => 1,
               ],
               '2' => [ 
                  '0' => 'foo 2',
                  '1' => 2,
               ],
               '3' => [ 
                  '0' => 'foo 3',
                  '1' => 3,
               ],
               '4' => [ 
                  '0' => 'div 2',
                  '1' => '--div--',
               ],
               '5' => [ 
                  '0' => 'foo 4',
                  '1' => 4,
               ],
               '6' => [ 
                  '0' => 'foo 5',
                  '1' => 5,
               ],
            ],
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_select"
      // [end select_checkbox_6]
      // [start select_multiplesidebyside_1]
      'select_multiplesidebyside_1' => [ 
         'exclude' => 1,
         'label' => 'select_multiplesidebyside_1 autoSizeMax=5, size=3 description',
         'description' => 'field description',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'items' => [ 
               '0' => [ 
                  '0' => 'foo 1',
                  '1' => 1,
               ],
               '1' => [ 
                  '0' => 'foo 2',
                  '1' => 2,
               ],
               '2' => [ 
                  '0' => 'a divider',
                  '1' => '--div--',
               ],
               '3' => [ 
                  '0' => 'foo 3',
                  '1' => 3,
               ],
               '4' => [ 
                  '0' => 'foo 4',
                  '1' => 4,
               ],
               '5' => [ 
                  '0' => 'foo 5',
                  '1' => 5,
               ],
               '6' => [ 
                  '0' => 'foo 6',
                  '1' => 6,
               ],
            ],
            'size' => 3,
            'autoSizeMax' => 5,
            'multiple' => true,
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_select"
      // [end select_multiplesidebyside_1]
      // [start select_multiplesidebyside_2]
      'select_multiplesidebyside_2' => [ 
         'exclude' => 1,
         'label' => 'select_multiplesidebyside_2 exclusiveKeys=1,2',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'items' => [ 
               '0' => [ 
                  '0' => 'two exclusive items',
                  '1' => '--div--',
               ],
               '1' => [ 
                  '0' => 'foo 1',
                  '1' => 1,
               ],
               '2' => [ 
                  '0' => 'foo 2',
                  '1' => 2,
               ],
               '3' => [ 
                  '0' => 'casual multiple items',
                  '1' => '--div--',
               ],
               '4' => [ 
                  '0' => 'foo 3',
                  '1' => 3,
               ],
               '5' => [ 
                  '0' => 'foo 4',
                  '1' => 4,
               ],
               '6' => [ 
                  '0' => 'foo 5',
                  '1' => 5,
               ],
               '7' => [ 
                  '0' => 'foo 6',
                  '1' => 6,
               ],
            ],
            'multiple' => true,
            'exclusiveKeys' => '1,2',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_select"
      // [end select_multiplesidebyside_2]
      // [start select_multiplesidebyside_3]
      'select_multiplesidebyside_3' => [ 
         'exclude' => 1,
         'label' => 'select_multiplesidebyside_3 itemListStyle, selectedListStyle',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'items' => [ 
               '0' => [ 
                  '0' => 'foo 1',
                  '1' => 1,
               ],
               '1' => [ 
                  '0' => 'foo 2',
                  '1' => 2,
               ],
               '2' => [ 
                  '0' => 'foo 3',
                  '1' => 3,
               ],
            ],
            'itemListStyle' => 'width:250px;background-color:#ffcccc;',
            'selectedListStyle' => 'width:250px;background-color:#ccffcc;',
            'size' => 2,
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_select"
      // [end select_multiplesidebyside_3]
      // [start select_multiplesidebyside_5]
      'select_multiplesidebyside_5' => [ 
         'exclude' => 1,
         'label' => 'select_multiplesidebyside_5 multiSelectFilterItems',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'items' => [ 
               '0' => [ 
                  '0' => 'foo 1',
                  '1' => 1,
               ],
               '1' => [ 
                  '0' => 'foo 2',
                  '1' => 2,
               ],
               '2' => [ 
                  '0' => 'foo 3',
                  '1' => 3,
               ],
               '3' => [ 
                  '0' => 'bar',
                  '1' => 4,
               ],
            ],
            'multiSelectFilterItems' => [ 
               '0' => [ 
                  '0' => '',
                  '1' => '',
               ],
               '1' => [ 
                  '0' => 'foo',
                  '1' => 'foo',
               ],
               '2' => [ 
                  '0' => 'bar',
                  '1' => 'bar',
               ],
            ],
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_select"
      // [end select_multiplesidebyside_5]
      // [start select_multiplesidebyside_6]
      'select_multiplesidebyside_6' => [ 
         'exclude' => 1,
         'label' => 'select_multiplesidebyside_6 fieldControl',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'tx_styleguide_staticdata',
            'size' => 5,
            'autoSizeMax' => 20,
            'fieldControl' => [ 
               'editPopup' => [ 
                  'disabled' => false,
               ],
               'addRecord' => [ 
                  'disabled' => false,
               ],
               'listModule' => [ 
                  'disabled' => false,
               ],
            ],
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_select"
      // [end select_multiplesidebyside_6]
      // [start select_multiplesidebyside_7]
      'select_multiplesidebyside_7' => [ 
         'exclude' => 1,
         'label' => 'select_multiplesidebyside_7 readonly description',
         'description' => 'field description',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'items' => [ 
               '0' => [ 
                  '0' => 'foo 1',
                  '1' => 1,
               ],
               '1' => [ 
                  '0' => 'foo 2',
                  '1' => 2,
               ],
               '2' => [ 
                  '0' => 'a divider',
                  '1' => '--div--',
               ],
               '3' => [ 
                  '0' => 'foo 3',
                  '1' => 3,
               ],
               '4' => [ 
                  '0' => 'foo 4',
                  '1' => 4,
               ],
               '5' => [ 
                  '0' => 'foo 5',
                  '1' => 5,
               ],
               '6' => [ 
                  '0' => 'foo 6',
                  '1' => 6,
               ],
            ],
            'readOnly' => true,
            'size' => 3,
            'autoSizeMax' => 5,
            'multiple' => true,
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_select"
      // [end select_multiplesidebyside_7]
      // [start select_multiplesidebyside_8]
      'select_multiplesidebyside_8' => [ 
         'exclude' => 1,
         'label' => 'select_multiplesidebyside_8 foreign_table mm',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'tx_styleguide_staticdata',
            'MM' => 'tx_styleguide_elements_select_multiplesidebyside_8_mm',
            'size' => 3,
            'autoSizeMax' => 5,
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_select"
      // [end select_multiplesidebyside_8]
      // [start select_multiplesidebyside_9]
      'select_multiplesidebyside_9' => [ 
         'exclude' => 1,
         'label' => 'select_multiplesidebyside_9 maxitems=1',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'maxitems' => 1,
            'items' => [ 
               '0' => [ 
                  '0' => 'foo 1',
                  '1' => 1,
               ],
               '1' => [ 
                  '0' => 'foo 2',
                  '1' => 2,
               ],
               '2' => [ 
                  '0' => 'foo 3',
                  '1' => 3,
               ],
               '3' => [ 
                  '0' => 'bar',
                  '1' => 4,
               ],
            ],
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_select"
      // [end select_multiplesidebyside_9]
      // [start select_tree_1]
      'select_tree_1' => [ 
         'exclude' => 1,
         'label' => 'select_tree_1 pages, showHeader=true, expandAll=true, size=20, order by sorting, static items, description',
         'description' => 'field description',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectTree',
            'foreign_table' => 'pages',
            'foreign_table_where' => 'ORDER BY pages.sorting',
            'size' => 20,
            'items' => [ 
               '0' => [ 
                  '0' => 'static from tca 4711',
                  '1' => 4711,
               ],
               '1' => [ 
                  '0' => 'static from tca 4712',
                  '1' => 4712,
               ],
            ],
            'behaviour' => [ 
               'allowLanguageSynchronization' => true,
            ],
            'treeConfig' => [ 
               'parentField' => 'pid',
               'appearance' => [ 
                  'expandAll' => true,
                  'showHeader' => true,
               ],
            ],
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_select"
      // [end select_tree_1]
      // [start select_tree_2]
      'select_tree_2' => [ 
         'exclude' => 1,
         'label' => 'select_tree_2 pages, showHeader=false, nonSelectableLevels=0,1, maxitems=4, size=10',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectTree',
            'foreign_table' => 'pages',
            'maxitems' => 4,
            'size' => 10,
            'treeConfig' => [ 
               'parentField' => 'pid',
               'appearance' => [ 
                  'expandAll' => true,
                  'showHeader' => false,
                  'nonSelectableLevels' => '0,1',
               ],
            ],
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_select"
      // [end select_tree_2]
      // [start select_tree_3]
      'select_tree_3' => [ 
         'exclude' => 1,
         'label' => 'select_tree_3 pages, maxLevels=1, minitems=1, maxitems=2',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectTree',
            'foreign_table' => 'pages',
            'size' => 20,
            'minitems' => 1,
            'maxitems' => 2,
            'treeConfig' => [ 
               'parentField' => 'pid',
               'appearance' => [ 
                  'showHeader' => true,
                  'expandAll' => true,
                  'maxLevels' => 1,
               ],
            ],
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_select"
      // [end select_tree_3]
      // [start select_tree_4]
      'select_tree_4' => [ 
         'exclude' => 1,
         'label' => 'select_tree_4 pages, maxLevels=2, requestUpdate, expandAll=false',
         'onChange' => 'reload',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectTree',
            'foreign_table' => 'pages',
            'size' => 20,
            'maxitems' => 4,
            'treeConfig' => [ 
               'parentField' => 'pid',
               'appearance' => [ 
                  'expandAll' => false,
                  'showHeader' => true,
                  'maxLevels' => 2,
               ],
            ],
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_select"
      // [end select_tree_4]
      // [start select_tree_5]
      'select_tree_5' => [ 
         'exclude' => 1,
         'label' => 'select_tree_5 pages, readOnly, showHeader=true description',
         'description' => 'field description',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectTree',
            'foreign_table' => 'pages',
            'size' => 20,
            'readOnly' => true,
            'maxitems' => 4,
            'treeConfig' => [ 
               'parentField' => 'pid',
               'appearance' => [ 
                  'showHeader' => true,
                  'expandAll' => true,
               ],
            ],
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_select"
      // [end select_tree_5]
      // [start select_tree_6]
      'select_tree_6' => [ 
         'exclude' => 1,
         'label' => 'select_tree_6 categories',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectTree',
            'foreign_table' => 'sys_category',
            'foreign_table_where' => 'AND ({#sys_category}.{#sys_language_uid} = 0 OR {#sys_category}.{#l10n_parent} = 0) ORDER BY sys_category.sorting',
            'size' => 20,
            'treeConfig' => [ 
               'parentField' => 'parent',
               'appearance' => [ 
                  'expandAll' => true,
                  'showHeader' => true,
               ],
            ],
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_select"
      // [end select_tree_6]
      // [start select_requestUpdate_1]
      'select_requestUpdate_1' => [ 
         'exclude' => 1,
         'label' => 'select_requestUpdate_1',
         'onChange' => 'reload',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [ 
               '0' => [ 
                  '0' => 'Just an item',
                  '1' => 1,
               ],
               '1' => [ 
                  '0' => 'bar',
                  '1' => 'bar',
               ],
               '2' => [ 
                  '0' => 'and yet another one',
                  '1' => -1,
               ],
            ],
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_select"
      // [end select_requestUpdate_1]
      // [start flex_1]
      'flex_1' => [ 
         'exclude' => 1,
         'label' => 'flex_1',
         'config' => [ 
            'type' => 'flex',
            'ds' => [ 
               'default' => '
                        <T3DataStructure>
                            <sheets>

                                <sSingle>
                                    <ROOT>
                                        <type>array</type>
                                        <TCEforms>
                                            <sheetTitle>selectSingle</sheetTitle>
                                        </TCEforms>
                                        <el>
                                            <select_single_1>
                                                <TCEforms>
                                                    <label>select_single_1 description</label>
                                                    <description>field description</description>
                                                    <config>
                                                        <type>select</type>
                                                        <renderType>selectSingle</renderType>
                                                        <items>
                                                            <numIndex index="0">
                                                                <numIndex index="0">foo1</numIndex>
                                                                <numIndex index="1">foo1</numIndex>
                                                            </numIndex>
                                                            <numIndex index="1">
                                                                <numIndex index="0">foo2</numIndex>
                                                                <numIndex index="1">foo2</numIndex>
                                                            </numIndex>
                                                        </items>
                                                    </config>
                                                </TCEforms>
                                            </select_single_1>
                                        </el>
                                    </ROOT>
                                </sSingle>

                                <sCheckbox>
                                    <ROOT>
                                        <type>array</type>
                                        <TCEforms>
                                            <sheetTitle>selectCheckBox</sheetTitle>
                                        </TCEforms>
                                        <el>
                                            <select_checkxox_1>
                                                <TCEforms>
                                                    <label>select_checkxox_1 description</label>
                                                    <description>field description</description>
                                                    <config>
                                                        <type>select</type>
                                                        <renderType>selectCheckBox</renderType>
                                                        <items>
                                                            <numIndex index="0">
                                                                <numIndex index="0">foo1</numIndex>
                                                                <numIndex index="1">1</numIndex>
                                                            </numIndex>
                                                            <numIndex index="1">
                                                                <numIndex index="0">foo 2</numIndex>
                                                                <numIndex index="1">2</numIndex>
                                                            </numIndex>
                                                        </items>
                                                    </config>
                                                </TCEforms>
                                            </select_checkxox_1>
                                        </el>
                                    </ROOT>
                                </sCheckbox>

                                <sTree>
                                    <ROOT>
                                        <type>array</type>
                                        <TCEforms>
                                            <sheetTitle>selectTree</sheetTitle>
                                        </TCEforms>
                                        <el>
                                            <select_tree_1>
                                                <TCEforms>
                                                    <label>select_tree_1 description</label>
                                                    <description>field description</description>
                                                    <config>
                                                        <type>select</type>
                                                        <renderType>selectTree</renderType>
                                                        <foreign_table>pages</foreign_table>
                                                        <size>20</size>
                                                        <maxitems>4</maxitems>
                                                        <treeConfig>
                                                            <expandAll>1</expandAll>
                                                            <parentField>pid</parentField>
                                                            <appearance>
                                                                <showHeader>1</showHeader>
                                                            </appearance>
                                                        </treeConfig>
                                                    </config>
                                                </TCEforms>
                                            </select_tree_1>
                                            <select_tree_2_condition>
                                                <TCEforms>
                                                    <label>select_tree_2_condition, display select_tree_2?</label>
                                                    <config>
                                                        <type>check</type>
                                                    </config>
                                                </TCEforms>
                                            </select_tree_2_condition>
                                            <select_tree_2>
                                                <TCEforms>
                                                    <label>select_tree_2 displayCond</label>
                                                    <displayCond>FIELD:select_tree_2_condition:REQ:TRUE</displayCond>
                                                    <config>
                                                        <type>select</type>
                                                        <renderType>selectTree</renderType>
                                                        <foreign_table>pages</foreign_table>
                                                        <size>20</size>
                                                        <maxitems>4</maxitems>
                                                        <treeConfig>
                                                            <expandAll>1</expandAll>
                                                            <parentField>pid</parentField>
                                                            <appearance>
                                                                <showHeader>1</showHeader>
                                                            </appearance>
                                                        </treeConfig>
                                                    </config>
                                                </TCEforms>
                                            </select_tree_2>
                                        </el>
                                    </ROOT>
                                </sTree>

                                <sMultiplesidebyside>
                                    <ROOT>
                                        <type>array</type>
                                        <TCEforms>
                                            <sheetTitle>selectMultipleSideBySide</sheetTitle>
                                        </TCEforms>
                                        <el>
                                            <select_multiplesidebyside_1>
                                                <TCEforms>
                                                    <label>select_multiplesidebyside_1 description</label>
                                                    <description>field description</description>
                                                    <config>
                                                        <type>select</type>
                                                        <renderType>selectMultipleSideBySide</renderType>
                                                        <foreign_table>tx_styleguide_staticdata</foreign_table>
                                                        <size>5</size>
                                                        <autoSizeMax>5</autoSizeMax>
                                                        <minitems>0</minitems>
                                                        <multiSelectFilterItems>
                                                            <numIndex index="0">
                                                                <numIndex index="0"></numIndex>
                                                                <numIndex index="1"></numIndex>
                                                            </numIndex>
                                                            <numIndex index="1">
                                                                <numIndex index="0">foo</numIndex>
                                                                <numIndex index="1">foo</numIndex>
                                                            </numIndex>
                                                            <numIndex index="2">
                                                                <numIndex index="0">bar</numIndex>
                                                                <numIndex index="1">bar</numIndex>
                                                            </numIndex>
                                                        </multiSelectFilterItems>
                                                        <fieldControl>
                                                            <editPopup>
                                                                <renderType>editPopup</renderType>
                                                                <disabled>0</disabled>
                                                            </editPopup>
                                                            <addRecord>
                                                                <renderType>addRecord</renderType>
                                                                <disabled>0</disabled>
                                                                <options>
                                                                    <setValue>prepend</setValue>
                                                                </options>
                                                            </addRecord>
                                                            <listModule>
                                                                <renderType>listModule</renderType>
                                                                <disabled>0</disabled>
                                                            </listModule>
                                                        </fieldControl>
                                                    </config>
                                                </TCEforms>
                                            </select_multiplesidebyside_1>
                                        </el>
                                    </ROOT>
                                </sMultiplesidebyside>

                                <sSection>
                                    <ROOT>
                                        <type>array</type>
                                        <TCEforms>
                                            <sheetTitle>section</sheetTitle>
                                        </TCEforms>
                                        <el>
                                            <section_1>
                                                <title>section_1</title>
                                                <type>array</type>
                                                <section>1</section>
                                                <el>
                                                    <container_1>
                                                        <type>array</type>
                                                        <title>container_1</title>
                                                        <el>
                                                            <select_tree_1>
                                                                <TCEforms>
                                                                    <label>select_tree_1 pages description</label>
                                                                    <description>field description</description>
                                                                    <config>
                                                                        <type>select</type>
                                                                        <renderType>selectTree</renderType>
                                                                        <foreign_table>pages</foreign_table>
                                                                        <foreign_table_where>ORDER BY pages.sorting</foreign_table_where>
                                                                        <size>20</size>
                                                                        <treeConfig>
                                                                            <parentField>pid</parentField>
                                                                            <appearance>
                                                                                <expandAll>true</expandAll>
                                                                                <showHeader>true</showHeader>
                                                                            </appearance>
                                                                        </treeConfig>
                                                                    </config>
                                                                </TCEforms>
                                                            </select_tree_1>
                                                            <select_multiplesidebyside_1>
                                                                <TCEforms>
                                                                    <label>select_multiplesidebyside_1 description</label>
                                                                    <description>field description</description>
                                                                    <config>
                                                                        <type>select</type>
                                                                        <renderType>selectMultipleSideBySide</renderType>
                                                                        <foreign_table>tx_styleguide_staticdata</foreign_table>
                                                                        <size>5</size>
                                                                        <autoSizeMax>5</autoSizeMax>
                                                                        <minitems>0</minitems>
                                                                        <multiSelectFilterItems>
                                                                            <numIndex index="0">
                                                                                <numIndex index="0"></numIndex>
                                                                                <numIndex index="1"></numIndex>
                                                                            </numIndex>
                                                                            <numIndex index="1">
                                                                                <numIndex index="0">foo</numIndex>
                                                                                <numIndex index="1">foo</numIndex>
                                                                            </numIndex>
                                                                            <numIndex index="2">
                                                                                <numIndex index="0">bar</numIndex>
                                                                                <numIndex index="1">bar</numIndex>
                                                                            </numIndex>
                                                                        </multiSelectFilterItems>
                                                                        <fieldControl>
                                                                            <editPopup>
                                                                                <renderType>editPopup</renderType>
                                                                                <disabled>0</disabled>
                                                                            </editPopup>
                                                                            <addRecord>
                                                                                <renderType>addRecord</renderType>
                                                                                <disabled>0</disabled>
                                                                            </addRecord>
                                                                            <listModule>
                                                                                <renderType>listModule</renderType>
                                                                                <disabled>0</disabled>
                                                                            </listModule>
                                                                        </fieldControl>
                                                                    </config>
                                                                </TCEforms>
                                                            </select_multiplesidebyside_1>
                                                        </el>
                                                    </container_1>
                                                </el>
                                            </section_1>
                                        </el>
                                    </ROOT>
                                </sSection>

                            </sheets>
                        </T3DataStructure>
                    ',
            ],
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_select"
      // [end flex_1]
   ],
   // [end columns]
   // [start types]
   'types' => [ 
      '0' => [ 
         'showitem' => '
                --div--;renderType=selectSingle,
                    select_single_1, select_single_2, select_single_3, select_single_4, select_single_5,
                    select_single_7, select_single_12, select_single_8, select_single_13, select_single_10,
                    select_single_11, select_single_14, select_single_15,
                --div--;renderType=selectSingleBox,
                    select_singlebox_1, select_singlebox_2, select_singlebox_3,
                    select_singlebox_4, select_singlebox_5, select_singlebox_6,
                    select_singlebox_7, select_singlebox_8, select_singlebox_9,
                    select_singlebox_10,
                --div--;renderType=selectCheckBox,
                    select_checkbox_1, select_checkbox_2, select_checkbox_3, select_checkbox_4, select_checkbox_5, select_checkbox_6,
                --div--;renderType=selectMultipleSideBySide,
                    select_multiplesidebyside_1, select_multiplesidebyside_2, select_multiplesidebyside_3,
                    select_multiplesidebyside_5, select_multiplesidebyside_6,
                    select_multiplesidebyside_7, select_multiplesidebyside_8, select_multiplesidebyside_9,
                --div--;renderType=selectTree,
                    select_tree_1, select_tree_2, select_tree_3, select_tree_4, select_tree_5, select_tree_6,
                --div--;in flex,
                    flex_1,
                --div--;requestUpdate,
                    select_requestUpdate_1,
                --div--;meta,
                    sys_language_uid, l10n_parent, l10n_source,
            ',
      ],
   ],
   // [end types]
];