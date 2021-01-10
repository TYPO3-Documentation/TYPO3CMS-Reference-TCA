.. include:: /Includes.rst.txt
.. _tca_property_dontRemapTablesOnCopy:

=====================
dontRemapTablesOnCopy
=====================

:aspect:`Datatype`
   string (list of tables)

:aspect:`Scope`
   Proc.

:aspect:`types`

:aspect:`Description`
   **If used with type='group', this is only considered with internal\_type='db'**

   A list of tables which should *not* be remapped to the new element uids if the field holds elements that
   are copied in the session.
