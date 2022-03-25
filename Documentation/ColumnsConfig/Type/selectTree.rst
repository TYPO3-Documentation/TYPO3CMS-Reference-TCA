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


Properties
==========

.. note::
    This section needs a validation of the single properties - probably some of the relation
    properties like MM are not valid.


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

fieldWizard => localizationStateSelector
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

.. include:: ../FieldWizard/LocalizationStateSelector.rst.txt

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

.. _columns-select-properties-treeconfig:

treeConfig
----------

.. include:: ../Properties/SelectTreeConfig.rst.txt
