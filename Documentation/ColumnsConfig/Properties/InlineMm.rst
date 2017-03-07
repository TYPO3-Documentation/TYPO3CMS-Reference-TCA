MM
~~

:aspect:`Datatype`
    string (table name)

:aspect:`Scope`
    Proc.

:aspect:`Description`
    Means that the relation to the records of :ref:`foreign_table <columns-inline-properties-foreign-table>`
    is done with a M-M relation with a third "intermediate" table.

    That table typically has three columns:

    uid\_local, uid\_foreign
      Storing uids of both sides. If done right, this is reflected in the table name - :code:`tx_foo_local_foreign_mm`

    sorting
      is a required field used for ordering the items.

    The field which is configured as "inline" is not used for data-storage any more but rather it's set to the number
    of records in the relation on each update, so the field should be an integer.

   .. note::
      Using MM relations you can ONLY store real relations for foreign tables in the list - no additional string
      values or non-record values (so no attributes).
