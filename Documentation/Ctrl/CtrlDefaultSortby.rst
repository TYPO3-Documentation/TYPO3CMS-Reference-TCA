default\_sortby
---------------

:aspect:`Datatype`
    string

:aspect:`Scope`
    Display

:aspect:`Description`
    If a field name for :ref:`sortby <ctrl-reference-sortby>` is defined, then this is ignored.

    Otherwise this is used as the 'ORDER BY' statement to sort the records in the table when listed in the TYPO3 backend.
    It is possible to have multiple field names in here, and each can have an ASC or DESC keyword. Note that the value
    *should not* be prefixed with 'ORDER BY' in itself.

    **Example:**

    .. code-block:: php

        'ctrl' => [
            'default_sortby' => 'title',
            ...
        ],

    .. code-block:: php

        'ctrl' => [
            'default_sortby' => 'title ASC, bodytext ASC',
            ...
        ],

    .. important::
        Do not confuse this property with :ref:`sortby <ctrl-reference-sortby>`: This field should be set only if there
        is no :ref:`sortby <ctrl-reference-sortby>`. The sortby field (typically set to `sorting`) contains an integer
        for explicit sorting , the backend then shows "up" and "down" buttons to manage sorting of recordds relative
        to each other. The default\_sortby should only be set if that explicit sorting is not wanted or useful. For
        instance, the list of frontend users is sorted by username and has no other explicit sorting field in the database.
