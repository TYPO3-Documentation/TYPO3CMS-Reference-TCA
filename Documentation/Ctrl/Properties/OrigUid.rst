.. include:: /Includes.rst.txt
.. _ctrl-reference-origuid:

=======
origUid
=======

.. confval:: origUid

   :Path: $GLOBALS['TCA'][$table]['ctrl']
   :type: string (field name)
   :Scope: Proc.


   Field name, which will contain the UID of the original record in case a
   record is created as a copy or new version of another record.

   Is used when new versions are created from elements and enables the backend
   to display a visual comparison between a new version and its original.

   By convention the name :ref:`t3_origuid <field_t3_origuid>`
   is used for that field.

   .. note::
      The database field configured in this property is created automatically.
      It does not have to be added to the :file:`ext_tables.sql`.

Examples
========

The following fields are set by the DataHandler automatically on creating or
updating records, if they are configured in the :php:`ctrl` section of the TCA:

.. include:: /CodeSnippets/Manual/Ctrl/DataHandlerFields.rst.txt
