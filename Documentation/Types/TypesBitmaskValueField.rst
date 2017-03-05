bitmask\_value\_field
---------------------

:aspect:`Datatype`
    string (field name)

:aspect:`Description`
    Field name, which holds a value being the integer (bit-mask) for the 'bitmask\_excludelist\_bits' array.

    It works much like 'subtype\_value\_field' but excludes fields based on whether a bit from the value field is set
    or not. See property :ref:`bitmask\_excludelist\_bits <types-properties-bitmask-excludelist-bits>`.

    These two properties are rarely used, but pretty powerful if a 'type=radio' or 'type=check' field
    is set as bitmask\_value\_field.

    [+/-] indicates whether the bit [bit-number] is set or not.

    Example:

    .. code-block:: php

        'bitmask_value_field' => 'active',
        'bitmask_excludelist_bits' => [
            '-0' => 'tmpl_a_subpart_marker,tmpl_a_description',
            '-1' => 'tmpl_b_subpart_marker,tmpl_b_description',
            '-2' => 'tmpl_c_subpart_marker,tmpl_c_description'
        ]

    .. code-block:: php

        'types' => [
            'aType' => [
                'showitem' => 'aField, anotherField, yetAnotherField',
                'bitmask_value_field' => 'theSubtypeValueField',
                'bitmask_excludelist_bits' => [
                    '-1' => 'anotherField', // Remove if bit 1 is NOT set
                    '+2' => 'yetAnotherField', // Remove if bit 2 is set
                ],
            ],
        ],

    With the above configuration, if field database "theSubtypeValueField" is set to value 5 (binary representation
    "1 0 1"), the fields "anotherField" (-1 = 0 at bit position 1) and "yetAnotherField" (+2 = 1 at bit position 2)
    are not displayed, thus leaving only field "aField". If the value is 1 (binary representation "0 0 1"), fields
    "aField" and "yetAnotherField" are shown, while "anotherField" is not.