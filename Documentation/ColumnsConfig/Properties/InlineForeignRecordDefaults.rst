foreign\_record\_defaults
~~~~~~~~~~~~~~~~~~~~~~~~~

:aspect:`Datatype`
    array

:aspect:`Scope`
    Proc.

:aspect:`Description`
    This property makes it possible to set default values for the foreign records created via the inline relation.

    **Example**

    .. code-block:: php

        'foreign_table' => 'tt_content',
        'foreign_record_defaults' => [
            'CType' => 'image'
        ];

   This example would make every new content element created inline an "image" content element by default.
