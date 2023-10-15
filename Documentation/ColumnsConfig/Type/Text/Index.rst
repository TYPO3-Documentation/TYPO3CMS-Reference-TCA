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

..  contents:: Table of contents:
    :local:
    :depth: 1

..  _columns-text-introduction:

Introduction
============

The `text` type is for multi-line text input, in the database
:file:`ext_tables.sql` files it is typically set to a :sql:`TEXT` column type.
In the backend, it is rendered in various shapes: It can be rendered as a simple
:html:`<textarea>`, as a :ref:`rich text editor (RTE) <t3coreapi:rte>`, as a
code block with syntax highlighting, and others.

The following :php:`renderTypes` are available:

*   :ref:`default <columns-text-renderType-default>`: A simple text area
    or a rich text field is rendered, if no renderType is specified.
*   :ref:`belayoutwizard <columns-text-renderType-belayoutwizard>`: The backend
    layout wizard is displayed in order to edit records of table
    :sql:`backend_layout` in the backend.
*   :ref:`t3editor <columns-text-renderType-t3editor>`: The
    :php:`renderType = 't3editor'` triggers a code highlighter, if extension
    :doc:`t3editor <ext_t3editor:Index>` is loaded, otherwise falls back to
    the "default" renderType.
*   :ref:`textTable <columns-text-renderType-textTable>`: The
    :php:`renderType = 'textTable'` triggers a view to manage frontend table
    display in the backend. It is used for the "table" :sql:`tt_content` content
    element.


Simple text area
================

A simple text area or a rich text field is rendered, if no renderType is
specified.

..  include:: /Images/Rst/Text4.rst.txt

See :ref:`render type "default" <columns-text-renderType-default>`
on how to configure such an editor.

..  include:: /CodeSnippets/Text4.rst.txt

Rich text editor field
======================

..  include:: /Images/Rst/Rte1.rst.txt

See :ref:`property "enableRichtext" <columns-text-properties-enableRichtext>`
on how to configure such an editor.

..  include:: /CodeSnippets/Rte1.rst.txt


Code highlight editor
=====================

..  todo: include screenshot

See :ref:`t3editor <columns-text-renderType-t3editor>` on how to configure such
an editor.

..  code-block:: php

    [
        // ...
        'type' => 'text',
        'renderType' => 't3editor',
        // ...
    ]

Backend layout editor
=====================

The backend layout wizard is displayed in order to edit records of table
:sql:`backend_layout` in the backend.

..  include:: /Images/Rst/Text20.rst.txt

See :ref:`render type belayoutwizard <columns-text-renderType-belayoutwizard>`
on how to configure such an editor.

..  include:: /CodeSnippets/Text20.rst.txt


Text field with renderType textTable
====================================

..  include:: /Images/Rst/Text17.rst.txt

See :ref:`render type textTable <columns-text-renderType-textTable>`
on how to configure such an editor.

..  include:: /CodeSnippets/Text17.rst.txt

..  toctree::
    :hidden:

    Properties/Index
    Default/Index
    BeLayoutWizard/Index
    T3Editor/Index
    TextTable/Index
