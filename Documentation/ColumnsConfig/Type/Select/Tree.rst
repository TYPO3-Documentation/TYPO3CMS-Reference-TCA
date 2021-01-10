.. include:: /Includes.rst.txt

.. _columns-select-rendertype-selectTree:

===================
select (selectTree)
===================

This page describes the :ref:`select <columns-select>` type with
renderType='selectTree'.

A tree for selecting hierarchical data items.

.. contents:: Table of contents:
   :local:
   :depth: 1

Example
=======

.. figure:: ../../Images/TypeSelectStyleguideTree1.png
   :alt: A happy little tree! (select_tree_1)
   :class: with-shadow

   A happy little tree! (select_tree_1)



.. code-block:: php

        'select_tree_1' => [
            'label' => 'select_tree_1 pages, showHeader=true, expandAll=true, size=20, order by sorting, static items',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectTree',
                'foreign_table' => 'pages',
                'foreign_table_where' => 'ORDER BY pages.sorting',
                'size' => 20,
                'items' => [
                    ['static from tca 4711', 4711],
                    ['static from tca 4712', 4712],
                ],
                'treeConfig' => [
                    'parentField' => 'pid',
                    'appearance' => [
                        'expandAll' => true,
                        'showHeader' => true,
                    ],
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
*  :ref:`treeconfig <columns-select-properties-treeconfig>`


Properties
==========

.. todo::

    This section needs a validation of the single properties - probably some of the relation
    properties like MM are not valid.


*  :ref:`behaviour > allowLanguageSynchronization <tca_property_behaviour_allowLanguageSynchronization>`
*  :ref:`dontRemapTablesOnCopy <tca_property_dontRemapTablesOnCopy>`
*  :ref:`fieldInformation <tca_property_fieldInformation>`
*  :ref:`fieldWizard <tca_property_fieldWizard>` with the following options

   *  :ref:`localizationStateSelector <tca_property_fieldWizard_localizationStateSelector>`

*  :ref:`itemsProcFunc <tca_property_itemsProcFunc>`
*  :ref:`localizeReferencesAtParentLocalization <tca_property_localizeReferencesAtParentLocalization>`
*  :ref:`maxitems <tca_property_maxitems>`
*  :ref:`minitems <tca_property_minitems>`
*  :ref:`MM <tca_property_MM>`
*  :ref:`multiple <tca_property_multiple>`
*  :ref:`readOnly <tca_property_readOnly>`
*  :ref:`size <tca_property_size>` maximal number of elements to be displayed
   by default
