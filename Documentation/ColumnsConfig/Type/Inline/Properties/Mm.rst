.. include:: /Includes.rst.txt
.. _columns-inline-properties-mm:

==
MM
==

.. confval:: MM

   :type: string (table name)
   :Scope: Proc.

   Means that the relation to the records of :ref:`foreign_table <columns-inline-properties-foreign-table>`
   is done with a M-M relation with a third "intermediate" table.

   That table typically has three columns:

   uid\_local, uid\_foreign
      Storing uids of both sides. If done right, this is reflected in the table name - :code:`tx_foo_local_foreign_mm`

   sorting
      is a required field used for ordering the items.

   further fields
      May exist, in particular if :ref:`MM_match_fields <columns-inline-properties-mm-match-fields>` is involved in the set up.

   The field which is configured as "inline" is not used for data-storage any more but rather it's set to the number
   of records in the relation on each update, so the field should be an integer.

   .. warning::
      Copying with MM relations will not create a copy of the value. Thus copying the record `Org` with `Org->orgA` and
      `Org->orgB` as `New` results in `New->orgA` and `New->orgB` instead of `New->newA` and `New->newB`. Deleting the
      relation `New->orgA` will result in a broken relation `Org->orgA`.
