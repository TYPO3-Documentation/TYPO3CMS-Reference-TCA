..  include:: /Includes.rst.txt

..  _columns-text-rendertype-default:

================
text (multiline)
================

This page describes the :ref:`text <columns-text>` type with no renderType (default).

The :ref:`according database field <t3coreapi:auto-generated-db-structure>`
is generated automatically.

`type='text'` without a given specific renderType either renders a simple
`<textarea>` or a :ref:`Rich Text field <rich-text-editor-examples>` if
:confval:`text-enableRichtext` is enabled in TCA and
:ref:`page TSconfig <t3tsref:pageTsRte>`.

..  contents:: Table of contents:
    :local:
    :depth: 1

..  _columns-text-examples:

Examples for multiline text fields
==================================

..  _tca-example-text-4:

Multiline plain text area
-------------------------

..  figure:: /Images/Conference/TextAbstract.png
    :alt: The abstract of a talk
    :class: with-shadow

    The abstract of a talk

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/225-tx_myextension_talk-abstract.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/225-tx_myextension_talk-abstract.php

..  _tca-example-rte-1:

Rich text editor field
----------------------

..  figure:: /Images/Conference/TextRichtext.png
    :alt: The description of a conference
    :class: with-shadow

    The description of a conference

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/130-tx_myextension_conference-description.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/130-tx_myextension_conference-description.php
    :emphasize-lines: 13

..  _columns-text-properties:
..  _columns-text-properties-default:

Properties of the TCA column type `text` with or without enabled rich text
==========================================================================

..  confval-menu::
    :name: text
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_*.rst.txt
        :show-buttons:
