..  include:: /Includes.rst.txt
..  _columns-text-rendertype-codeeditor:
..  _columns-text-rendertype-t3editor:

==========
codeEditor
==========

This page describes the :ref:`text <columns-text>` type with the
`renderType='codeEditor'`.

The `renderType='codeEditor'` triggers a code highlighter.

The :ref:`according database field <t3coreapi:auto-generated-db-structure>`
is generated automatically.

The code editor provides an enhanced textarea for
:ref:`TypoScript <t3tsref:start>` input, with not only syntax highlighting, but
also autocomplete suggestions. Beyond that the code editor makes it possible to
add syntax highlighting to textarea fields for several languages.

..  contents:: Table of contents:
    :local:
    :depth: 1

..  _tca-example-codeeditor-1:
..  _tca-example-t3editor-1:

Example: Code highlighting with code editor
===========================================

..  figure:: /Images/Conference/TextCodeEditor.png
    :alt: The embed code of a conference in the code editor
    :class: with-shadow

    The embed code of a conference in the code editor

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/132-tx_myextension_conference-embed_code.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/132-tx_myextension_conference-embed_code.php
    :emphasize-lines: 12

..  _columns-text-rendertype-codeeditor-properties:

Properties of the TCA column type `text`, render type `codeEditor`
==================================================================

..  confval-menu::
    :name: codeEditor
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_*.rst.txt
        :show-buttons:
