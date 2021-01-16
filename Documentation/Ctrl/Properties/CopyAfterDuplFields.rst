.. include:: /Includes.rst.txt
.. _ctrl-reference-copyafterduplfields:

===================
copyAfterDuplFields
===================

.. confval:: copyAfterDuplFields

   :type: string (list of field names)
   :Scope: Proc.


   The fields in this list will automatically have the value of the same field from the "previous" record transferred
   when they are *copied* to the position *after* another record from same table.

Examples
========

Example from "tt\_content" table::

   'ctrl' => [
      'copyAfterDuplFields' => 'colPos, sys_language_uid',
      ...
   ],

