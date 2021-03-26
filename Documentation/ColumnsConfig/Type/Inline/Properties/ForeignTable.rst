.. include:: /Includes.rst.txt
.. _columns-inline-properties-foreign-table:

==============
foreign\_table
==============

.. confval:: foreign_table

   :Required: true
   :type: string (table name)
   :Scope: Display  / Proc.

   The table name of the child records is defined here. The table must be configured in :php:`$GLOBALS['TCA']`.

   .. deprecated:: 11.2
      Usage of the `foreign_table` relation with the table `sys_language`
      Has been deprecated. Use TCA field type called
      :ref:`language<columns-language>` instead.
