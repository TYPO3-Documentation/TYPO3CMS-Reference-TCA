.. include:: /Includes.rst.txt
.. _ctrl-reference-groupname:

=========
groupName
=========

.. confval:: groupName
   :name: ctrl-groupName
   :Path: $GLOBALS['TCA'][$table]['ctrl']
   :type: string
   :Scope: Special


   This option can be used to group records in the new record wizard. If you define a new table and set
   its "groupName" to the key of another extension, the table will appear in the list of records from that
   other extension in the new record wizard.
