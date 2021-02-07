<?php // Automatic screenshot: Remove this comment if you wand to manually change this file

return [
   // [start ctrl]
   'ctrl' => [ 
      'label' => 'title',
      'descriptionColumn' => 'description',
      'tstamp' => 'tstamp',
      'crdate' => 'crdate',
      'cruser_id' => 'cruser_id',
      'delete' => 'deleted',
      'default_sortby' => 'title',
      'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
      'adminOnly' => true,
      'rootLevel' => 1,
      'typeicon_classes' => [ 
         'default' => 'status-user-group-backend',
      ],
      'enablecolumns' => [ 
         'disabled' => 'hidden',
      ],
      'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups',
      'useColumnsForDefaultValues' => 'file_permissions',
      'versioningWS_alwaysAllowLiveEdit' => true,
      'searchFields' => 'title',
   ],
   // [end ctrl]
   // [start columns]
   'columns' => [ 
      // [start title]
      'title' => [ 
         'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.title',
         'config' => [ 
            'type' => 'input',
            'size' => 25,
            'max' => 50,
            'eval' => 'trim,required',
         ],
      ],
      // Example from extension "styleguide", table "be_groups"
      // [end title]
      // [start db_mountpoints]
      'db_mountpoints' => [ 
         'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:db_mountpoints',
         'config' => [ 
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 3,
            'autoSizeMax' => 10,
         ],
      ],
      // Example from extension "styleguide", table "be_groups"
      // [end db_mountpoints]
      // [start file_mountpoints]
      'file_mountpoints' => [ 
         'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'sys_filemounts',
            'foreign_table_where' => ' AND sys_filemounts.pid=0',
            'size' => 3,
            'autoSizeMax' => 10,
            'fieldControl' => [ 
               'editPopup' => [ 
                  'disabled' => false,
                  'options' => [ 
                     'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_edit_title',
                  ],
               ],
               'addRecord' => [ 
                  'disabled' => false,
                  'options' => [ 
                     'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_add_title',
                     'setValue' => 'prepend',
                  ],
               ],
               'listModule' => [ 
                  'disabled' => false,
                  'options' => [ 
                     'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_list_title',
                  ],
               ],
            ],
         ],
      ],
      // Example from extension "styleguide", table "be_groups"
      // [end file_mountpoints]
      // [start file_permissions]
      'file_permissions' => [ 
         'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.fileoper_perms',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'items' => [ 
               '0' => [ 
                  '0' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder',
                  '1' => '--div--',
                  '2' => 'apps-filetree-folder-default',
               ],
               '1' => [ 
                  '0' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_read',
                  '1' => 'readFolder',
                  '2' => 'apps-filetree-folder-default',
               ],
               '2' => [ 
                  '0' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_write',
                  '1' => 'writeFolder',
                  '2' => 'apps-filetree-folder-default',
               ],
               '3' => [ 
                  '0' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_add',
                  '1' => 'addFolder',
                  '2' => 'apps-filetree-folder-default',
               ],
               '4' => [ 
                  '0' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_rename',
                  '1' => 'renameFolder',
                  '2' => 'apps-filetree-folder-default',
               ],
               '5' => [ 
                  '0' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_move',
                  '1' => 'moveFolder',
                  '2' => 'apps-filetree-folder-default',
               ],
               '6' => [ 
                  '0' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_copy',
                  '1' => 'copyFolder',
                  '2' => 'apps-filetree-folder-default',
               ],
               '7' => [ 
                  '0' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_delete',
                  '1' => 'deleteFolder',
                  '2' => 'apps-filetree-folder-default',
               ],
               '8' => [ 
                  '0' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_recursivedelete',
                  '1' => 'recursivedeleteFolder',
                  '2' => 'apps-filetree-folder-default',
               ],
               '9' => [ 
                  '0' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files',
                  '1' => '--div--',
                  '2' => 'mimetypes-other-other',
               ],
               '10' => [ 
                  '0' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_read',
                  '1' => 'readFile',
                  '2' => 'mimetypes-other-other',
               ],
               '11' => [ 
                  '0' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_write',
                  '1' => 'writeFile',
                  '2' => 'mimetypes-other-other',
               ],
               '12' => [ 
                  '0' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_add',
                  '1' => 'addFile',
                  '2' => 'mimetypes-other-other',
               ],
               '13' => [ 
                  '0' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_rename',
                  '1' => 'renameFile',
                  '2' => 'mimetypes-other-other',
               ],
               '14' => [ 
                  '0' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_replace',
                  '1' => 'replaceFile',
                  '2' => 'mimetypes-other-other',
               ],
               '15' => [ 
                  '0' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_move',
                  '1' => 'moveFile',
                  '2' => 'mimetypes-other-other',
               ],
               '16' => [ 
                  '0' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_copy',
                  '1' => 'copyFile',
                  '2' => 'mimetypes-other-other',
               ],
               '17' => [ 
                  '0' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_delete',
                  '1' => 'deleteFile',
                  '2' => 'mimetypes-other-other',
               ],
            ],
            'size' => 17,
            'maxitems' => 17,
            'default' => 'readFolder,writeFolder,addFolder,renameFolder,moveFolder,deleteFolder,readFile,writeFile,addFile,renameFile,replaceFile,moveFile,copyFile,deleteFile',
         ],
      ],
      // Example from extension "styleguide", table "be_groups"
      // [end file_permissions]
      // [start workspace_perms]
      'workspace_perms' => [ 
         'exclude' => 1,
         'displayCond' => 'USER:TYPO3\CMS\Core\Hooks\TcaDisplayConditions->isExtensionInstalled:workspaces',
         'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:workspace_perms',
         'config' => [ 
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => [ 
               '0' => [ 
                  '0' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:workspace_perms_live',
                  '1' => '',
               ],
            ],
         ],
      ],
      // Example from extension "styleguide", table "be_groups"
      // [end workspace_perms]
      // [start pagetypes_select]
      'pagetypes_select' => [ 
         'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.pagetypes_select',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'pagetypes',
            'size' => 5,
            'autoSizeMax' => 50,
            'maxitems' => 20,
         ],
      ],
      // Example from extension "styleguide", table "be_groups"
      // [end pagetypes_select]
      // [start tables_modify]
      'tables_modify' => [ 
         'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.tables_modify',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'tables',
            'size' => 5,
            'autoSizeMax' => 50,
         ],
      ],
      // Example from extension "styleguide", table "be_groups"
      // [end tables_modify]
      // [start tables_select]
      'tables_select' => [ 
         'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.tables_select',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'tables',
            'size' => 5,
            'autoSizeMax' => 50,
         ],
      ],
      // Example from extension "styleguide", table "be_groups"
      // [end tables_select]
      // [start non_exclude_fields]
      'non_exclude_fields' => [ 
         'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.non_exclude_fields',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'exclude',
            'size' => 25,
            'autoSizeMax' => 50,
         ],
      ],
      // Example from extension "styleguide", table "be_groups"
      // [end non_exclude_fields]
      // [start explicit_allowdeny]
      'explicit_allowdeny' => [ 
         'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.explicit_allowdeny',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'explicitValues',
         ],
      ],
      // Example from extension "styleguide", table "be_groups"
      // [end explicit_allowdeny]
      // [start allowed_languages]
      'allowed_languages' => [ 
         'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:allowed_languages',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'languages',
         ],
      ],
      // Example from extension "styleguide", table "be_groups"
      // [end allowed_languages]
      // [start custom_options]
      'custom_options' => [ 
         'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.custom_options',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'custom',
         ],
      ],
      // Example from extension "styleguide", table "be_groups"
      // [end custom_options]
      // [start hidden]
      'hidden' => [ 
         'exclude' => 1,
         'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
         'config' => [ 
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => [ 
               '0' => [ 
                  '0' => '',
                  '1' => '',
                  'invertStateDisplay' => true,
               ],
            ],
         ],
      ],
      // Example from extension "styleguide", table "be_groups"
      // [end hidden]
      // [start groupMods]
      'groupMods' => [ 
         'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:userMods',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'modListGroup',
            'size' => 5,
            'autoSizeMax' => 50,
         ],
      ],
      // Example from extension "styleguide", table "be_groups"
      // [end groupMods]
      // [start description]
      'description' => [ 
         'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.description',
         'config' => [ 
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
         ],
      ],
      // Example from extension "styleguide", table "be_groups"
      // [end description]
      // [start TSconfig]
      'TSconfig' => [ 
         'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:TSconfig',
         'config' => [ 
            'type' => 'text',
            'cols' => 40,
            'rows' => 5,
            'enableTabulator' => true,
            'fixedFont' => true,
         ],
      ],
      // Example from extension "styleguide", table "be_groups"
      // [end TSconfig]
      // [start subgroup]
      'subgroup' => [ 
         'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.subgroup',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'be_groups',
            'foreign_table_where' => 'AND NOT(be_groups.uid = ###THIS_UID###)',
            'size' => 5,
            'autoSizeMax' => 50,
         ],
      ],
      // Example from extension "styleguide", table "be_groups"
      // [end subgroup]
      // [start category_perms]
      'category_perms' => [ 
         'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:category_perms',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectTree',
            'foreign_table' => 'sys_category',
            'foreign_table_where' => ' AND (sys_category.sys_language_uid = 0 OR sys_category.l10n_parent = 0)',
            'treeConfig' => [ 
               'parentField' => 'parent',
               'appearance' => [ 
                  'expandAll' => false,
                  'showHeader' => false,
                  'maxLevels' => 99,
               ],
            ],
            'size' => 20,
            'minitems' => 0,
         ],
      ],
      // Example from extension "styleguide", table "be_groups"
      // [end category_perms]
   ],
   // [end columns]
   // [start types]
   'types' => [ 
      '0' => [ 
         'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                title,subgroup,
            --div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.tabs.base_rights,
                groupMods, tables_select, tables_modify, pagetypes_select, non_exclude_fields, explicit_allowdeny, allowed_languages, custom_options,
            --div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.tabs.mounts_and_workspaces,
                workspace_perms, db_mountpoints, file_mountpoints, file_permissions, category_perms,
            --div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.tabs.options,
                TSconfig,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                hidden,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                description,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
      ],
   ],
   // [end types]
];