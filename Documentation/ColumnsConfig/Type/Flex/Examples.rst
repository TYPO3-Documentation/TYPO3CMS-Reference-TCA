..  include:: /Includes.rst.txt
..  _columns-flex-examples:

========
Examples
========

..  _columns-flex-example-simple:
..  _tca_example_flex_file_1:

Simple FlexForm
===============

The extension :ref:`styleguide <styleguide>` provides some sample FlexForms.
The "simple FlexForm" field provides a very basic
configuration with just a select-type field to choose a page from the
table :sql:`pages`.

..  include:: /Images/Rst/FlexFile1.rst.txt

The corresponding TCA column loads the DataStructure (:php:`ds`) form an
external XML file:

..  include:: /CodeSnippets/FlexFile1.rst.txt

The DataStructure used to render this field is found in the file
"Simple.xml" inside the :file:`styleguide` extension.
Notice the :xml:`<input_1>` tag:

..  include:: /CodeSnippets/FlexFormFile1.rst.txt

It's clear that the contents of :xml:`<input_1>` is a direct reflection of
the field configurations we normally set up in the :php:`$GLOBALS['TCA']` array.

..  _columns-flex-example-plugin:

FlexForm in a plugin
====================

The data structure for a FlexForm can also be loaded in the :sql:`pi_flexform`
field of the :sql:`tt_content` table by adding the following in the
TCA Overrides of an extension, see this example from the extension :composer:`t3docs/blog-example`:

..  literalinclude:: _CodeSnippets/_tt_content_plugin.php
    :linenos:
    :caption: EXT:blog_example/Configuration/TCA/Overrides/tt_content.php

In line 18ff the field :sql:`pi_flexform` is added to the display
of fields when the record type of the plugin is selected.

In line 25ff the method `addPiFlexFormValue()` from class
:php-short:`\TYPO3\CMS\Core\Utility\ExtensionManagementUtility` is used to
register the FlexForm.

..  _columns-flex-example-sheets:
..  _tca_example_flex_1:

Example: FlexForm with two sheets
=================================

This example provides a FlexForm field with two "sheets". Each sheet
can contain a separate FlexForm structure. Each sheet can also have a
sheet descriptions:

..  include:: /Images/Rst/Flex1.rst.txt

In this example the FlexForm data structure is saved directly into the TCA
field:

..  include:: /CodeSnippets/Flex1.rst.txt

Notice how the data of the two sheets are separated.


..  _tca_example_flex_2:

A flex form field with two flex section containers
==================================================

..  include:: /Images/Rst/Flex2.rst.txt

In this example the FlexForm data structure is saved directly into the TCA
field:

..  include:: /CodeSnippets/Flex2.rst.txt

..  _columns-flex-example-rte:

Example: Rich Text Editor in FlexForms
======================================

Creating a RTE in FlexForms is done by enabling `enableRichtext` content to the
tag of the field:

..  include:: /CodeSnippets/Manual/FlexRte1.rst.txt
