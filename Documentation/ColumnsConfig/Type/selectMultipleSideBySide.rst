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


Properties
==========

.. contents::
   :local:
   :depth: 1

allowNonIdValues
----------------

.. include:: ../Properties/SelectAllowNonIdValues.rst.txt

authMode
--------

.. include:: ../Properties/SelectAuthMode.rst.txt

authMode\_enforce
-----------------

.. include:: ../Properties/SelectAuthModeEnforce.rst.txt

autoSizeMax
-----------

.. include:: ../Properties/CommonAutoSizeMax.rst.txt

behaviour
---------

.. include:: ../Properties/CommonBehaviour.rst.txt

behaviour => allowLanguageSynchronization
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

.. include:: ../Behaviour/CommonAllowLanguageSynchronization.rst.txt

default
-------

.. include:: ../Properties/SelectDefault.rst.txt

disableNoMatchingValueElement
-----------------------------

.. include:: ../Properties/SelectDisableNonMatchingValueElement.rst.txt

dontRemapTablesOnCopy
---------------------

.. include:: ../Properties/CommonDontRemapTablesOnCopy.rst.txt

exclusiveKeys
-------------

.. include:: ../Properties/SelectExclusiveKeys.rst.txt

fieldControl
------------

.. include:: ../Properties/CommonFieldControl.rst.txt

addRecord
~~~~~~~~~

.. include:: ../FieldControl/AddRecord.rst.txt

editPopup
~~~~~~~~~

.. include:: ../FieldControl/EditPopup.rst.txt

listModule
~~~~~~~~~~

.. include:: ../FieldControl/ListModule.rst.txt

fieldInformation
----------------

.. include:: ../Properties/CommonFieldInformation.rst.txt

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

fileFolder
----------

.. include:: ../Properties/SelectFileFolder.rst.txt

fileFolder\_extList
-------------------

.. include:: ../Properties/SelectFileFolderExtList.rst.txt

fileFolder\_recursions
----------------------

.. include:: ../Properties/SelectFileFolderRecursions.rst.txt

foreign\_table
--------------

.. include:: ../Properties/SelectForeignTable.rst.txt

foreign\_table\_prefix
----------------------

.. include:: ../Properties/SelectForeignTablePrefix.rst.txt

foreign\_table\_where
---------------------

.. include:: ../Properties/SelectForeignTableWhere.rst.txt


itemGroups
----------

.. include:: ../Properties/SelectItemGroups.rst.txt

sortItems
---------

.. include:: ../Properties/SelectSortItems.rst.txt

items
-----

.. include:: ../Properties/SelectItems.rst.txt

itemsProcFunc
-------------

.. include:: ../Properties/CommonItemsProcFunc.rst.txt

localizeReferencesAtParentLocalization
--------------------------------------

.. include:: ../Properties/CommonLocalizeReferencesAtParentLocalization.rst.txt

maxitems
--------

.. include:: ../Properties/CommonMaxitems.rst.txt

minitems
--------

.. include:: ../Properties/CommonMinitems.rst.txt

MM
--

.. include:: ../Properties/CommonMm.rst.txt

MM\_hasUidField
---------------

.. include:: ../Properties/CommonMmHasUidField.rst.txt

MM\_insert\_fields
------------------

.. include:: ../Properties/CommonMmInsertFields.rst.txt

MM\_match\_fields
-----------------

.. include:: ../Properties/CommonMmMatchFields.rst.txt

MM\_opposite\_field
-------------------

.. include:: ../Properties/CommonOppositeField.rst.txt

MM\_oppositeUsage
-----------------

.. include:: ../Properties/CommonMmOppositeUsage.rst.txt

MM\_table\_where
----------------

.. include:: ../Properties/CommonMmTableWhere.rst.txt

multiple
--------

.. include:: ../Properties/CommonMultiple.rst.txt

.. _columns-select-properties-multiselectfilteritems:

multiSelectFilterItems
----------------------

.. include:: ../Properties/SelectMultiSelectFilterItems.rst.txt

readOnly
--------

.. include:: ../Properties/CommonReadOnly.rst.txt

size
----

.. include:: ../Properties/CommonSize.rst.txt

special
-------

.. include:: ../Properties/SelectSpecial.rst.txt
