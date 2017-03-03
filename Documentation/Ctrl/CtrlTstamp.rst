tstamp
------

:aspect:`Datatype`
    string (field name)

:aspect:`Scope`
    Proc.

:aspect:`Description`
    Field name, which is automatically updated to the current timestamp (UNIX-time in seconds) each time
    the record is updated/saved in the system. Typically the name "tstamp" is used for that field.

    **Example from the "haikus" table of the "example" extension:

    .. code-block:: php

        'ctrl' => [
            'tstamp' => 'tstamp',
            'crdate' => 'crdate',
            'cruser_id' => 'cruser_id',
            ...
        ],

    The above example shows the same definition for the :ref:`crdate <ctrl-reference-crdate>` and
    :ref:`cruser_id <ctrl-reference-cruser-id>` fields.
