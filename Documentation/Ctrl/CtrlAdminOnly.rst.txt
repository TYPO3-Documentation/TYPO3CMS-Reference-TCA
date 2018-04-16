adminOnly
---------

:aspect:`Datatype`
    boolean

:aspect:`Scope`
    Proc. / Display

:aspect:`Description`
    Records can be changed  *only* by "admin"-users (having the "admin" flag set).

    **Example from the "frontend" extension that defines the table "sys\_template" as being editable only by admin users:**

    .. code-block:: php

        'ctrl' => [
            'adminOnly' => 1,
            ...
        ],
