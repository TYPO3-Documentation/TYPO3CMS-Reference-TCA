.. include:: /Includes.rst.txt
.. _ctrl-reference-crdate:

======
crdate
======

.. confval:: crdate

   :Path: $GLOBALS['TCA'][$table]['ctrl']
   :type: string (field name)
   :Scope: Proc.

   Field name, which is automatically set to the current timestamp when
   the record is created. Is never modified again.

   By convention the name :ref:`crdate <field_crdate>` is used for that field.

   .. note::
      The database field configured in this property is created automatically.
      It does not have to be added to the :file:`ext_tables.sql`.

Examples
========

The following fields are set by the DataHandler automatically on creating or
updating records, if they are configured in the :php:`ctrl` section of the TCA:

.. include:: /CodeSnippets/Manual/Ctrl/DataHandlerFields.rst.txt
