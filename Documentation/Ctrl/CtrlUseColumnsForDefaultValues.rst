useColumnsForDefaultValues
--------------------------

:aspect:`Datatype`
    string (list of field names)

:aspect:`Scope`
    Proc.

:aspect:`Description`
    When a new record is created, this defines the fields from the 'previous' record that should be used as default values.

    **Example from "sys\_filemounts" table:**

    .. code-block:: php

    'ctrl' => [
        'useColumnsForDefaultValues' => 'path,base',
        ...
    ],
