elementBrowser
^^^^^^^^^^^^^^

:aspect:`Datatype`
    array

:aspect:`Scope`
    fieldControl

:aspect:`Description`
    The element browser field control used in :code:`type='group'` renders a button to open
    element browser depending on selected :code:`internal_type`. It is enabled by default if rendering a
    group element.

    .. figure:: ../../Images/TypeGroupFieldControlElementBrowserStyleguideFolder1.png
        :alt: Open element browser popup (group_folder_1)

        Open element browser popup (group_folder_1)

    The element browser control can be disabled by setting :php:`disabled = true`:

    .. code-block:: php

        'myField' => [
            'config' => [
                'fieldControl' => [
                    'elementBrowser' => [
                        'disabled' => true,
                    ],
                ],
            ],
        ],
