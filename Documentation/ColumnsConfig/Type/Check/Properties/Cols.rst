.. include:: /Includes.rst.txt
.. _columns-check-properties-cols:

====
cols
====

.. confval:: cols

   :type: integer/string
   :Scope: Display

   In how many columns the checkboxes will be shown. Makes sense only if the 'items' property is defining multiple
   checkboxes.

   Allowed values are 1, 2, 3, ..., 31 or `inline`, 1 being default. If set to `inline` the checkboxes are
   "floating" and there will be as many in one row as fits to browser width.

   Note checkboxes will still wrap if browser width is not sufficient.

Examples
========

Fixes columns
-------------

.. include:: /Includes/Images/Styleguide/RstIncludes/Checkbox2.rst.txt
.. include:: /Includes/Snippets/Styleguide/RstIncludes/Checkbox2.rst.txt

Inline columns
--------------

.. include:: /Includes/Images/Styleguide/RstIncludes/Checkbox16.rst.txt
.. include:: /Includes/Snippets/Styleguide/RstIncludes/Checkbox16.rst.txt
