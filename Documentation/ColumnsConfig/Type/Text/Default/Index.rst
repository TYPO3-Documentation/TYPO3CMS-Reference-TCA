..  include:: /Includes.rst.txt

..  _columns-text-renderType-default:

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

..  _tca_example_text_4:

Multiline plain text area
-------------------------

..  include:: /Images/Rst/Text4.rst.txt

..  include:: /CodeSnippets/Text4.rst.txt

..  _tca_example_rte_1:

Rich text editor field
----------------------

..  include:: /Images/Rst/Rte1.rst.txt

..  include:: /CodeSnippets/Rte1.rst.txt

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
