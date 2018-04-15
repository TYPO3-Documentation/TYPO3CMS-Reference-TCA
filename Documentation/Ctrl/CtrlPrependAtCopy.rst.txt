prependAtCopy
-------------

:aspect:`Datatype`
    string or LLL reference

:aspect:`Scope`
    Proc.

:aspect:`Description`
    This string will be prepend the records title field when the record is inserted on the same PID as the
    original record to distinguish them.

    Usually the value is something like " (copy %s)" which tells that it was a copy that was just
    inserted (The token "%s" will take the copy number).
