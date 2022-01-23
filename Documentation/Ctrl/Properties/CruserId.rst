.. include:: /Includes.rst.txt
.. _ctrl-reference-cruser-id:

==========
cruser\_id
==========

.. confval:: cruser_id

   :Path: $GLOBALS['TCA'][$table]['ctrl']
   :type: string (field name)
   :Scope: Proc.


   Field name, which is automatically set to the uid of the backend user (be\_users) who originally created the record.
   Is never modified again. Typically the name "cruser\_id" is used for that field.
   See :ref:`tstamp <ctrl-reference-tstamp>` example.
