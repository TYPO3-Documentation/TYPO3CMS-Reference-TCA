prependAtCopy
-------------

:aspect:`Datatype`
    string or LLL reference

:aspect:`Scope`
    Proc.

:aspect:`Description`
    This string will be appended (not prepended, contrary to the name of this option) to the title of a record copy
    when it is inserted on the same PID as the original record to distinguish them.

    Usually the value is something like :php:` (copy %s)` which signifies that it was a copy that was just
    inserted (The token :php:`%s` will be replaced by the copy number).
