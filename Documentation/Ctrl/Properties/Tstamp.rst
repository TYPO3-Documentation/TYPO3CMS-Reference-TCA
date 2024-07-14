.. include:: /Includes.rst.txt
.. _ctrl-reference-tstamp:

======
tstamp
======

.. confval:: tstamp
   :name: ctrl-tstamp
   :Path: $GLOBALS['TCA'][$table]['ctrl']
   :type: string (field name)
   :Scope: Proc.


   Field name, which is automatically updated to the current timestamp
   (UNIX-time in seconds) each time
   the record is updated/saved in the system.

   By convention the name :ref:`tstamp <field_tstamp>` is used for that field.

   .. note::
      The database field configured in this property is created automatically.
      It does not have to be added to the :file:`ext_tables.sql`.

Examples
========

The following fields are set by the DataHandler automatically on creating or
updating records, if they are configured in the :php:`ctrl` section of the TCA:

..  literalinclude:: _CodeSnippets/_DataHandlerFields.php
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_domain_model_something.php
