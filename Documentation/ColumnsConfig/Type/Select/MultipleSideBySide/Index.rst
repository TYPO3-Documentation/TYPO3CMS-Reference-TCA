..  include:: /Includes.rst.txt

..  _columns-select-rendertype-selectmultiplesidebyside:

========================
selectMultipleSideBySide
========================

This page describes the :ref:`select <columns-select>` type with
:php:`'renderType' => 'selectMultipleSideBySide'`.

The :ref:`according database field <t3coreapi:auto-generated-db-structure>`
is generated automatically.

It displays two select fields. The items can be selected from the right field.
All selected items are displayed in the left field.

..  contents:: Table of contents:
    :local:
    :depth: 1

..  toctree::
    :titlesonly:

    Examples

..  _tca-example-select-multiplesidebyside-1:

Example: Basic side-by-side select field
========================================

..  figure:: /Images/Conference/SelectMultipleSideBySide.png
    :alt: The equipment of a talk
    :class: with-shadow

    The equipment of a talk

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/270-tx_myextension_talk-equipment.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/270-tx_myextension_talk-equipment.php

For more examples see also :ref:`the advanced examples <columns-select-rendertype-selectmultiplesidebyside-examples>`.

..  _columns-select-multiplesidebyside-properties:

Properties of the TCA column type `select` with renderType `selectMultipleSideBySide`
=====================================================================================

..  confval-menu::
    :name: selectMultipleSideBySide
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_*.rst.txt
        :show-buttons:
