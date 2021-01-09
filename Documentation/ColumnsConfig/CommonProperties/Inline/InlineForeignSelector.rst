:aspect:`Datatype`
    string

:aspect:`Scope`
    Display / Proc.

:aspect:`Description`
    A selector is used to show all possible child records that could be used to create a relation with the parent record.
    It will be rendered as a multi-select-box. On clicking on an item inside the selector a new relation is created.
    The :code:`foreign_selector` points to a field of the :ref:`foreign_table <columns-inline-properties-foreign-table>`
    that is responsible for providing a selector-box – this field on the :code:`foreign_table` usually
    is of type :ref:`select <columns-select>` and also has a :code:`foreign_table` defined.
