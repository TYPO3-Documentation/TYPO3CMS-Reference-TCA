..  include:: /Includes.rst.txt
..  _columns-select-rendertype-selectsingle:

============
selectSingle
============

Single select fields display a select field from which only one value can be
chosen.

The :ref:`according database field <t3coreapi:auto-generated-db-structure>`
is generated automatically.

The renderType selectSingle creates a drop-down box with items to select a
single value. Only if :confval:`select-single-size` is set to a
value greater than one, a box is rendered containing all selectable elements
from which one can be chosen.

..  contents:: Table of contents:
    :local:
    :depth: 1

..  _columns-select-rendertype-selectsingle-examples:

Examples for select fields with renderType `selectSingle`
=========================================================

..  _tca-example-select-single-3:

Simple select drop down with static and database values
-------------------------------------------------------

..  figure:: /Images/Conference/CtrlSeliconField.png
    :alt: The location of a conference
    :class: with-shadow

    The location of a conference

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/110-tx_myextension_conference-location.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/110-tx_myextension_conference-location.php


..  _tca-example-select-single-12:

Select foreign rows with icons
------------------------------

..  figure:: /Images/Conference/CtrlSeliconField.png
    :alt: The location of a conference, with the images of the locations
    :class: with-shadow

    The location of a conference, with the images of the locations

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/110-tx_myextension_conference-location.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/110-tx_myextension_conference-location.php
    :emphasize-lines: 18


..  _tca-example-select-single-10:

Select a single value from a list of elements
---------------------------------------------


..  code-block:: php

    'size' => 6,


..  _columns-select-properties:

Properties of the TCA column type `select` with renderType `selectSingle`
=========================================================================

..  confval-menu::
    :name: selectSingle
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_*.rst.txt
        :show-buttons:
