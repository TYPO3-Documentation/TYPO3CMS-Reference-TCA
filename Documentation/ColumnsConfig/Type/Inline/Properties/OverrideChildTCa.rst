..  include:: /Includes.rst.txt
..  _columns-inline-properties-overrideChildTca:

================
overrideChildTca
================

..  confval:: overrideChildTca
    :name: inline-overrideChildTca
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: array
    :Scope: Display

    This property can be used to override certain aspects of the child's TCA if that child record is
    opened inline of the given parent. Display related TCA properties of the child table can be
    overridden in :code:`types` and :code:`columns` section.

Examples
========

Overrides the crop variants
---------------------------

This example overrides the crop variants in a configured fal relation:

..  code-block:: php

    'assets' => [
        'config' => [
            'overrideChildTca' => [
                'columns' => [
                    'crop' => [
                        'config' => [
                            'cropVariants' => [
                                'default' => [
                                    'disabled' => true,
                                ],
                                'mobile' => [
                                    'title' => 'LLL:EXT:ext_key/Resources/Private/Language/locallang.xlf:imageManipulation.mobile',
                                    'cropArea' => [
                                        'x' => 0.1,
                                        'y' => 0.1,
                                        'width' => 0.8,
                                        'height' => 0.8,
                                    ],
                                    'allowedAspectRatios' => [
                                        '4:3' => [
                                            'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.4_3',
                                            'value' => 4 / 3
                                        ],
                                        'NaN' => [
                                            'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.free',
                                            'value' => 0.0
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],


Define which fields to show in the child table
----------------------------------------------

This example overrides the :ref:`showitem <types-properties-showitem>` field of the child table TCA:

..  code-block:: php

    'anInlineField' => [
        'config' => [
            'type' => 'inline',
            'overrideChildTca' => [
                'types' => [
                    'aForeignType' => [
                        'showitem' => 'aChildField',
                    ],
                ],
            ],
        ],
    ],

Override the default value of a child tables field
--------------------------------------------------

This overrides the :code:`default` columns property of a child field in an inline relation from within
the parent if a new child is created:

..  code-block:: php

    'anInlineField' => [
        'config' => [
            'type' => 'inline',
            'overrideChildTca' => [
                'columns' => [
                    'CType' => [
                        'config' => [
                            'default' => 'image',
                        ],
                    ],
                ],
            ],
        ],
    ];


Override the foreign_selector field target
------------------------------------------

This overrides the foreign_selector field target field config, defined in the
:ref:`foreign_selector <columns-inline-properties-foreign-selector>` property. This is used in FAL inline relations:

..  code-block:: php

    'anInlineField' => [
        'config' => [
            'type' => 'inline',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => [
                'columns' => [
                    'uid_local' => [
                        'config' => [
                            'appearance' => [
                                'elementBrowserType' => 'file',
                                'elementBrowserAllowed' => $allowedFileExtensions
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],

..  note::
    It is allowed to use this property within the :ref:`columnsOverrides property <types-properties-columnsOverrides>`
    of an inline parent in the :code:`['types']` section.

Example
-------

..  code-block:: php

    'tt_content' => [
        'types' => [
            'myCType' => [
                  'columnsOverrides' => [
                       'myForeignTableColumnInTtContent' => [
                            'config' => [
                                  'overrideChildTca' => [
                                       //...  same as above
                                  ],
                            ],
                       ],
                  ],
            ],
        ],
    ],
