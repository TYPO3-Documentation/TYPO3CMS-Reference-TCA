.. include:: /Includes.rst.txt
.. _columns-check-properties-eval:

====
eval
====

:aspect:`Datatype`
    string (list of keywords)

:aspect:`Scope`
    Proc. / Display

:aspect:`Description`
    Configuration of field evaluation.

    Keywords:

    maximumRecordsChecked
        If this evaluation is defined, the maximum number of records from the same table that can have this box
        checked will be limited. If someone tries to check the box of a record beyond the allowed maximum, the
        box will be unchecked automatically upon saving.

        The actual limit is defined with the validation property :ref:`validation <columns-check-properties-validation>`.

    maximumRecordsCheckedInPid
        Similar to :code:`maximumRecordsChecked` but with the validation scope limited to records stored in the same page.
