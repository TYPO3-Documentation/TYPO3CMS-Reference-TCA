.. include:: /Includes.rst.txt
.. _columns-flex-examples:

========
Examples
========

.. _columns-flex-example-simple:
.. _tca_example_flex_file_1:

Simple FlexForm
===============

The extension :ref:`styleguide <styleguide>` provides some sample FlexForms.
The "simple FlexForm" field provides a very basic
configuration with just a select-type field to choose a page from the
table :sql:`pages`.

.. include:: /Images/Rst/FlexFile1.rst.txt

The corresponding TCA column loads the DataStructure (:php:`ds`) form an
external XML file:

.. include:: /CodeSnippets/FlexFile1.rst.txt

The DataStructure used to render this field is found in the file
"Simple.xml" inside the :file:`styleguide` extension.
Notice the :xml:`<input_1>` tag:

.. include:: /CodeSnippets/FlexFile1.rst.txt

It's clear that the contents of :xml:`<input_1>` is a direct reflection of
the field configurations we normally set up in the :php:`$GLOBALS['TCA']` array.


FlexForm in a plugin
====================

The Data Structure for a FlexForm can also be loaded in the :sql:`pi_flexform`
field of the :sql:`tt_content` table by adding the following to in the
TCA Overrides of an extension:

..  code-block:: php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/tt_content.php

    $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['myextension_pi1']
        = 'pi_flexform';
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
        'myextension_pi1',
        'FILE:EXT:examples/Configuration/FlexForms/Main.xml');

In the first line the :sql:`tt_content` field :sql:`pi_flexform` is added to the display
of fields when the plugin type is selected and set to :php:`myextension_pi1`. In the
second line the DS xml file is configured to be the source of the FlexForm DS
used.

If we browse the definition for the :sql:`pi_flexform` field in :sql:`tt_content` below
"columns" using the :guilabel:`Admin > Configuration` module for
:guilabel:`$GLOBALS['TCA'] (Table configuration array)`,
we can see the following:

.. include:: /Images/Rst/PluginFlexFormConfigurationCheck.rst.txt

As you can see there are quite a few extensions that have added pointers to
their Data Structures. Towards the bottom we can find the one we have just been
looking at.


.. _columns-flex-example-sheets:
.. _tca_example_flex_1:

Example: FlexForm with two sheets
=================================

This example provides a FlexForm field with two "sheets". Each sheet
can contain a separate FlexForm structure. Each sheet can also have a
sheet descriptions:

.. include:: /Images/Rst/Flex1.rst.txt

In this example the FlexForm data structure is saved directly into the TCA
field:

.. include:: /CodeSnippets/Flex1.rst.txt

Notice how the data of the two sheets are separated.


.. _tca_example_flex_2:

A flex form field with two flex section containers
==================================================

.. include:: /Images/Rst/Flex2.rst.txt

In this example the FlexForm data structure is saved directly into the TCA
field:

.. include:: /CodeSnippets/Flex2.rst.txt

.. _columns-flex-example-rte:

Example: Rich Text Editor in FlexForms
======================================

Creating a RTE in FlexForms is done by enabling `enableRichtext` content to the
tag of the field:

.. include:: /CodeSnippets/Manual/FlexRte1.rst.txt
