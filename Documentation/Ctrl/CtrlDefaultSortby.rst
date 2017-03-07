default\_sortby
---------------

:aspect:`Datatype`
    string

:aspect:`Scope`
    Display

:aspect:`Description`
    If a field name for :ref:`sortby <ctrl-reference-sortby>` is defined, then this is ignored.

    Otherwise this is used as the 'ORDER BY' statement to sort the records in the table when listed in the TYPO3 backend.

    **Example from the "haikus" table of the "examples" extension, listing records alphabetically by title:**

    .. code-block:: php

        'ctrl' => [
            'default_sortby' => 'ORDER BY title',
            ...
        ],

    .. important::
        Do not confuse this property with :ref:`sortby <ctrl-reference-sortby>`.
