..  include:: /Includes.rst.txt

..  _columns-text:

================
Text areas & RTE
================

..  versionadded:: 13.0
    When using the `text` type, TYPO3 takes care of
    :ref:`generating the according database field <t3coreapi:auto-generated-db-structure>`.
    A developer does not need to define this field in an extension's
    :file:`ext_tables.sql` file.

The :ref:`according database fields <t3coreapi:auto-generated-db-structure>`
for all render types are generated automatically.

..  contents:: Table of contents:
    :local:
    :depth: 1

..  toctree::
    :hidden:

    Default/Index
    RichTextEditor
    BeLayoutWizard/Index
    T3Editor/Index
    TextTable/Index

..  _columns-text-introduction:

Introduction
============

The `text` type is for multi-line text input, in the database
:file:`ext_tables.sql` files it is typically set to a :sql:`TEXT` column type.
In the backend, it is rendered in various shapes: It can be rendered as a simple
:html:`<textarea>`, as a :ref:`rich text editor (RTE) <t3coreapi:rte>`, as a
code block with syntax highlighting, and others.

The following `renderTypes` are available:

*   :ref:`default <columns-text-rendertype-default>`: A simple text area
    or a rich text field is rendered, if no renderType is specified.
*   :ref:`belayoutwizard <columns-text-rendertype-belayoutwizard>`: The backend
    layout wizard is displayed in order to edit records of table
    `backend_layout` in the backend.
*   :ref:`codeEditor <columns-text-rendertype-codeeditor>`: This render type
    triggers a code highlighter.

    ..  versionchanged:: 13.0
        In previous TYPO3 versions, the code editor was available via the system
        extension "t3editor". The functionality was moved into the system
        extension "backend". The render type `t3editor` was renamed to
        `codeEditor`. A TCA migration from the old value to the new one is
        in place.

*   :ref:`textTable <columns-text-rendertype-texttable>`: The
    :php:`renderType = 'textTable'` triggers a view to manage frontend table
    display in the backend. It is used for the "table" `tt_content` content
    element.


..  _columns-text-simple-text-area:

Simple text area
================

A simple text area or a rich text field is rendered, if no renderType is
specified.

..  figure:: /Images/Conference/TextAbstract.png
    :alt: The abstract of a talk
    :class: with-shadow

    The abstract of a talk

See :ref:`render type "default" <columns-text-rendertype-default>`
on how to configure such an editor.

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/225-tx_myextension_talk-abstract.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/225-tx_myextension_talk-abstract.php

..  _columns-text-rich-text-editor:

Rich text editor field
======================

..  figure:: /Images/Conference/TextRichtext.png
    :alt: The description of a conference
    :class: with-shadow

    The description of a conference

See :ref:`property "enableRichtext" <columns-text-properties-enablerichtext>`
on how to configure such an editor.

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/130-tx_myextension_conference-description.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/130-tx_myextension_conference-description.php
    :emphasize-lines: 13


..  _columns-text-code-highlight-editor:

Code highlight editor
=====================

..  figure:: /Images/Conference/TextCodeEditor.png
    :alt: The embed code of a conference in the code editor
    :class: with-shadow

    The embed code of a conference in the code editor

See :ref:`codeEditor <columns-text-rendertype-codeeditor>` on how to configure
such an editor.

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/132-tx_myextension_conference-embed_code.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/132-tx_myextension_conference-embed_code.php
    :emphasize-lines: 12

..  _columns-text-backend-layout-editor:

Backend layout editor
=====================

The backend layout wizard is displayed in order to edit records of table
`backend_layout` in the backend.

..  figure:: /Images/Conference/TextBackendLayoutWizard.png
    :alt: The backend layout wizard
    :class: with-shadow

    The backend layout wizard

See :ref:`render type belayoutwizard <columns-text-rendertype-belayoutwizard>`
on how to configure such an editor.

..  literalinclude:: /ColumnsConfig/Type/Text/_Snippets/_backend_layout.php
    :caption: EXT:frontend/Configuration/TCA/backend_layout.php
    :visible-lines: 35-41
    :emphasize-lines: 39

..  _columns-text-text-field-rendertype:

Text field with renderType textTable
====================================

..  figure:: /Images/Conference/TextTable.png
    :alt: The ticket prices of a conference
    :class: with-shadow

    The ticket prices of a conference

See :ref:`render type textTable <columns-text-rendertype-texttable>`
on how to configure such an editor.

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/133-tx_myextension_conference-prices.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/133-tx_myextension_conference-prices.php
    :emphasize-lines: 12
