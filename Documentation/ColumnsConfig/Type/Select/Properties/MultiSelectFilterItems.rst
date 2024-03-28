..  include:: /Includes.rst.txt
..  _columns-select-properties-multiselectfilteritems:

======================
multiSelectFilterItems
======================

..  confval:: multiSelectFilterItems
    :name: select-multiSelectFilterItems
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: array
    :Scope: Display
    :RenderType: :ref:`selectMultipleSideBySide <columns-select-rendertype-selectMultipleSideBySide>`

    Contains predefined elements for the filter field. On selecting
    an item, the list of available items gets automatically filtered.

    Each element in this array is in itself an array where:

    *   First value is the  **filter value of the item** .
    *   Second value is the  **item label** (string or LLL reference)

Examples
========

Select by predefined keywords
-----------------------------

..  include:: /Images/Rst/SelectMultiplesidebyside5.rst.txt

..  include:: /CodeSnippets/SelectMultiplesidebyside5.rst.txt

