.. include:: /Includes.rst.txt
.. _ctrl-reference-prependatcopy:

=============
prependAtCopy
=============

.. confval:: prependAtCopy
   :name: ctrl-prependAtCopy
   :Path: $GLOBALS['TCA'][$table]['ctrl']
   :type: string or LLL reference
   :Scope: Proc.


   This string will be appended (not prepended, contrary to the name of this option) to the title of a record copy
   when it is inserted on the same PID as the original record to distinguish them.

   Usually the value is something like :php:` (copy %s)` which signifies that it was a copy that was just
   inserted (The token :php:`%s` will be replaced by the copy number).

   Note it is possible to disable this feature on a page and user or group level using the Page
   TSconfig option :ref:`disablePrependAtCopy <t3tsconfig:pagetcemaintables-disableprependatcopy>`.

