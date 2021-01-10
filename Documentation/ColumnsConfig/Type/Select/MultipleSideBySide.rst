.. include:: /Includes.rst.txt

.. _columns-select-rendertype-selectMultipleSideBySide:

=================================
select (selectMultipleSideBySide)
=================================

This page describes the :ref:`select <columns-select>` type with
renderType='selectMultipleSideBySide'.

Two select fields, items can be selected from the right field, selected items are displayed in the left select.

.. contents:: Table of contents:
   :local:
   :depth: 1


Example
=======

.. figure:: ../../Images/TypeSelectStyleguideMultipleSideBySide5.png
   :alt: Side-by-side view with filter (select_multiplesidebyside_5)
   :class: with-shadow

   Side-by-side view with filter (select_multiplesidebyside_5)


.. code-block:: php

        'select_multiplesidebyside_5' => [
            'label' => 'select_multiplesidebyside_5 multiSelectFilterItems',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'items' => [
                    ['foo 1', 1],
                    ['foo 2', 2],
                    ['foo 3', 3],
                    ['bar', 4],
                ],
                'multiSelectFilterItems' => [
                    ['', ''],
                    ['foo', 'foo'],
                    ['bar', 'bar'],
                ],
            ],
        ],


Select properties
=================

*  :ref:`allownonidvalues <columns-select-properties-allownonidvalues>`
*  :ref:`authmode <columns-select-properties-authmode>`
*  :ref:`authmode > enforce <columns-select-properties-authmode-enforce>`
*  :ref:`default <columns-select-properties-default>`
*  :ref:`disableNoMatchingValueElement <columns-select-properties-disableNoMatchingValueElement>`
*  :ref:`exclusivekeys <columns-select-properties-exclusivekeys>`
*  :ref:`filefolder <columns-select-properties-filefolder>`
*  :ref:`filefolder-extlist <columns-select-properties-filefolder-extlist>`
*  :ref:`filefolder-recursions <columns-select-properties-filefolder-recursions>`
*  :ref:`foreign-table <columns-select-properties-foreign-table>`
*  :ref:`foreign-table-prefix <columns-select-properties-foreign-table-prefix>`
*  :ref:`foreign-table-where <columns-select-properties-foreign-table-where>`
*  :ref:`items <columns-select-properties-items>`
*  :ref:`multiSelectFilterItems <columns-select-properties-multiselectfilteritems>`
*  :ref:`special <columns-select-properties-special>`

Common properties
=================

*  :ref:`autoSizeMax <tca_property_autoSizeMax>`
*  :ref:`behaviour > allowLanguageSynchronization <tca_property_behaviour_allowLanguageSynchronization>`
*  :ref:`dontRemapTablesOnCopy <tca_property_dontRemapTablesOnCopy>`
*  :ref:`fieldControl <tca_property_fieldControl>`

   *  :ref:`addRecord <tca_property_fieldControl_addRecord>`
   *  :ref:`editPopup <tca_property_fieldControl_editPopup>`
   *  :ref:`listModule <tca_property_fieldControl_listModule>`

*  :ref:`fieldInformation <tca_property_fieldInformation>`
*  :ref:`fieldWizard <tca_property_fieldWizard>` with the following options

   *  :ref:`defaultLanguageDifferences <tca_property_fieldWizard_>`
   *  :ref:`localizationStateSelector <tca_property_fieldWizard_localizationStateSelector>`
   *  :ref:`otherLanguageContent <tca_property_fieldWizard_otherLanguageContent>`

*  :ref:`itemsProcFunc <tca_property_itemsProcFunc>`
*  :ref:`localizeReferencesAtParentLocalization <tca_property_localizeReferencesAtParentLocalization>`
*  :ref:`maxitems <tca_property_maxitems>`
*  :ref:`minitems <tca_property_minitems>`
*  :ref:`MM <tca_property_MM>`
*  :ref:`multiple <tca_property_multiple>`
*  :ref:`readOnly <tca_property_readOnly>`
*  :ref:`size <tca_property_size>`

