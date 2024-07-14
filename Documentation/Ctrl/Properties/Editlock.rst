..  include:: /Includes.rst.txt
..  _ctrl-reference-editlock:

========
editlock
========

..  confval:: editlock
    :name: ctrl-editlock
    :Path: $GLOBALS['TCA'][$table]['ctrl']
    :type: string (field name)
    :Scope: Proc. / Display


    Field name, which – if set – will prevent all editing of the record for non-admin users.

    The field should be configured as a checkbox type. Non-admins could be allowed to edit the checkbox but if they
    set it, they will effectively lock the record so they cannot edit it again – and they need an Admin-user
    to remove the lock.

    Note that this flag is cleared when a new copy or version of the record is created.

    This feature is used on the pages table, where it also prevents editing of records on that page (except other pages)!
    Also, no new records (including pages) can be created on the page.

..  _ctrl-reference-editlock-example:

Example: A table with editlock
==============================

If the checkbox is set, the affected record can only be edited by admins.

..  literalinclude:: _CodeSnippets/_Editlock.php
