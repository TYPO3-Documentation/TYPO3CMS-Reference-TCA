.. include:: /Includes.rst.txt
.. _tca_property_dontRemapTablesOnCopy:

=====================
dontRemapTablesOnCopy
=====================

.. confval:: dontRemapTablesOnCopy

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: string (list of tables)
   :Scope: Proc.
   :Types: :aspect:`Description`

   A list of tables which should *not* be remapped to the new element uids if the field holds elements that
   are copied in the session.
