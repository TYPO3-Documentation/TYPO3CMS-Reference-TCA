:navigation-title: Examples

..  include:: /Includes.rst.txt

..  _columns-select-rendertype-selectmultiplesidebyside-examples:

========================================================
Advanced examples for multiple side-by-side select boxes
========================================================

See also: `tca_example_select_multiplesidebyside_1`.

..  _tca-example-select-multiplesidebyside-5:

Side-by-side view with filter
=============================

..  figure:: /Images/Conference/SelectMultipleSideBySide.png
    :alt: The equipment of a talk with its filter
    :class: with-shadow

    The equipment of a talk with its filter

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/270-tx_myextension_talk-equipment.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/270-tx_myextension_talk-equipment.php
    :emphasize-lines: 24

..  _tca-example-select-multiplesidebyside-6:

Side-by-side select with field controls
=======================================

..  figure:: /Images/Conference/SelectMultipleSideBySideFieldControl.png
    :alt: The speakers of a conference with field controls
    :class: with-shadow

    The speakers of a conference with field controls

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/125-tx_myextension_conference-speakers.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/125-tx_myextension_conference-speakers.php
    :emphasize-lines: 19

..  _tca-example-select-multiplesidebyside-8:

Using a MM table
================

..  figure:: /Images/Conference/SelectMultipleSideBySideFieldControl.png
    :alt: The speakers of a conference
    :class: with-shadow

    The speakers of a conference

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/125-tx_myextension_conference-speakers.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/125-tx_myextension_conference-speakers.php
    :emphasize-lines: 14
