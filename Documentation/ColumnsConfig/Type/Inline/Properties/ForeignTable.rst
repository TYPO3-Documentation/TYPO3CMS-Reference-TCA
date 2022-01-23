.. include:: /Includes.rst.txt
.. _columns-inline-properties-foreign-table:

==============
foreign\_table
==============

.. confval:: foreign_table

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :Required: true
   :type: string (table name)
   :Scope: Display  / Proc.

   The table name of the child records is defined here. The table must be configured in :php:`$GLOBALS['TCA']`.
