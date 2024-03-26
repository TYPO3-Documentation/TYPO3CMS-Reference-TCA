..  include:: /Includes.rst.txt
..  _palettes-properties-showitem:
..  _palettes-linebreaks:
..  _palettes-linebreaks-examples:

========
showitem
========

..  confval:: showitem
    :name: palettes-showitem
    :Path: $GLOBALS['TCA'][$table]['palettes']
    :Required: true
    :type: string (list of field names)

    Specifies which fields are displayed in which order in the palette,
    examples:

    ..  code-block:: php
        :caption: EXT:my_extension/Configuration/TCA/tx_myextension_table.php (Excerpt)

        [
            'showitem' => 'aFieldName, anotherFieldName',
            'showitem' => 'aFieldName;labelOverride, anotherFieldName',
            'showitem' => 'aFieldName, anotherFieldName, --linebreak--, yetAnotherFieldName',
        ]

    This string is a comma separated list of field names from :ref:`['columns'] section <columns>`, each field can
    optionally have a second, semicolon separated field to override the default :ref:`label <columns-properties-label>`
    property of the field.

    Instead of a field name, the special keyword `--linebreak--` can be used to place groups of fields on
    single lines. Note this line grouping only works well if the browser window size allows multiple fields
    next to each other, if the width is not sufficient the fields will wrap below each other anyways.

    ..  caution::
        A field name must only appear once in the entire record. Do not reference
        a single field within the :ref:`showitem <types-properties-showitem>`
        list of a types section and again in a palette used in the same type.
        Do not use a field in multiple palettes referenced in a type, or
        multiple times in one palette.
