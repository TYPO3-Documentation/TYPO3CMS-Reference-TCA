.. include:: /Includes.rst.txt
.. _columns-select-properties-item-groups:

==========
itemGroups
==========

.. confval:: itemGroups (type => select)

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: array
   :Scope: Display  / Proc.
   :RenderType: all

   Contains an array of key-value pairs. The key contains the id of the item
   group, the value contains the label of the item group or its language
   reference.

   Only groups containing items will be displayed. In the select field first all
   items with no group defined are listed then the item groups in the order of
   their definition, each group with the corresponding items.

   In the renderType `selectSingle` item groups are rendered as
   :html:`<optgroup>`.

   In the renderType `selectCheckbox` the groups are displayed as accordions
   containing the check boxes.

   In other renderTypes a non selectable item with the
   group name gets displayed.


API methods
===========

Adding custom select item groups
--------------------------------

Registration of a select item group takes place in
:file:`Configuration/TCA/tx_mytable.php` for new TCA tables, and in
:file:`Configuration/TCA/Overrides/a_random_core_table.php`
for modifying an existing TCA definition.

For existing select fields additional item groups can be added via the
api method :php:`ExtensionManagementUtility::addTcaSelectItemGroup`.

.. code-block:: php

   ExtensionManagementUtility::addTcaSelectItemGroup(
       'tt_content',
       'CType',
       'sliders',
       'LLL:EXT:my_slider_mixtape/Resources/Private/Language/locallang_tca.xlf:tt_content.group.sliders',
       'after:lists'
   );

When adding a new select field, itemGroups should be added directly in the
original TCA definition without using the API method. Use the API within
:file:`TCA/Configuration/Overrides/` files to extend an existing TCA select
field with grouping.

Attaching select items to item groups
-------------------------------------

Using the API method :php:`ExtensionManagementUtility::addTcaSelectItem` a
a fourth parameter in the array can be used to specify the id of the item
group.

.. code-block:: php

   ExtensionManagementUtility::addTcaSelectItem(
       'tt_content',
       'CType',
       [
           'LLL:EXT:my_slider_mixtape/Resources/Private/Locallang/locallang_tca.xlf:tt_content.CType.slickslider',
           'slickslider',
           'EXT:my_slider_mixtape/Resources/Public/Icons/slickslider.png',
           'sliders'
       ]
   );

History
=======

With the introduction of the `itemGroups` the TCA column type ``select`` has a
clean API to group items for dropdowns in FormEngine. This was previously
handled via placeholder ``--div--`` items,
which then rendered as :html:`<optgroup>` HTML elements in a dropdown.

In larger installations or TYPO3 instances with lots of extensions, Plugins
(:php:`tt_content.list_type`), Content Types (:php:`tt_content.CType`) or custom
Page Types (:php:`pages.doktype`) drop down lists could grow large and
adding item groups caused tedious work for developers or integrators.
Grouping can now be configured on a per-item
basis. Custom groups can be added via an API or when defining TCA for a new
table.


Examples
========

.. _tca_example_select_single_16:

SelectSingle field with itemGroups
----------------------------------

.. include:: /Images/Rst/SelectSingle16.rst.txt

.. include:: /CodeSnippets/SelectSingle16.rst.txt


.. _tca_example_select_single_17:

SelectSingle field with itemGroups, size=6
------------------------------------------

.. include:: /Images/Rst/SelectSingle17.rst.txt

.. include:: /CodeSnippets/SelectSingle17.rst.txt


.. _tca_example_select_singlebox_3:

SelectSingleBox field with itemGroups
-------------------------------------

.. include:: /Images/Rst/SelectSinglebox3.rst.txt

.. include:: /CodeSnippets/SelectSinglebox3.rst.txt


.. _tca_example_select_checkbox_7:

SelectCheckbox field with itemGroups
------------------------------------

.. include:: /Images/Rst/SelectCheckbox7.rst.txt

.. include:: /CodeSnippets/SelectCheckbox7.rst.txt


.. _tca_example_select_multiplesidebyside_10:

Multiple side by side field with itemGroups
-------------------------------------------

.. include:: /Images/Rst/SelectMultiplesidebyside10.rst.txt

.. include:: /CodeSnippets/SelectMultiplesidebyside10.rst.txt
