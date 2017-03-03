delete
------

:aspect:`Datatype`
    string (field name)

:aspect:`Scope`
    Proc. / Display

:aspect:`Description`
    Field name, which indicates if a record is considered deleted or not.

    If this "soft delete" feature is used, then records are not really deleted, but just marked as 'deleted' by setting
    the value of the field name to "1". In turn, the whole system *must* strictly respect the record as deleted. This
    means that any SQL query must exclude records where this field is true.

    This is a very common feature. Most tables use it throughout the TYPO3 Core. The core extension "recycler"
    can be used to "revive" those deleted records again.
