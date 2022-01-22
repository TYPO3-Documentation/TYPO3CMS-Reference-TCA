.. include:: /Includes.rst.txt
.. _columns-inline-properties-mm:

==
MM
==

.. confval:: MM

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: string (table name)
   :Scope: Proc.

   This value contains the name of the table in which to store an MM
   relation. It is used together with
   :ref:`foreign_table <columns-inline-properties-foreign-table>`. The
   database field with a MM property only stores the number of records
   in the relation.

   There is additional information in the :ref:`MM common property description
   <tca_property_MM>`.

   .. warning::
      Copying with MM relations will not create a copy of the value. Thus
      copying the record `Org` with `Org->orgA` and   `Org->orgB` as
      `New` results in `New->orgA` and `New->orgB` instead of `New->newA`
      and `New->newB`. Deleting the
      relation `New->orgA` will result in a broken relation `Org->orgA`.

.. confval:: MM\_hasUidField

   :type: boolean
   :Scope: Proc.

   If the "multiple" feature is used with MM relations you **must** set this
   value to true. Otherwise sorting and removing relations
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

.. include:: /Images/ManualScreenshots/InlineMmInline1.rst.txt

.. include:: /CodeSnippets/InlineMmInline1.rst.txt

.. _tca_example_inline_mm_child_parents:

Opposite field to display MM relations two ways
-----------------------------------------------

.. include:: /Images/ManualScreenshots/InlineMmChildParents.rst.txt

.. include:: /CodeSnippets/InlineMmChildParents.rst.txt
