.. include:: /Includes.rst.txt
.. _ctrl-reference-hideatcopy:

==========
hideAtCopy
==========

.. confval:: hideAtCopy

   :Path: $GLOBALS['TCA'][$table]['ctrl']
   :type: boolean
   :Scope: Proc.


   If set, and the "disabled" field from :ref:`enablecolumns <ctrl-reference-enablecolumns>` is
   specified, then records will be disabled/hidden when they are copied.

   .. seealso::
   It is possible to disable this feature on a page and user or group level using the Page
   TSconfig option :ref:`disableHideAtCopy <t3tsconfig:pagetcemaintables-disablehideatcopy>`.
