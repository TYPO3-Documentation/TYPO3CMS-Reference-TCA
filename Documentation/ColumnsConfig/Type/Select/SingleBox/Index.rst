..  include:: /Includes.rst.txt
..  _columns-select-rendertype-selectsinglebox:

========================================
Select multiple values (selectSingleBox)
========================================

Renders a select field to select multiple entries from a given list.

This page describes the :ref:`select <columns-select>` type with
renderType='selectSingleBox'.

The :ref:`according database field <t3coreapi:auto-generated-db-structure>`
is generated automatically.

..  note::

    The name is misleading. This is a renderType which allows you to select
    **multiple** elements!

..  contents:: Table of contents:
    :local:
    :depth: 1

..  _tca-example-select-singlebox-1:

Example: Select multiple values from a box
==========================================

..  figure:: /Images/Conference/SelectSingleBox.png
    :alt: The audience of a talk
    :class: with-shadow

    The audience of a talk

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/265-tx_myextension_talk-audience.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/265-tx_myextension_talk-audience.php


..  _columns-select-selectsinglebox-properties:

Properties of the TCA column type `select` with renderType `selectSingleBox`
============================================================================

..  confval-menu::
    :name: selectSingleBox
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_*.rst.txt
        :show-buttons:
