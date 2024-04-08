..  include:: /Includes.rst.txt
..  _columns-file:

====
File
====

..  versionadded:: 12.0
    The type `file` supersedes the usage of TCA type :php:`inline`
    with :php:`foreign_table` set to :php:`sys_file_reference`.

The TCA type :php:`file` creates a field where files can be attached to
the record.

..  seealso::
    :ref:`t3coreapi:fal-using-fal-examples-file-folder-get-references`

..  _columns-file-examples:
..  _tca_example_group_file_1:

Examples
========

..  code-block:: php

    'columns' => [
        'my_image' => [
            'label' => 'My image',
            'config' => [
                'type' => 'file',
                'maxitems' => 6,
                'allowed' => 'common-image-types'
            ],
        ],
    ],

..  _columns-file-migration:

Migration
=========

..  code-block:: php

    // Before
    'columns' => [
        'image' => [
            'label' => 'My image',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'image',
                [
                    'maxitems' => 6,
                ],
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),
        ],
    ],

    // After
    'columns' => [
        'image' => [
            'label' => 'My image',
            'config' => [
                'type' => 'file',
                'maxitems' => 6,
                'allowed' => 'common-image-types'
            ],
        ],
    ],


Another example without usage of the API method would therefore look like this:

..  code-block:: php

    // Before
    'columns' => [
        'image' => [
            'label' => 'My image',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'sys_file_reference',
                'foreign_field' => 'uid_foreign',
                'foreign_sortby' => 'sorting_foreign',
                'foreign_table_field' => 'tablenames',
                'foreign_match_fields' => [
                    'fieldname' => 'image',
                ],
                'foreign_label' => 'uid_local',
                'foreign_selector' => 'uid_local',
                'overrideChildTca' => [
                    'columns' => [
                        'uid_local' => [
                            'config' => [
                                'appearance' => [
                                    'elementBrowserType' => 'file',
                                    'elementBrowserAllowed' => 'jpg,png,gif',
                                ],
                            ],
                        ],
                    ],
                ],
            ]
        ],
    ],

    // After
    'columns' => [
        'image' => [
            'label' => 'My image',
            'config' => [
                'type' => 'file',
                // Can also be an array of file extensions as of TYPO3 v12.4.14+
                'allowed' => 'jpg,png,gif',
            ],
        ],
    ],

Properties
==========

.. toctree::
   :titlesonly:

   Properties/Index
