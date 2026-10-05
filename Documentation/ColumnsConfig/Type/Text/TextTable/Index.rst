..  include:: /Includes.rst.txt
..  _columns-text-rendertype-texttable:

=========
textTable
=========

This page describes the :ref:`text <columns-text>` type with the
`renderType='textTable'`.

The :ref:`according database field <t3coreapi:auto-generated-db-structure>`
is generated automatically.

The textTable render type triggers a view called "table wizard" to
manage the frontend table display in the backend. It is used for the "Table"
tt_content content element.

..  contents:: Table of contents:
    :local:
    :depth: 1

..  _tca-example-text-17:

Example: Text field with renderType `textTable`
===============================================

..  figure:: /Images/Conference/TextTable.png
    :alt: The ticket prices of a conference
    :class: with-shadow

    The ticket prices of a conference

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/133-tx_myextension_conference-prices.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/133-tx_myextension_conference-prices.php
    :emphasize-lines: 12

..  _columns-text-texttable-codeeditor-properties:

Properties of the TCA column type `text`, render type `textTable`
==================================================================

..  confval-menu::
    :name: textTable
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_*.rst.txt
        :show-buttons:
