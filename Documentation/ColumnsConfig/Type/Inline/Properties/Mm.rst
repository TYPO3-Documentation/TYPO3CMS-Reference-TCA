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

.. confval:: MM\_hasUidField

   :type: boolean
   :Scope: Proc.

   If the "multiple" feature is used with MM relations you MUST set this value
   to true and include a UID field! Otherwise sorting and removing relations
   will be buggy.

.. confval:: MM\_opposite\_field

   :type: string (field name)
   :Scope: Proc.

   If you want to make a MM relation editable from the foreign side
   (bidirectional) of the relation as well, you need to set `MM_opposite_field`
   on the foreign side to the field name on the local side.

   For example if the field "companies.employees" is your local side and
   you want to make the same relation editable from the foreign side of the
   relation in a field called persons.employers, you would need to set the
   `MM_opposite_field` value of the TCA configuration of the persons.employers
   field to the string "employees".

   .. note::
      Bidirectional references only get registered once on the native side in
      :sql:`sys_refindex`.


Examples
========

.. _tca_example_inline_mm_inline_1:

Inline field with MM table configured
-------------------------------------

.. include:: /Images/Rst/InlineMmInline1.rst.txt

.. include:: /Images/Rst/InlineMmInline1.rst.txt

.. _tca_example_inline_mm_child_parents:

Opposite field to display MM relations two ways
-----------------------------------------------

.. include:: /Images/Rst/InlineMmChildParents.rst.txt

.. include:: /Images/Rst/InlineMmChildParents.rst.txt
