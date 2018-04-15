prepend\_tname
~~~~~~~~~~~~~~

:aspect:`Datatype`
    boolean

:aspect:`Scope`
    Proc.

:aspect:`Description`
    **Only with internal\_type='db'**

    Will prepend the table name to the stored relations (so instead of storing "23" you will
    store e.g. "tt\_content\_23"). This is automatically turned on if multiple different tables are
    allowed for one relation.
