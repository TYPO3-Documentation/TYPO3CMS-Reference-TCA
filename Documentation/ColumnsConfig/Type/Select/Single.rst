.. include:: /Includes.rst.txt

.. _columns-select-rendertype-selectSingle:

=====================
select (selectSingle)
=====================

This page describes the :ref:`select <columns-select>` type with
renderType='selectSingle'.

The renderType selectSingle creates a drop-down box with items to select a single value. Only if
:ref:`size <columns-select-properties-size>` is set to a value greater than one, a box is rendered containing
all selectable elements from which one can be chosen.

.. contents:: Table of contents:
   :local:
   :depth: 1


Examples
========

Simple select drop down with static and database values
-------------------------------------------------------

.. figure:: ../../Images/TypeSelectStyleguideSingle3.png
   :alt: Simple select drop down with static and database values (select_single_3)
   :class: with-shadow

   Simple select drop down with static and database values (select_single_3)

.. code-block:: php

        'select_single_3' => [
            'label' => 'select_single_3 static values, dividers, foreign_table_where',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['Static values', '--div--'],
                    ['static -2', -2],
                    ['static -1', -1],
                    ['DB values', '--div--'],
                ],
                'foreign_table' => 'tx_styleguide_staticdata',
                'foreign_table_where' => 'AND {#tx_styleguide_staticdata}.{#value_1} LIKE \'%foo%\' ORDER BY uid',
                'foreign_table_prefix' => 'A prefix: ',
            ],
        ],


Select foreign rows with icons
------------------------------

.. figure:: ../../Images/ColumnsExampleSelectImages.png
   :alt: Select foreign rows which have icons configured (select_single_12)
   :class: with-shadow

   Select foreign rows which have icons configured (select_single_12)


.. code-block:: php

        'select_single_12' => [
            'label' => 'select_single_12 foreign_table selicon_field',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_styleguide_elements_select_single_12_foreign',
                'fieldWizard' => [
                    'selectIcons' => [
                        'disabled' => false,
                    ],
                ],
            ],
        ],

Select a single value from a list of elements
---------------------------------------------

.. figure:: ../../Images/TypeSelectStyleguideSingle10.png
   :alt: Select a single value from a list of elements (select_single_10)
   :class: with-shadow

   Select a single value from a list of elements (select_single_10)

.. code-block:: php

        'select_single_10' => [
            'label' => 'select_single_10 size=6, three options',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['foo 1', 1],
                    ['foo 2', 2],
                    ['a divider', '--div--'],
                    ['foo 3', 3],
                ],
                'size' => 6,
            ],
        ],



.. _columns-select-properties:
.. _columns-select-properties-type:
.. _columns-select-properties-behaviour:

.. _columns-select-properties-dontremaptablesoncopy:
.. _columns-select-single-properties-fieldControl:
.. _columns-select-properties-fieldInformation:
.. _columns-select-properties-fieldWizard:

.. _columns-select-properties-itemsprocfunc:
.. _columns-select-properties-localizereferencesatparentlocalization:
.. _columns-select-properties-minitems:
.. _columns-select-properties-mm:

.. _columns-select-properties-mm-hasuidfield:
.. _columns-select-properties-mm-match-fields:
.. _columns-select-properties-mm-opposite-field:
.. _columns-select-properties-mm-opposite-usage:
.. _columns-select-properties-mm-oppositeusage:

.. _columns-select-properties-mm-table-where:
.. _columns-select-properties-multiple:
.. _columns-select-properties-readOnly:
.. _columns-select-properties-size:
.. _columns-select-properties-special:
.. _columns-select-properties-fieldControl:
.. _columns-select-properties-maxitems:

Properties
==========

.. include:: ../Behaviour/CommonAllowLanguageSynchronization.rst.txt
   DontRemapTablesOnCopy.rst.txt
   FieldControl.rst.txt
   FieldInformation.rst.txt
   FieldWizard.rst.txt
.. include:: ../FieldWizard/DefaultLanguageDifferences.rst.txt
.. include:: ../FieldWizard/LocalizationStateSelector.rst.txt
.. include:: ../FieldWizard/OtherLanguageContent.rst.txt
.. include:: ../FieldWizard/SelectIcons.rst.txt
   ItemsProcFunc.rst.txt
   LocalizeReferencesAtParentLocalization.rst.txt
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

*  :ref:`behaviour > allowLanguageSynchronization <tca_property_behaviour_allowLanguageSynchronization>`
*  :ref:`dontRemapTablesOnCopy <tca_property_dontRemapTablesOnCopy>`
*  :ref:`fieldControl <tca_property_fieldControl>`
*  :ref:`fieldInformation <tca_property_fieldInformation>`
*  :ref:`fieldWizard <tca_property_fieldWizard>` with the following options

   *  :ref:`defaultLanguageDifferences <tca_property_fieldWizard_>`
   *  :ref:`localizationStateSelector <tca_property_fieldWizard_localizationStateSelector>`
   *  :ref:`otherLanguageContent <tca_property_fieldWizard_otherLanguageContent>`
   *  :ref:`selectIcons <tca_property_fieldWizard_selectIcons>`


*  :ref:`itemsProcFunc <tca_property_itemsProcFunc>`
*  :ref:`localizeReferencesAtParentLocalization <tca_property_localizeReferencesAtParentLocalization>`
*  :ref:`minitems <tca_property_minitems>`
*  :ref:`MM <tca_property_MM>`
*  :ref:`multiple <tca_property_multiple>`
*  :ref:`readOnly <tca_property_readOnly>`
*  :ref:`size <tca_property_size>`
