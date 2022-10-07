..  include:: /Includes.rst.txt
..  _ctrl-reference-security:
..  _ctrl-security:
..  _ctrl-security-ignorewebmountrestriction:
..  _ctrl-security-ignorerootlevelrestriction:
..  _ctrl-security-ignorePageTypeRestriction:

========
security
========

..  confval:: security

    :Path: $GLOBALS['TCA'][$table]['ctrl']
    :type: array
    :Scope: Display


    Array of sub-properties. This is used in the Core for the :sql:`sys_file` table:

    ..  code-block:: php
        :caption: EXT:core/Configuration/TCA/sys_file.php

        $GLOBALS['TCA']['sys_file'] = [
            'ctrl' => [
                'security' => [
                    'ignoreWebMountRestriction' => true,
                    'ignoreRootLevelRestriction' => true,
                ],
                // ...
            ],
        ];

    And :php:`ignorePageTypeRestriction` is used for the :sql:`sys_note` table:

    ..  code-block:: php
        :caption: EXT:sys_note/Configuration/TCA/sys_note.php

        $GLOBALS['TCA']['sys_note'] = [
            'ctrl' => [
                'security' => [
                    'ignorePageTypeRestriction' => true,
                ],
                // ...
            ],
        ];


    ignoreWebMountRestriction
        Allows users to access records that are not in their defined web-mount,
        thus bypassing this restriction.

    ignoreRootLevelRestriction
        Allows non-admin users to access records that are on the root-level
        (page ID `0`), thus bypassing this usual restriction.

    ignorePageTypeRestriction
        ..  versionadded:: 12.0
            This is a replacement for the previous PHP API call
            :php:`ExtensionManagementUtility::allowTableOnStandardPages()` which
            was found in :file:`ext_tables.php` files.

        Allows to use a TCA table on any kind of page doktype unless a doktype
        has a restriction set in the :php:`PageDoktypeRegistry` API class.
