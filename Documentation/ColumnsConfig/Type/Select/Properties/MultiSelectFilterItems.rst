.. include:: /Includes.rst.txt
.. _columns-select-properties-multiselectfilteritems:

======================
multiSelectFilterItems
======================

.. confval:: multiSelectFilterItems

   :type: array
   :Scope: Display
   :RenderType: :ref:`selectMultipleSideBySide <columns-select-rendertype-selectMultipleSideBySide>`

   Contains predefined elements for the filter field. On selecting
   an item, the list of available items gets automatically filtered.

   Each element in this array is in itself an array where:

   -  First value is the  **filter value of the item** .

   -  Second value is the  **item label** (string or LLL reference)

Examples
========

Select by predefined keywords
-----------------------------

.. include:: /Includes/Images/Styleguide/RstIncludes/SelectMultiplesidebyside5.rst.txt

.. include:: /Includes/Snippets/Styleguide/RstIncludes/SelectMultiplesidebyside5.rst.txt

