:navigation-title: Examples
..  include:: /Includes.rst.txt
..  _columns-category-examples:

====================================
Examples: TCA column type `category`
====================================

..  _columns-category-simple-example:

Simple category field
=====================

In the following example a category tree is displayed and multiple categories
can be selected.

..  figure:: /Images/Conference/CategoryConference.png
    :alt: The categories of a conference
    :class: with-shadow

    The categories of a conference

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/160-tx_myextension_conference-categories.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/160-tx_myextension_conference-categories.php
    :emphasize-lines: 11

The relationship gets stored in the intermediate table
`sys_category_record_mm`. Category counts are only stored on the
local side.

..  _columns-category-one-to-one-example:

One to one relation category field
==================================

In the following example a category tree is displayed, but only one
category can be selected.

..  figure:: /Images/Conference/CategoryTopic.png
    :alt: The topic of a talk
    :class: with-shadow

    The topic of a talk

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/285-tx_myextension_talk-topic.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/285-tx_myextension_talk-topic.php
    :emphasize-lines: 12

..  _columns-category-flexform-example:

Category field used in FlexForm
===============================

It is possible to use the type `category` in FlexForm data structures.
Due to some limitations in FlexForm, the `manyToMany` relationship is not
supported. Therefore, the default relationship - used if none is defined -
is `oneToMany`.

The plugin of the conference extension uses the "oneToMany" use case. It
lists only the conferences of the selected categories:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/FlexForms/ConferenceList.xml
    :caption: EXT:my_extension/Configuration/FlexForms/ConferenceList.xml
    :visible-lines: 1-7, 38-43, 112-114, 156-157
    :emphasize-lines: 41
