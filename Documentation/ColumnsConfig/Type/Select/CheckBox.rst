.. include:: /Includes.rst.txt

.. _columns-select-rendertype-selectCheckBox:

=======================
select (selectCheckBox)
=======================

This page describes the :ref:`select <columns-select>` type with
renderType='selectCheckBox'.

Render the list of values as single check box rows in a table. Multiple items can be selected.

.. contents:: Table of contents:
   :local:
   :depth: 1


Example
=======

.. figure:: ../../Images/TypeSelectStyleguideCheckbox3.png
   :alt: Select values from a checkbox list (select_checkbox_3)
   :class: with-shadow

   Select values from a checkbox list (select_checkbox_3)


.. code-block:: php

        'select_checkbox_3' => [
            'label' => 'select_checkbox_3 icons, description',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectCheckBox',
                'items' => [
                    ['foo 1', 1, '', 'optional description'],
                    ['foo 2', 2, 'EXT:styleguide/Resources/Public/Icons/tx_styleguide.svg', 'description'],
                    ['foo 3', 3, 'EXT:styleguide/Resources/Public/Icons/tx_styleguide.svg'],
                    ['foo 4', 4],
                ],
            ],
        ],

Select properties
=================

*  :ref:`allownonidvalues <columns-select-properties-allownonidvalues>`
*  :ref:`appearance <columns-select-properties-appearance-selectCheckBox>`
*  :ref:`authmode <columns-select-properties-authmode>`
*  :ref:`authmode > enforce <columns-select-properties-authmode-enforce>`
*  :ref:`default <columns-select-properties-default>`
*  :ref:`disableNoMatchingValueElement
   <columns-select-properties-disableNoMatchingValueElement>`
*  :ref:`exclusivekeys <columns-select-properties-exclusivekeys>`
*  :ref:`filefolder <columns-select-properties-filefolder>`
*  :ref:`filefolder-extlist <columns-select-properties-filefolder-extlist>`
*  :ref:`filefolder-recursions <columns-select-properties-filefolder-recursions>`
*  :ref:`foreign-table <columns-select-properties-foreign-table>`
*  :ref:`foreign-table-prefix <columns-select-properties-foreign-table-prefix>`
*  :ref:`foreign-table-where <columns-select-properties-foreign-table-where>`
*  :ref:`items <columns-select-properties-items>`
*  :ref:` <columns-select-properties->`
*  :ref:` <columns-select-properties->`
*  :ref:` <columns-select-properties->`

Common properties
=================

*  :ref:`behaviour > allowLanguageSynchronization <tca_property_behaviour_allowLanguageSynchronization>`
*  :ref:`dontRemapTablesOnCopy <tca_property_dontRemapTablesOnCopy>`
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

