:aspect:`Datatype`
    array

:aspect:`Scope`
    Display

:aspect:`Description`
    This property can be used to override certain aspects of the child's TCA if that child record is
    opened inline of the given parent. Display related TCA properties of the child table can be
    overridden in :code:`types` and :code:`columns` section.

    This example overrides the crop variants in a configured fal relation:

    .. code-block:: php

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

    This example overrides the :ref:`showitem <types-properties-showitem>` field of the child table TCA:

    .. code-block:: php

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

    This overrides the :code:`default` columns property of a child field in an inline relation from within
    the parent if a new child is created:

    .. code-block:: php

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

    This overrides the foreign_selector field target field config, defined in the
    :ref:`foreign_selector <columns-inline-properties-foreign-selector>` property. This is used in FAL inline relations:

    .. code-block:: php

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

    .. note::
        It is allowed to use this property within the :ref:`columnsOverrides property <types-properties-columnsOverrides>`
        of an inline parent in the :code:`['types']` section.
