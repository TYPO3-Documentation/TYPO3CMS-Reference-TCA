.. include:: /Includes.txt

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

allowLanguageSynchronization
~~~~~~~~~~~~~~~~~~~~~~~~~~~~

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

.. _columns-select-properties-fieldControl:

fieldControl
------------

.. include:: ../Properties/CommonFieldControl.rst.txt

resetSelection
~~~~~~~~~~~~~~

.. include:: ../FieldControl/ResetSelection.rst.txt

fieldInformation
----------------

.. include:: ../Properties/CommonFieldInformation.rst.txt

fieldWizard
-----------

.. include:: ../Properties/CommonFieldWizard.rst.txt

defaultLanguageDifferences
~~~~~~~~~~~~~~~~~~~~~~~~~~

.. include:: ../FieldWizard/DefaultLanguageDifferences.rst.txt

localizationStateSelector
~~~~~~~~~~~~~~~~~~~~~~~~~

.. include:: ../FieldWizard/LocalizationStateSelector.rst.txt

otherLanguageContent
~~~~~~~~~~~~~~~~~~~~

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

items
-----

.. include:: ../Properties/SelectItems.rst.txt

itemsProcFunc
-------------

.. include:: ../Properties/CommonItemsProcFunc.rst.txt

localizeReferencesAtParentLocalization
--------------------------------------

.. include:: ../Properties/CommonLocalizeReferencesAtParentLocalization.rst.txt

.. _columns-select-properties-maxitems:

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

readOnly
--------

.. include:: ../Properties/CommonReadOnly.rst.txt

size
----

.. include:: ../Properties/CommonSize.rst.txt

special
-------

.. include:: ../Properties/SelectSpecial.rst.txt
