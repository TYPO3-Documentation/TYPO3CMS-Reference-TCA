columnsOverrides
----------------

:aspect:`Datatype`
    array (columns fields overrides)

:aspect:`Scope`
    Display

:aspect:`Description`
    Changed or added ['columns'] field display definitions.

    This allows to change the column definition of a field if a record of this type is edited. Currently, it only
    affects the display of form fields, but not the data handling.

    A typical property that can be changed here is :code:`renderType`.

    The core uses this property to override for instance the "bodytext" field config of table "tt_content": If a record
    of type "text" is edited, it adds "enableRichtext = 1" to trigger an RTE to the default "bodytext" configuration,
    and if a type "table" is edited, it adds "renderType = textTable" and "wrap = off" to "bodytext".

    The FormEngine basically merges "columnsOverrides" over the default "columns" field after the record type
    has been determined.

    **Example adding "nowrap" to a text type for type "text"**

    .. code-block:: php

        'types' => [
            'text' => [
                'showitem' => 'hidden, myText'
                'columnsOverrides' => [
                    'myText' => [
                        'config' => [
                            'wrap' => 'off',
                        ],
                    ],
                ],
            ],
            ...
        ],

    .. important::
        It is not possible to override any properties in "Proc." scope: The DataHandler does not take "columnsOverrides"
        into account. Only pure "Display" related properties can be overridden. This especially means that
        columns config 'type' can **not** be set to a different value.
