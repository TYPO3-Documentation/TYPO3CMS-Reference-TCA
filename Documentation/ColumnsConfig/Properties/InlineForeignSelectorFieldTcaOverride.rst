foreign\_selector\_fieldTcaOverride
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

:aspect:`Datatype`
    array

:aspect:`Scope`
    TCA file configuration that overrides the configuration of the field defined in
    the :ref:`foreign_selector <columns-inline-properties-foreign-selector>` property.

    **Example:**

    .. code-block:: php

        'foreign_selector_fieldTcaOverride' => ]
            'config' => ]
                'appearance' => ]
                    'elementBrowserType' => 'file',
                    'elementBrowserAllowed' => $allowedFileExtensions
                ],
            ],
        ],

:aspect:`Description`
    Display / Proc.