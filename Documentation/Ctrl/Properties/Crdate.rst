.. include:: /Includes.rst.txt
.. _ctrl-reference-crdate:

======
crdate
======

.. confval:: crdate

   :Path: $GLOBALS['TCA'][$table]['ctrl']
   :type: string (field name)
   :Scope: Proc.

   Field name, which is automatically set to the current timestamp when the record is created. Is never modified again.
   Typically the name "crdate" is used for that field. See :ref:`tstamp <ctrl-reference-tstamp>` example.

Examples
========

Common table control configuration
==================================

.. include:: /Images/Rst/TxStyleguideCtrlCommon.rst.txt

.. include:: /CodeSnippets/TxStyleguideCtrlCommon.rst.txt
