.. include:: /Includes.rst.txt
.. _ctrl-reference-cruser-id:

==========
cruser\_id
==========

.. confval:: cruser_id

   :Path: $GLOBALS['TCA'][$table]['ctrl']
   :type: string (field name)
   :Scope: Proc.


   Field name, which is automatically set to the uid of the backend user
   (uid of the table :sql:`be_users`) who originally created the record.
   It is never modified again.

   By convention the name :ref:`cruser_id <field_cruser_id>`
   is used for that field.

   .. note::
      The database field configured in this property is created automatically.
      It does not have to be added to the :file:`ext_tables.sql`.

Examples
========

The following fields are set by the DataHandler automatically on creating or
updating records, if they are configured in the :php:`ctrl` section of the TCA:

.. include:: /CodeSnippets/Manual/Ctrl/DataHandlerFields.rst.txt
