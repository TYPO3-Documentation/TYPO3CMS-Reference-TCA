showitem
--------

:aspect:`Datatype`
    string (list of field names)

:aspect:`Description`
    **Required.**

    Specifies which fields are displayed in which order in the palette, examples:

    .. code-block:: php

        'showitem' => 'aFieldName, anotherFieldName',
        'showitem' => 'aFieldName;labelOverride, anotherFieldName',
        'showitem' => 'aFieldName, anotherFieldName, --linebreak--, yetAnotherFieldName',

    This string is a comma separated list of field names from :ref:`['columns'] section <columns>`, each field can
    optionally have a second, semicolon separated field to override the default :ref:`label <columns-properties-label>`
    property of the field.

    Instead of a field name, the special keyword `--linebreak--` can be used to place groups of fields on
    single lines. Note this line grouping only works well if the browser window size allows multiple fields
    next to each other, if the width is not sufficient the fields will wrap below each other anyways.

    .. important::
        A field name must only appear once in the entire record. Do not reference a single field within
        the showitem list of a types section and again in a palette used in the same type. Don't use
        a field in multiple palettes referenced in a type, or multiple times in one palette.
