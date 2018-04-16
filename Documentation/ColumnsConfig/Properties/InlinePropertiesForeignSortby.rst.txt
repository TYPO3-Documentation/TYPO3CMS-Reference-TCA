foreign\_sortby
~~~~~~~~~~~~~~~

:aspect:`Datatype`
    string

:aspect:`Scope`
    Display / Proc.

:aspect:`Description`
    Define a field on the child record (or on the intermediate table) that stores the manual sorting information. It is
    possible to have a different sorting, depending from which side of the relation we look at parent or child.
    This property requires that the :ref:`foreign_field <columns-inline-properties-foreign-field>` approach is used.

   .. important::
        If you use the table only as an inline element, do not put the :ref:`sortby <ctrl-reference-sortby>` field
        in the :ref:`ctrl <ctrl>` section, otherwise TYPO3 CMS will sort the entire table with every update.
        For example, if you have 10000 records, each with 4 inline elements, TYPO3 CMS will sort 40000 records even
        if only 4 must be sorted.
