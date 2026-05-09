..  include:: /Includes.rst.txt
..  _columns-text-renderType-codeEditor:
..  _columns-text-renderType-t3editor:

==========
codeEditor
==========

This page describes the :ref:`text <columns-text>` type with the
:php:`renderType='codeEditor'`.

The :php:`renderType='codeEditor'` triggers a code highlighter.

The :ref:`according database field <t3coreapi:auto-generated-db-structure>`
is generated automatically.

The code editor provides an enhanced textarea for
:ref:`TypoScript <t3tsref:start>` input, with not only syntax highlighting, but
also autocomplete suggestions. Beyond that the code editor makes it possible to
add syntax highlighting to textarea fields for several languages.

..  contents:: Table of contents:
    :local:
    :depth: 1

..  _tca_example_codeEditor_1:
..  _tca_example_t3editor_1:

Example: Code highlighting with code editor
===========================================

..  figure:: /Images/ManualScreenshots/Codeeditor.png
    :alt: Code editor with highlighting HTML
    :class: with-shadow

    Code editor with highlighting HTML

..  literalinclude:: _Snippets/_Format.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/tx_myextension_domain_model_mytable.php

..  _columns-text-renderType-codeEditor-properties:

Properties of the TCA column type `text`, render type `codeEditor`
==================================================================

..  confval-menu::
    :name: codeEditor
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_*.rst.txt
        :show-buttons:
