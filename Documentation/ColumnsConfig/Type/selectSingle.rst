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

Properties
==========

.. contents::
   :local:
   :depth: 1



.. _columns-select-properties-allownonidvalues:
.. _columns-selectSingle-properties-allownonidvalues:

allowNonIdValues
----------------

.. include:: ../Properties/SelectAllowNonIdValues.rst.txt

.. _columns-select-properties-authmode:

authMode
--------

.. include:: ../Properties/SelectAuthMode.rst.txt

.. _columns-select-properties-authmode-enforce:

authMode\_enforce
-----------------

.. include:: ../Properties/SelectAuthModeEnforce.rst.txt

.. _columns-select-properties-behaviour:

behaviour
---------

.. include:: ../Properties/CommonBehaviour.rst.txt

behaviour => allowLanguageSynchronization
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

.. include:: ../Behaviour/CommonAllowLanguageSynchronization.rst.txt

.. _columns-select-properties-default:

default
-------

.. include:: ../Properties/SelectDefault.rst.txt

.. _columns-select-properties-disablenomatchingvalueelement:

disableNoMatchingValueElement
-----------------------------

.. include:: ../Properties/SelectDisableNonMatchingValueElement.rst.txt

.. _columns-select-properties-dontremaptablesoncopy:

dontRemapTablesOnCopy
---------------------

.. include:: ../Properties/CommonDontRemapTablesOnCopy.rst.txt

.. _columns-select-properties-exclusivekeys:

exclusiveKeys
-------------

.. include:: ../Properties/SelectExclusiveKeys.rst.txt

.. _columns-select-properties-fieldControl:

fieldControl
------------

.. include:: ../Properties/CommonFieldControl.rst.txt

.. _columns-select-properties-fieldInformation:

fieldInformation
----------------

.. include:: ../Properties/CommonFieldInformation.rst.txt

.. _columns-select-properties-fieldWizard:

fieldWizard
-----------

.. include:: ../Properties/CommonFieldWizard.rst.txt

The following fieldWizards are available for this renderType:

.. contents::
   :local:
   :depth: 1

fieldWizard => defaultLanguageDifferences
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

.. include:: ../FieldWizard/DefaultLanguageDifferences.rst.txt

fieldWizard => localizationStateSelector
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

.. include:: ../FieldWizard/LocalizationStateSelector.rst.txt

fieldWizard => otherLanguageContent
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

.. include:: ../FieldWizard/OtherLanguageContent.rst.txt

selectIcons
~~~~~~~~~~~

.. include:: ../FieldWizard/SelectIcons.rst.txt

.. _columns-select-properties-filefolder:

fileFolder
----------

.. include:: ../Properties/SelectFileFolder.rst.txt

.. _columns-select-properties-filefolder-extlist:

fileFolder\_extList
-------------------

.. include:: ../Properties/SelectFileFolderExtList.rst.txt

.. _columns-select-properties-filefolder-recursions:

fileFolder\_recursions
----------------------

.. include:: ../Properties/SelectFileFolderRecursions.rst.txt

.. _columns-select-properties-foreign-table:

foreign\_table
--------------

.. include:: ../Properties/SelectForeignTable.rst.txt

.. _columns-select-properties-foreign-table-prefix:

foreign\_table\_prefix
----------------------

.. include:: ../Properties/SelectForeignTablePrefix.rst.txt

.. _columns-select-properties-foreign-table-where:

foreign\_table\_where
---------------------

.. include:: ../Properties/SelectForeignTableWhere.rst.txt


.. _columns-select-properties-item-groups:

itemGroups
----------

.. include:: ../Properties/SelectItemGroups.rst.txt


.. _columns-select-properties-sort-items:

sortItems
---------

.. include:: ../Properties/SelectSortItems.rst.txt


.. _columns-select-properties-items:

items
-----

.. include:: ../Properties/SelectItems.rst.txt

.. _columns-select-properties-itemsprocfunc:

itemsProcFunc
-------------

.. include:: ../Properties/CommonItemsProcFunc.rst.txt

.. _columns-select-properties-localizereferencesatparentlocalization:

localizeReferencesAtParentLocalization
--------------------------------------

.. include:: ../Properties/CommonLocalizeReferencesAtParentLocalization.rst.txt

.. _columns-select-properties-minitems:

minitems
--------

.. include:: ../Properties/CommonMinitems.rst.txt

.. _columns-select-properties-mm:

MM
--

.. include:: ../Properties/CommonMm.rst.txt

.. _columns-select-properties-mm-hasuidfield:

MM\_hasUidField
---------------

.. include:: ../Properties/CommonMmHasUidField.rst.txt

.. _columns-select-properties-mm-insert-fields:

MM\_insert\_fields
------------------

.. include:: ../Properties/CommonMmInsertFields.rst.txt

.. _columns-select-properties-mm-match-fields:

MM\_match\_fields
-----------------

.. include:: ../Properties/CommonMmMatchFields.rst.txt

.. _columns-select-properties-mm-opposite-field:

MM\_opposite\_field
-------------------

.. include:: ../Properties/CommonOppositeField.rst.txt

.. _columns-select-properties-mm-opposite-usage:
.. _columns-select-properties-mm-oppositeusage:

MM\_oppositeUsage
-----------------

.. include:: ../Properties/CommonMmOppositeUsage.rst.txt

.. _columns-select-properties-mm-table-where:

MM\_table\_where
----------------

.. include:: ../Properties/CommonMmTableWhere.rst.txt

.. _columns-select-properties-multiple:

multiple
--------

.. include:: ../Properties/CommonMultiple.rst.txt

.. _columns-select-properties-readOnly:

readOnly
--------

.. include:: ../Properties/CommonReadOnly.rst.txt

.. _columns-select-properties-size:

size
----

.. include:: ../Properties/CommonSize.rst.txt

.. _columns-select-properties-special:

special
-------

.. include:: ../Properties/SelectSpecial.rst.txt



