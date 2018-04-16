editlock
--------

:aspect:`Datatype`
    string (field name)

:aspect:`Scope`
    Proc. / Display

:aspect:`Description`
    Field name, which – if set – will prevent all editing of the record for non-admin users.

    The field should be configured as a checkbox type. Non-admins could be allowed to edit the checkbox but if they
    set it, they will effectively lock the record so they cannot edit it again – and they need an Admin-user
    to remove the lock.

    Note that this flag is cleared when a new copy or version of the record is created.

    This feature is used on the pages table, where it also prevents editing of records on that page (except other pages)!
    Also, no new records (including pages) can be created on the page.
