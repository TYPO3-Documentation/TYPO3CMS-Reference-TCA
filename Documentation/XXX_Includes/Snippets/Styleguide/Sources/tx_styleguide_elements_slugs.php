<?php // Example from extension "styleguide", table "tx_styleguide_inline_mm"

return [
   // [start ctrl]
   'ctrl' => [ 
      'title' => 'Form engine elements - slugs',
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
      // Example from extension "styleguide", table "tx_styleguide_elements_slugs"
      // [end hidden]
      // [start sys_language_uid]
      'sys_language_uid' => [ 
         'exclude' => true,
         'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
         'config' => [ 
            'type' => 'language',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_slugs"
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
            'foreign_table' => 'tx_styleguide_elements_rte',
            'foreign_table_where' => 'AND {#tx_styleguide_elements_rte}.{#pid}=###CURRENT_PID### AND {#tx_styleguide_elements_rte}.{#sys_language_uid} IN (-1,0)',
            'default' => 0,
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_slugs"
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
            'foreign_table' => 'tx_styleguide_elements_rte',
            'foreign_table_where' => 'AND {#tx_styleguide_elements_rte}.{#pid}=###CURRENT_PID### AND {#tx_styleguide_elements_rte}.{#uid}!=###THIS_UID###',
            'default' => 0,
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_slugs"
      // [end l10n_source]
      // [start l10n_diffsource]
      'l10n_diffsource' => [ 
         'config' => [ 
            'type' => 'passthrough',
            'default' => '',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_slugs"
      // [end l10n_diffsource]
      // [start input_1]
      'input_1' => [ 
         'l10n_mode' => 'prefixLangTitle',
         'exclude' => 1,
         'label' => 'input_1',
         'description' => 'field description',
         'config' => [ 
            'type' => 'input',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_slugs"
      // [end input_1]
      // [start input_2]
      'input_2' => [ 
         'l10n_mode' => 'prefixLangTitle',
         'exclude' => 1,
         'label' => 'input_2',
         'description' => 'field description',
         'config' => [ 
            'type' => 'input',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_slugs"
      // [end input_2]
      // [start slug_1]
      'slug_1' => [ 
         'exclude' => 1,
         'label' => 'slug_1',
         'description' => 'field description',
         'config' => [ 
            'type' => 'slug',
            'generatorOptions' => [ 
               'fields' => [ 
                  '0' => 'input_1',
                  '1' => 'input_2',
               ],
               'fieldSeparator' => '/',
               'prefixParentPageSlug' => true,
               'replacements' => [ 
                  '/' => '',
               ],
            ],
            'appearance' => [ 
               'prefix' => 'TYPO3\CMS\Styleguide\UserFunctions\FormEngine\SlugPrefix->getPrefix',
            ],
            'fallbackCharacter' => '-',
            'eval' => 'uniqueInSite',
            'default' => '',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_slugs"
      // [end slug_1]
      // [start slug_2]
      'slug_2' => [ 
         'exclude' => 1,
         'label' => 'slug_2',
         'config' => [ 
            'type' => 'slug',
            'size' => 50,
            'generatorOptions' => [ 
               'fields' => [ 
                  '0' => 'input_1',
               ],
               'fieldSeparator' => '/',
               'prefixParentPageSlug' => true,
            ],
            'fallbackCharacter' => '-',
            'eval' => 'uniqueInSite',
            'default' => '',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_slugs"
      // [end slug_2]
      // [start slug_4]
      'slug_4' => [ 
         'exclude' => 1,
         'label' => 'slug_4',
         'config' => [ 
            'type' => 'slug',
            'generatorOptions' => [ 
               'fields' => [ 
                  '0' => 'input_1',
                  '1' => 'input_2',
               ],
               'prefixParentPageSlug' => false,
            ],
            'fallbackCharacter' => '-',
            'eval' => 'uniqueInSite',
            'default' => '',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_slugs"
      // [end slug_4]
      // [start slug_5]
      'slug_5' => [ 
         'exclude' => 1,
         'label' => 'slug_5',
         'config' => [ 
            'type' => 'slug',
            'generatorOptions' => [ 
               'fields' => [ 
                  '0' => [ 
                     '0' => 'input_1',
                     '1' => 'input_2',
                  ],
               ],
               'prefixParentPageSlug' => false,
            ],
            'fallbackCharacter' => '-',
            'eval' => 'uniqueInSite',
            'default' => '',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_slugs"
      // [end slug_5]
      // [start input_3]
      'input_3' => [ 
         'l10n_mode' => 'prefixLangTitle',
         'exclude' => 1,
         'label' => 'input_2',
         'description' => 'field description',
         'config' => [ 
            'type' => 'input',
            'default' => 'Some Job in city1/city2 (f/m)',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_slugs"
      // [end input_3]
      // [start slug_3]
      'slug_3' => [ 
         'exclude' => 1,
         'label' => 'slug_3',
         'description' => 'remove string (f/m)',
         'config' => [ 
            'type' => 'slug',
            'generatorOptions' => [ 
               'fields' => [ 
                  '0' => 'input_3',
               ],
               'replacements' => [ 
                  '(f/m)' => '',
                  '/' => '-',
               ],
            ],
            'fallbackCharacter' => '-',
            'prependSlash' => true,
            'eval' => 'uniqueInPid',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_slugs"
      // [end slug_3]
   ],
   // [end columns]
   // [start types]
   'types' => [ 
      '0' => [ 
         'showitem' => '
                    input_1, input_2, slug_1, slug_2, slug_4, slug_5, input_3, slug_3
            ',
      ],
   ],
   // [end types]
];