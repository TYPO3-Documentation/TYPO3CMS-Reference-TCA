.. include:: ../../Includes.txt

.. _columns-select:

type = 'select'
---------------

.. _columns-select-introduction:


Introduction
============

Selectors boxes are very common elements in forms. By the "select" type you can create selector boxes. In
the most simple form this is a list of values among which you can choose only one.

There are various shapes of the select type, the images below give an overview. The basic idea is that all
possible child elements are always listed. This is in contrast to the group type which lists only selected
elements and helps with selecting others via element browser and other tools.

The select type is pretty powerful, there are a lot of options to steer both rendering and database handling.

Select TCA type is used to model a static selection of items or a n:1 database relation or a n:m database relation. For database relations the `foreign_table` TCA option is required.

In case of static items the values of the selected items are stored as CSV content.

In case of n:1 (e.g. Organization has one Administrator) the uid of Administrator is stored in the select column of the Organization.

In case of the n:m (e.g. Organization has multiple categories) the uid of the selected categories are stored either in CSV style inside the select column of the organization or as records in an MM-table, if specified in TCA.

.. note::
    For this type, a renderType is mandatory!


.. _columns-select-examples:

Examples
========

.. figure:: ../../Images/TypeSelectStyleguideSingle3.png
   :alt: Simple select drop down with static and database values (select_single_3)
   :class: with-shadow

   Simple select drop down with static and database values (select_single_3)

.. figure:: ../../Images/ColumnsExampleSelectImages.png
   :alt: Select foreign rows which have icons configured (select_single_12)
   :class: with-shadow

   Select foreign rows which have icons configured (select_single_12)

.. figure:: ../../Images/TypeSelectStyleguideSingle10.png
   :alt: Select a single value from a list of elements (select_single_10)
   :class: with-shadow

   Select a single value from a list of elements (select_single_10)

.. figure:: ../../Images/TypeSelectStyleguideSingleBox1.png
   :alt: Select multiple values from a box (select_singlebox_1)
   :class: with-shadow

   Select multiple values from a box (select_singlebox_1)

.. figure:: ../../Images/TypeSelectStyleguideCheckbox3.png
   :alt: Select values from a checkbox list (select_checkbox_3)
   :class: with-shadow

   Select values from a checkbox list (select_checkbox_3)

.. figure:: ../../Images/TypeSelectStyleguideMultipleSideBySide5.png
   :alt: Side-by-side view with filter (select_multiplesidebyside_5)
   :class: with-shadow

   Side-by-side view with filter (select_multiplesidebyside_5)

.. figure:: ../../Images/TypeSelectStyleguideTree1.png
   :alt: A happy little tree! (select_tree_1)
   :class: with-shadow

   A happy little tree! (select_tree_1)

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
                    [ 'static from tca 4711', 4711 ],
                    [ 'static from tca 4712', 4712 ],
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


.. _columns-select-rendertype-selectSingle:


.. _columns-select-properties:

Properties renderType = 'selectSingle'
======================================

.. _columns-select-properties-type:

.. _columns-select-properties-allownonidvalues:
.. include:: ../Properties/SelectAllowNonIdValues.rst.txt

.. _columns-select-properties-authmode:
.. include:: ../Properties/SelectAuthMode.rst.txt

.. _columns-select-properties-authmode-enforce:
.. include:: ../Properties/SelectAuthModeEnforce.rst.txt

.. _columns-select-properties-behaviour:
.. include:: ../Properties/CommonBehaviour.rst.txt
.. include:: ../Behaviour/CommonAllowLanguageSynchronization.rst.txt

.. _columns-select-properties-default:
.. include:: ../Properties/SelectDefault.rst.txt

.. _columns-select-properties-disablenomatchingvalueelement:
.. include:: ../Properties/SelectDisableNonMatchingValueElement.rst.txt

.. _columns-select-properties-dontremaptablesoncopy:
.. include:: ../Properties/CommonDontRemapTablesOnCopy.rst.txt

.. _columns-select-properties-exclusivekeys:
.. include:: ../Properties/SelectExclusiveKeys.rst.txt

.. _columns-select-properties-fieldInformation:
.. include:: ../Properties/CommonFieldInformation.rst.txt

.. _columns-select-properties-fieldWizard:
.. include:: ../Properties/CommonFieldWizard.rst.txt
.. include:: ../FieldWizard/DefaultLanguageDifferences.rst.txt
.. include:: ../FieldWizard/LocalizationStateSelector.rst.txt
.. include:: ../FieldWizard/OtherLanguageContent.rst.txt
.. include:: ../FieldWizard/SelectIcons.rst.txt

.. _columns-select-properties-filefolder:
.. include:: ../Properties/SelectFileFolder.rst.txt

.. _columns-select-properties-filefolder-extlist:
.. include:: ../Properties/SelectFileFolderExtList.rst.txt

.. _columns-select-properties-filefolder-recursions:
.. include:: ../Properties/SelectFileFolderRecursions.rst.txt

.. _columns-select-properties-foreign-table:
.. include:: ../Properties/SelectForeignTable.rst.txt

.. _columns-select-properties-foreign-table-prefix:
.. include:: ../Properties/SelectForeignTablePrefix.rst.txt

.. _columns-select-properties-foreign-table-where:
.. include:: ../Properties/SelectForeignTableWhere.rst.txt

.. _columns-select-properties-items:
.. include:: ../Properties/SelectItems.rst.txt

.. _columns-select-properties-itemsprocfunc:
.. include:: ../Properties/CommonItemsProcFunc.rst.txt

.. _columns-select-properties-localizereferencesatparentlocalization:
.. include:: ../Properties/CommonLocalizeReferencesAtParentLocalization.rst.txt

.. _columns-select-properties-minitems:
.. include:: ../Properties/CommonMinitems.rst.txt

.. _columns-select-properties-mm:
.. include:: ../Properties/CommonMm.rst.txt

.. _columns-select-properties-mm-hasuidfield:
.. include:: ../Properties/CommonMmHasUidField.rst.txt

.. _columns-select-properties-mm-insert-fields:
.. include:: ../Properties/CommonMmInsertFields.rst.txt

.. _columns-select-properties-mm-table-where:
.. include:: ../Properties/CommonMmTableWhere.rst.txt

.. _columns-select-properties-mm-match-fields:
.. include:: ../Properties/CommonMmMatchFields.rst.txt

.. _columns-select-properties-mm-opposite-field:
.. include:: ../Properties/CommonOppositeField.rst.txt

.. _columns-select-properties-mm-opposite-usage:
.. _columns-select-properties-mm-oppositeusage:
.. include:: ../Properties/CommonMmOppositeUsage.rst.txt

.. _columns-select-properties-multiple:
.. include:: ../Properties/CommonMultiple.rst.txt

.. _columns-select-properties-readOnly:
.. include:: ../Properties/CommonReadOnly.rst.txt

.. _columns-select-properties-size:
.. include:: ../Properties/CommonSize.rst.txt

.. _columns-select-properties-special:
.. include:: ../Properties/SelectSpecial.rst.txt


.. _columns-select-rendertype-selectSingleBox:

Properties renderType = 'selectSingleBox'
=========================================

Renders a select field to select multiple entries from a given list.

.. include:: ../Properties/SelectAllowNonIdValues.rst.txt

.. include:: ../Properties/SelectAuthMode.rst.txt

.. include:: ../Properties/SelectAuthModeEnforce.rst.txt

.. include:: ../Properties/CommonAutoSizeMax.rst.txt

.. include:: ../Properties/CommonBehaviour.rst.txt
.. include:: ../Behaviour/CommonAllowLanguageSynchronization.rst.txt

.. include:: ../Properties/SelectDefault.rst.txt

.. include:: ../Properties/SelectDisableNonMatchingValueElement.rst.txt

.. include:: ../Properties/CommonDontRemapTablesOnCopy.rst.txt

.. include:: ../Properties/SelectExclusiveKeys.rst.txt

.. _columns-select-properties-fieldControl:
.. include:: ../Properties/CommonFieldControl.rst.txt
.. include:: ../Properties/ResetSelection.rst.txt

.. include:: ../Properties/CommonFieldInformation.rst.txt

.. include:: ../Properties/CommonFieldWizard.rst.txt
.. include:: ../FieldWizard/DefaultLanguageDifferences.rst.txt
.. include:: ../FieldWizard/LocalizationStateSelector.rst.txt
.. include:: ../FieldWizard/OtherLanguageContent.rst.txt

.. include:: ../Properties/SelectFileFolder.rst.txt

.. include:: ../Properties/SelectFileFolderExtList.rst.txt

.. include:: ../Properties/SelectFileFolderRecursions.rst.txt

.. include:: ../Properties/SelectForeignTable.rst.txt

.. include:: ../Properties/SelectForeignTablePrefix.rst.txt

.. include:: ../Properties/SelectForeignTableWhere.rst.txt

.. include:: ../Properties/SelectItems.rst.txt

.. include:: ../Properties/CommonItemsProcFunc.rst.txt

.. include:: ../Properties/CommonLocalizeReferencesAtParentLocalization.rst.txt

.. _columns-select-properties-maxitems:
.. include:: ../Properties/CommonMaxitems.rst.txt

.. include:: ../Properties/CommonMinitems.rst.txt

.. include:: ../Properties/CommonMm.rst.txt

.. include:: ../Properties/CommonMmHasUidField.rst.txt

.. include:: ../Properties/CommonMmInsertFields.rst.txt

.. include:: ../Properties/CommonMmTableWhere.rst.txt

.. include:: ../Properties/CommonMmMatchFields.rst.txt

.. include:: ../Properties/CommonOppositeField.rst.txt

.. include:: ../Properties/CommonMmOppositeUsage.rst.txt

.. include:: ../Properties/CommonMultiple.rst.txt

.. include:: ../Properties/CommonReadOnly.rst.txt

.. include:: ../Properties/CommonSize.rst.txt

.. include:: ../Properties/SelectSpecial.rst.txt


.. _columns-select-rendertype-selectCheckBox:

Properties renderType = 'selectCheckBox'
========================================

Render the list of values as single check box rows in a table. Multiple items can be selected.

.. include:: ../Properties/SelectAllowNonIdValues.rst.txt

.. include:: ../Properties/SelectAuthMode.rst.txt

.. include:: ../Properties/SelectAuthModeEnforce.rst.txt

.. include:: ../Properties/CommonBehaviour.rst.txt
.. include:: ../Behaviour/CommonAllowLanguageSynchronization.rst.txt

.. include:: ../Properties/SelectDefault.rst.txt

.. include:: ../Properties/SelectDisableNonMatchingValueElement.rst.txt

.. include:: ../Properties/CommonDontRemapTablesOnCopy.rst.txt

.. include:: ../Properties/SelectExclusiveKeys.rst.txt

.. include:: ../Properties/CommonFieldInformation.rst.txt

.. include:: ../Properties/CommonFieldWizard.rst.txt
.. include:: ../FieldWizard/DefaultLanguageDifferences.rst.txt
.. include:: ../FieldWizard/LocalizationStateSelector.rst.txt
.. include:: ../FieldWizard/OtherLanguageContent.rst.txt

.. include:: ../Properties/SelectFileFolder.rst.txt

.. include:: ../Properties/SelectFileFolderExtList.rst.txt

.. include:: ../Properties/SelectFileFolderRecursions.rst.txt

.. include:: ../Properties/SelectForeignTable.rst.txt

.. include:: ../Properties/SelectForeignTablePrefix.rst.txt

.. include:: ../Properties/SelectForeignTableWhere.rst.txt

.. include:: ../Properties/SelectItems.rst.txt

.. include:: ../Properties/CommonItemsProcFunc.rst.txt

.. include:: ../Properties/CommonLocalizeReferencesAtParentLocalization.rst.txt

.. include:: ../Properties/CommonMaxitems.rst.txt

.. include:: ../Properties/CommonMinitems.rst.txt

.. include:: ../Properties/CommonMm.rst.txt

.. include:: ../Properties/CommonMmHasUidField.rst.txt

.. include:: ../Properties/CommonMmInsertFields.rst.txt

.. include:: ../Properties/CommonMmTableWhere.rst.txt

.. include:: ../Properties/CommonMmMatchFields.rst.txt

.. include:: ../Properties/CommonOppositeField.rst.txt

.. include:: ../Properties/CommonMmOppositeUsage.rst.txt

.. include:: ../Properties/CommonMultiple.rst.txt

.. include:: ../Properties/CommonReadOnly.rst.txt

.. include:: ../Properties/CommonSize.rst.txt

.. include:: ../Properties/SelectSpecial.rst.txt


.. _columns-select-rendertype-selectMultipleSideBySide:

Properties renderType = 'selectMultipleSideBySide'
==================================================

Two select fields, items can be selected from the right field, selected items are displayed in the left select.

.. include:: ../Properties/SelectAllowNonIdValues.rst.txt

.. include:: ../Properties/SelectAuthMode.rst.txt

.. include:: ../Properties/SelectAuthModeEnforce.rst.txt

.. include:: ../Properties/CommonAutoSizeMax.rst.txt

.. include:: ../Properties/CommonBehaviour.rst.txt
.. include:: ../Behaviour/CommonAllowLanguageSynchronization.rst.txt

.. include:: ../Properties/SelectDefault.rst.txt

.. include:: ../Properties/SelectDisableNonMatchingValueElement.rst.txt

.. include:: ../Properties/CommonDontRemapTablesOnCopy.rst.txt

.. include:: ../Properties/SelectExclusiveKeys.rst.txt

.. include:: ../Properties/CommonFieldControl.rst.txt
.. include:: ../FieldControl/AddRecord.rst.txt
.. include:: ../FieldControl/EditPopup.rst.txt
.. include:: ../FieldControl/ListModule.rst.txt

.. include:: ../Properties/CommonFieldInformation.rst.txt

.. include:: ../Properties/CommonFieldWizard.rst.txt
.. include:: ../FieldWizard/DefaultLanguageDifferences.rst.txt
.. include:: ../FieldWizard/LocalizationStateSelector.rst.txt
.. include:: ../FieldWizard/OtherLanguageContent.rst.txt

.. include:: ../Properties/SelectFileFolder.rst.txt

.. include:: ../Properties/SelectFileFolderExtList.rst.txt

.. include:: ../Properties/SelectFileFolderRecursions.rst.txt

.. include:: ../Properties/SelectForeignTable.rst.txt

.. include:: ../Properties/SelectForeignTablePrefix.rst.txt

.. include:: ../Properties/SelectForeignTableWhere.rst.txt

.. include:: ../Properties/SelectItems.rst.txt

.. include:: ../Properties/CommonItemsProcFunc.rst.txt

.. include:: ../Properties/CommonLocalizeReferencesAtParentLocalization.rst.txt

.. include:: ../Properties/CommonMaxitems.rst.txt

.. include:: ../Properties/CommonMinitems.rst.txt

.. include:: ../Properties/CommonMm.rst.txt

.. include:: ../Properties/CommonMmHasUidField.rst.txt

.. include:: ../Properties/CommonMmInsertFields.rst.txt

.. include:: ../Properties/CommonMmTableWhere.rst.txt

.. include:: ../Properties/CommonMmMatchFields.rst.txt

.. include:: ../Properties/CommonOppositeField.rst.txt

.. include:: ../Properties/CommonMmOppositeUsage.rst.txt

.. include:: ../Properties/CommonMultiple.rst.txt

.. _columns-select-properties-multiselectfilteritems:
.. include:: ../Properties/SelectMultiSelectFilterItems.rst.txt

.. include:: ../Properties/CommonReadOnly.rst.txt

.. include:: ../Properties/CommonSize.rst.txt

.. include:: ../Properties/SelectSpecial.rst.txt


.. _columns-select-rendertype-selectTree:

Properties renderType = 'selectTree'
====================================

A tree for selecting hierarchical data items.

.. note::
    This section needs a validation of the single properties - probably some of the relation
    properties like MM are not valid.


.. include:: ../Properties/SelectAllowNonIdValues.rst.txt

.. include:: ../Properties/SelectAuthMode.rst.txt

.. include:: ../Properties/SelectAuthModeEnforce.rst.txt

.. include:: ../Properties/CommonBehaviour.rst.txt
.. include:: ../Behaviour/CommonAllowLanguageSynchronization.rst.txt

.. include:: ../Properties/SelectDefault.rst.txt

.. include:: ../Properties/SelectDisableNonMatchingValueElement.rst.txt

.. include:: ../Properties/CommonDontRemapTablesOnCopy.rst.txt

.. include:: ../Properties/SelectExclusiveKeys.rst.txt

.. include:: ../Properties/CommonFieldInformation.rst.txt

.. include:: ../Properties/CommonFieldWizard.rst.txt
.. include:: ../FieldWizard/LocalizationStateSelector.rst.txt

.. include:: ../Properties/SelectFileFolder.rst.txt

.. include:: ../Properties/SelectFileFolderExtList.rst.txt

.. include:: ../Properties/SelectFileFolderRecursions.rst.txt

.. include:: ../Properties/SelectForeignTable.rst.txt

.. include:: ../Properties/SelectForeignTablePrefix.rst.txt

.. include:: ../Properties/SelectForeignTableWhere.rst.txt

.. include:: ../Properties/SelectItems.rst.txt

.. include:: ../Properties/CommonItemsProcFunc.rst.txt

.. include:: ../Properties/CommonLocalizeReferencesAtParentLocalization.rst.txt

.. include:: ../Properties/CommonMaxitems.rst.txt

.. include:: ../Properties/CommonMinitems.rst.txt

.. include:: ../Properties/CommonMm.rst.txt

.. include:: ../Properties/CommonMmHasUidField.rst.txt

.. include:: ../Properties/CommonMmInsertFields.rst.txt

.. include:: ../Properties/CommonMmTableWhere.rst.txt

.. include:: ../Properties/CommonMmMatchFields.rst.txt

.. include:: ../Properties/CommonOppositeField.rst.txt

.. include:: ../Properties/CommonMmOppositeUsage.rst.txt

.. include:: ../Properties/CommonMultiple.rst.txt

.. include:: ../Properties/CommonReadOnly.rst.txt

.. include:: ../Properties/CommonSize.rst.txt

.. _columns-select-properties-treeconfig:
.. include:: ../Properties/SelectTreeConfig.rst.txt
