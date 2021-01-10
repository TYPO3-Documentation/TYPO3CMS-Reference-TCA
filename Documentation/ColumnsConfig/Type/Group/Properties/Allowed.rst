.. include:: /Includes.rst.txt
.. _columns-group-properties-allowed:

=======
allowed
=======

:aspect:`Datatype`
    string (list)

:aspect:`Scope`
    Proc. / Display

:aspect:`Description`
    **For the "file" internal type (Optional):**
      A lowercase comma list of file extensions that are permitted, eg. 'jpg,gif,txt'. Also
      see :ref:`disallowed <columns-group-properties-disallowed>`.

    **For the "db" internal type (Required!):**
      A comma list of tables from :php:`$GLOBALS['TCA']`, for example "pages,be\_users".

      .. note::
          If the field is the foreign side of a bidirectional MM relation, only the first table is used and that
          must be the table of the records on the native side of the relation.

      .. note::
          When using Extbase, you also need to fill :ref:`foreign_table <columns-group-properties-foreign-table>`
          property with the same table name as used in :ref:`allowed <columns-group-properties-allowed>` property (but with just one table name).
