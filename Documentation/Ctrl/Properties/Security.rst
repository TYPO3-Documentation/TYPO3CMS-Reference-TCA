..  include:: /Includes.rst.txt
..  _ctrl-reference-security:
..  _ctrl-security:
..  _ctrl-security-ignorewebmountrestriction:
..  _ctrl-security-ignorerootlevelrestriction:

========
security
========

..  confval:: security
    :name: ctrl-security
    :Path: $GLOBALS['TCA'][$table]['ctrl']
    :type: array
    :Scope: Display


    Array of sub-properties. This is used, for example, in the Core for the
    :sql:`sys_file` table:

    ..  code-block:: php
        :caption: EXT:core/Configuration/TCA/sys_file.php

        return [
            'ctrl' => [
                // ...
                'security' => [
                    'ignoreWebMountRestriction' => true,
                    'ignoreRootLevelRestriction' => true,
                ],
                // ...
            ],
        ];

    You can also use it in an override file:

    ..  code-block:: php
        :caption: EXT:my_extension/Configuration/TCA/Overrides/my_table.php

        $GLOBALS['TCA']['my_table']['ctrl']['security']['ignoreWebMountRestriction'] = true;
        $GLOBALS['TCA']['my_table']['ctrl']['security']['ignoreRootLevelRestriction'] = true;


    ignoreWebMountRestriction
        Allows users to access records that are not in their defined web-mount,
        thus bypassing this restriction.

    ignoreRootLevelRestriction
        Allows non-admin users to access records that on the root-level (page-id 0),
        thus bypassing this usual restriction.
