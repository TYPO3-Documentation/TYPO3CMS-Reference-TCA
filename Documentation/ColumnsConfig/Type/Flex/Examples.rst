..  include:: /Includes.rst.txt
..  _columns-flex-examples:

========
Examples
========

..  _columns-flex-example-simple:
..  _tca-example-flex-file-1:

Simple FlexForm
===============

The plugin of the conference extension has settings in a FlexForm:

..  figure:: /Images/Conference/FlexPlugin.png
    :alt: The settings of the conference list plugin
    :class: with-shadow

    The settings of the conference list plugin

The plugin loads the DataStructure from an external XML file:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/600-tt_content-conference_list.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/600-tt_content-conference_list.php
    :emphasize-lines: 24

Notice the :xml:`<settings.mode>` tag in the DataStructure:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/FlexForms/ConferenceList.xml
    :caption: EXT:my_extension/Configuration/FlexForms/ConferenceList.xml
    :visible-lines: 1-29, 91-93, 135-136
    :emphasize-lines: 8

It's clear that the contents of :xml:`<settings.mode>` is a direct reflection of
the field configurations we normally set up in the :php:`$GLOBALS['TCA']` array.

..  _columns-flex-example-plugin:

FlexForm in a plugin
====================

The data structure for a FlexForm can also be loaded in the `pi_flexform`
field of the `tt_content` table by adding the following in the
TCA overrides of an extension:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/600-tt_content-conference_list.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/600-tt_content-conference_list.php
    :emphasize-lines: 17-25

The 7th parameter of :php:`ExtensionUtility::registerPlugin()` registers the
FlexForm. TYPO3 shows the field `pi_flexform` when the record type of the
plugin is selected.

..  _columns-flex-example-sheets:
..  _tca-example-flex-1:

Example: FlexForm with two sheets
=================================

This example provides a FlexForm field with two "sheets". Each sheet
can contain a separate FlexForm structure. Each sheet can also have a
sheet descriptions:

..  figure:: /Images/Conference/FlexSheetHighlights.png
    :alt: The second sheet of the plugin settings
    :class: with-shadow

    The second sheet of the plugin settings

The plugin of the conference extension has a second sheet with a
description:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/FlexForms/ConferenceList.xml
    :caption: EXT:my_extension/Configuration/FlexForms/ConferenceList.xml
    :visible-lines: 1-7, 91-99, 133-136
    :emphasize-lines: 3, 94, 96-97

Notice how the data of the two sheets are separated.


..  _tca-example-flex-2:

A flex form field with two flex section containers
==================================================

..  figure:: /Images/Conference/FlexSheetHighlights.png
    :alt: The highlights of the plugin settings
    :class: with-shadow

    The highlights of the plugin settings

The highlights of the plugin are a section. An editor can add any number of
highlights, each with a title and a link:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/FlexForms/ConferenceList.xml
    :caption: EXT:my_extension/Configuration/FlexForms/ConferenceList.xml
    :visible-lines: 107-131
    :emphasize-lines: 110, 112

..  _columns-flex-example-rte:

Example: Rich Text Editor in FlexForms
======================================

Creating a RTE in FlexForms is done by enabling `enableRichtext` content to the
tag of the field:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/FlexForms/ConferenceList.xml
    :caption: EXT:my_extension/Configuration/FlexForms/ConferenceList.xml
    :visible-lines: 100-106
    :emphasize-lines: 104
