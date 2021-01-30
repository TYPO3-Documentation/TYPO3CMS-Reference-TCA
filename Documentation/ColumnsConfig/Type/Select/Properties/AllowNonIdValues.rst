.. include:: /Includes.rst.txt
.. _columns-select-properties-allownonidvalues:
.. _columns-selectSingle-properties-allownonidvalues:

================
allowNonIdValues
================

.. confval:: allowNonIdValues

   :type: boolean
   :Scope: Proc.
   :RenderType: all

   Only useful if
   :ref:`foreign\_table <columns-select-properties-foreign-table>` is enabled.

   If set, then values which are not integer ids will be allowed. May be needed
   if you use itemsProcFunc or just enter additional items in the items array
   to produce some string-value elements for the list.

   .. Note::
      If you mix non-database relations with database relations like this, DO
      NOT use integers for values and DO NOT use "\_" (underscore) in values
      either! Will not work if you also use "MM" relations!
