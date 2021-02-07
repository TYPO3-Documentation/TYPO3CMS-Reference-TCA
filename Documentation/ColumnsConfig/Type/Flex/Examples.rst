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

.. include:: /Includes/Images/Styleguide/RstIncludes/FlexFile1.rst.txt

The corresponding TCA column loads the DataStructure (:php:`ds`) form an
external XML file:

.. include:: /Includes/Snippets/Styleguide/RstIncludes/FlexFile1.rst.txt

The DataStructure used to render this field is found in the file
"Simple.xml" inside the :file:`styleguide` extension.
Notice the :xml:`<TCEforms>` tags:

.. include:: /Includes/Snippets/Styleguide/RstIncludes/Manual/FlexFormFile1.rst.txt

It's clear that the contents of :xml:`<TCEforms>` is a direct reflection of
the field configurations we normally set up in the :php:`$GLOBALS['TCA']` array.


FlexForm in a plugin
====================

The Data Structure for a FlexForm can also be loaded in the "pi\_flexform"
field of the "tt\_content" table by adding the
following to the ext\_tables.php file of the extension:

.. code-block:: php

   $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['examples_pi1']
        = 'pi_flexform';
   \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
      'examples_pi1',
      'FILE:EXT:examples/Configuration/FlexForms/Main.xml');

In the first line the tt\_content field "pi\_flexform" is added to the display
of fields when the plugin type is selected and set to "examples\_pi1". In the
second line the DS xml file is configured to be the source of the FlexForm DS
used.

If we browse the definition for the "pi\_flexform" field in "tt\_content" below
"columns" using the Admin > Configuration module for
"$GLOBALS['TCA'] (Table configuration array)",
we can see the following:

.. include:: /Includes/Images/Core/Frontend/RstIncludes/PluginFlexFormConfigurationCheck.rst.txt

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

.. include:: /Includes/Images/Styleguide/RstIncludes/Flex1.rst.txt

In this example the FlexForm data structure is saved directly into the TCA
field:

.. include:: /Includes/Snippets/Styleguide/RstIncludes/Flex1.rst.txt

Notice how the data of the two sheets are separated.


.. _tca_example_flex_2:

A flex form field with two flex section containers
==================================================

.. include:: /Includes/Images/Styleguide/RstIncludes/Flex2.rst.txt

In this example the FlexForm data structure is saved directly into the TCA
field:

.. include:: /Includes/Snippets/Styleguide/RstIncludes/Flex2.rst.txt

.. _columns-flex-example-rte:

Example: Rich Text Editor in FlexForms
======================================

Creating a RTE in FlexForms is done by enabling "enableRichtext" content to the
<TCEforms> tag:

.. include:: /Includes/Snippets/Styleguide/RstIncludes/Manual/FlexRte1.rst.txt
