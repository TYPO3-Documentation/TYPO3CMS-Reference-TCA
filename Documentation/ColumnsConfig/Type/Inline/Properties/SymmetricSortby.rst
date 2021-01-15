.. include:: /Includes.rst.txt
.. _columns-inline-properties-symmetric-sortby:

=================
symmetric\_sortby
=================

   :type: string   :Scope: Display / Proc.
    This works like :ref:`foreign_sortby <columns-inline-properties-foreign-sortby>`, but in case of using bidirectional
    symmetric relations. Each side of a symmetric relation could have its own sorting, so :code:`symmetric_sortby`
    defines a field on the :ref:`foreign_table <columns-inline-properties-foreign-table>` where the sorting of the
    "other" side is stored. This property requires that the
    :ref:`foreign_field <columns-inline-properties-foreign-field>` approach is used.
