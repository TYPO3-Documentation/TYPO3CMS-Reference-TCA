.. include:: /Includes.rst.txt

.. _columns-select-rendertype-selectSingleBox:

========================
select (selectSingleBox)
========================

This page describes the :ref:`select <columns-select>` type with
renderType='selectSingleBox'.

Renders a select field to select multiple entries from a given list.

.. important::

   The name is misleading. This is a renderType which allows you to select
   **multiple** elements!

.. contents:: Table of contents:
   :local:
   :depth: 1


Example
=======

.. figure:: ../../Images/TypeSelectStyleguideSingleBox1.png
   :alt: Select multiple values from a box (select_singlebox_1)
   :class: with-shadow

   Select multiple values from a box (select_singlebox_1)

.. code-block:: php

        'select_singlebox_1' => [
            'label' => 'select_singlebox_1',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingleBox',
                'items' => [
                    ['foo 1', 1],
                    ['foo 2', 2],
                    ['divider', '--div--'],
                    ['foo 3', 3],
                    ['foo 4', 4],
                ],
            ],
        ],

Properties
==========

   AutoSizeMax.rst.txt
.. include:: ../Behaviour/CommonAllowLanguageSynchronization.rst.txt
   DontRemapTablesOnCopy.rst.txt
   FieldControl.rst.txt
.. include:: ../FieldControl/ResetSelection.rst.txt
   FieldInformation.rst.txt
   FieldWizard.rst.txt
.. include:: ../FieldWizard/DefaultLanguageDifferences.rst.txt
.. include:: ../FieldWizard/LocalizationStateSelector.rst.txt
.. include:: ../FieldWizard/OtherLanguageContent.rst.txt
   ItemsProcFunc.rst.txt
   LocalizeReferencesAtParentLocalization.rst.txt
   Maxitems.rst.txt
   Minitems.rst.txt
   Mm.rst.txt
   Multiple.rst.txt
   ReadOnly.rst.txt
   Size.rst.txt

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
*  :ref:`special <columns-select-properties-special>`


Common properties
=================

*  :ref:`autoSizeMax <tca_property_autoSizeMax>`
*  :ref:`behaviour > allowLanguageSynchronization <tca_property_behaviour_allowLanguageSynchronization>`
*  :ref:`dontRemapTablesOnCopy <tca_property_dontRemapTablesOnCopy>`
*  :ref:`fieldControl <tca_property_fieldControl>`

   *  :ref:`resetSelection <tca_property_fieldControl_resetSelection>`

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
