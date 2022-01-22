.. include:: /Includes.rst.txt
.. _ctrl-reference-origuid:

=======
origUid
=======

.. confval:: origUid

   :Path: $GLOBALS['TCA'][$table]['ctrl']
   :type: string (field name)
   :Scope: Proc.


   Field name, which will contain the UID of the original record in case a record is created as a copy or
   new version of another record.

   Is used when new versions are created from elements and enables the backend to display a visual comparison
   between a new version and its original.
