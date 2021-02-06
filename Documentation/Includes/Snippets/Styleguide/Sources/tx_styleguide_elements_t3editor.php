<?php // Example from extension "styleguide", table "tx_styleguide_inline_usecombination"

return [
   // [start ctrl]
   'ctrl' => [ 
      'title' => 'Form engine elements - t3editor',
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
      // Example from extension "styleguide", table "tx_styleguide_elements_t3editor"
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
      // Example from extension "styleguide", table "tx_styleguide_elements_t3editor"
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
            'foreign_table' => 'tx_styleguide_elements_t3editor',
            'foreign_table_where' => 'AND {#tx_styleguide_elements_t3editor}.{#pid}=###CURRENT_PID### AND {#tx_styleguide_elements_t3editor}.{#sys_language_uid} IN (-1,0)',
            'default' => 0,
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_t3editor"
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
            'foreign_table' => 'tx_styleguide_elements_t3editor',
            'foreign_table_where' => 'AND {#tx_styleguide_elements_t3editor}.{#pid}=###CURRENT_PID### AND {#tx_styleguide_elements_t3editor}.{#uid}!=###THIS_UID###',
            'default' => 0,
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_t3editor"
      // [end l10n_source]
      // [start l10n_diffsource]
      'l10n_diffsource' => [ 
         'config' => [ 
            'type' => 'passthrough',
            'default' => '',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_t3editor"
      // [end l10n_diffsource]
      // [start t3editor_1]
      't3editor_1' => [ 
         'exclude' => 1,
         'label' => 't3editor_1 format=html, rows=7',
         'description' => 'field description',
         'config' => [ 
            'type' => 'text',
            'renderType' => 't3editor',
            'format' => 'html',
            'rows' => 7,
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_t3editor"
      // [end t3editor_1]
      // [start t3editor_reload_1]
      't3editor_reload_1' => [ 
         'exclude' => 1,
         'label' => 't3editor_reload_1',
         'onChange' => 'reload',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [ 
               '0' => [ 
                  '0' => 'label1',
                  '1' => 0,
               ],
               '1' => [ 
                  '0' => 'label2',
                  '1' => 1,
               ],
            ],
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_t3editor"
      // [end t3editor_reload_1]
      // [start t3editor_inline_1]
      't3editor_inline_1' => [ 
         'exclude' => 1,
         'label' => 't3editor_inline_1',
         'config' => [ 
            'type' => 'inline',
            'foreign_table' => 'tx_styleguide_elements_t3editor_inline_1_child',
            'foreign_field' => 'parentid',
            'foreign_table_field' => 'parenttable',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_t3editor"
      // [end t3editor_inline_1]
      // [start t3editor_flex_1]
      't3editor_flex_1' => [ 
         'exclude' => 1,
         'label' => 't3editor_flex_1',
         'config' => [ 
            'type' => 'flex',
            'ds' => [ 
               'default' => '
                        <T3DataStructure>
                            <sheets>
                                <sGeneral>
                                    <ROOT>
                                        <TCEforms>
                                            <sheetTitle>tab</sheetTitle>
                                        </TCEforms>
                                        <type>array</type>
                                        <el>
                                            <t3editor_1>
                                                <TCEforms>
                                                    <label>t3editor_1 description</label>
                                                    <description>field description</description>
                                                    <config>
                                                        <type>text</type>
                                                        <renderType>t3editor</renderType>
                                                        <format>html</format>
                                                    </config>
                                                </TCEforms>
                                            </t3editor_1>
                                        </el>
                                    </ROOT>
                                </sGeneral>
                                <sSection>
                                    <ROOT>
                                        <TCEforms>
                                            <sheetTitle>section</sheetTitle>
                                        </TCEforms>
                                        <type>array</type>
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
                                                            <t3editor_1>
                                                                <TCEforms>
                                                                    <label>t3editor_1 description</label>
                                                                    <description>field description</description>
                                                                    <config>
                                                                        <type>text</type>
                                                                        <renderType>t3editor</renderType>
                                                                        <format>html</format>
                                                                    </config>
                                                                </TCEforms>
                                                            </t3editor_1>
                                                        </el>
                                                    </container_1>
                                                </el>
                                            </section_1>
                                        </el>
                                    </ROOT>
                                </sSection>
                                <sInline>
                                    <ROOT>
                                        <TCEforms>
                                            <sheetTitle>inline</sheetTitle>
                                        </TCEforms>
                                        <type>array</type>
                                        <el>
                                            <inline_1>
                                                <TCEforms>
                                                    <label>inline_1</label>
                                                    <config>
                                                        <type>inline</type>
                                                        <foreign_table>tx_styleguide_elements_t3editor_flex_1_inline_1_child</foreign_table>
                                                        <foreign_field>parentid</foreign_field>
                                                        <foreign_table_field>parenttable</foreign_table_field>
                                                    </config>
                                                </TCEforms>
                                            </inline_1>
                                        </el>
                                    </ROOT>
                                </sInline>
                            </sheets>
                        </T3DataStructure>
                    ',
            ],
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_elements_t3editor"
      // [end t3editor_flex_1]
   ],
   // [end columns]
   // [start types]
   'types' => [ 
      '0' => [ 
         'showitem' => '
                --div--;t3editor,
                    t3editor_1,
                    t3editor_reload_1,
                --div--;in inline,
                    t3editor_inline_1,
                --div--;in flex,
                    t3editor_flex_1,
            ',
      ],
   ],
   // [end types]
];