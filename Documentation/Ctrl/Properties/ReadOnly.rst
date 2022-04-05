.. include:: /Includes.rst.txt
.. _ctrl-reference-readonly:

========
readOnly
========

.. confval:: readOnly (ctrl)

   :Path: $GLOBALS['TCA'][$table]['ctrl']
   :type: boolean
   :Scope: Proc. / Display


   Records from this table may not be edited in the TYPO3 backend. Such tables are usually called "static".
   If set, this property is often combined with a :file:`ext_tables_static+adt.sql` file to automatically
   populate the table with rows.
