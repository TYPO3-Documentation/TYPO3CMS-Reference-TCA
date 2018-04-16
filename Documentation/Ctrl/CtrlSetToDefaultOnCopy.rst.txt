setToDefaultOnCopy
------------------

:aspect:`Datatype`
    string (list of field names)

:aspect:`Scope`
    Proc.

:aspect:`Description`
    These fields are restored to the default value of the record when they are copied.

    **Example from "sys\_action" table:**

    .. code-block:: php

        'ctrl' => [
            'setToDefaultOnCopy' => 'assign_to_groups',
            ...
        ],
