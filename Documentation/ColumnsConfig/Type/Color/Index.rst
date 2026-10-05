..  include:: /Includes.rst.txt

..  _columns-input-rendertype-colorpicker:
..  _columns-color:

=====
Color
=====

..  versionadded:: 13.0
    When using the `color` type, TYPO3 takes care of
    :ref:`generating the according database field <t3coreapi:auto-generated-db-structure>`.
    A developer does not need to define this field in an extension's
    :file:`ext_tables.sql` file.

..  versionadded:: 13.0
    :ref:`Color palettes <t3tsref:pagecolorpalettes>` have been added.

The TCA type `color` can be used to render a JavaScript-based color picker.

The :ref:`according database field <t3coreapi:auto-generated-db-structure>`
is generated automatically.

:ref:`Color palettes <t3tsref:pagecolorpalettes>` can be defined via
:ref:`page TSconfig <t3tsref:setting-page-tsconfig>`. This way, for example,
colors defined in a corporate design can be selected with one click.

..  contents:: Table of contents:
    :depth: 1

..  _columns-color-example:

Example: Define a simple color picker in TCA
============================================

The color of a conference:

..  figure:: /Images/Conference/ColorField.png
    :alt: The color of a conference
    :class: with-shadow

    The color of a conference

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/150-tx_myextension_conference-color.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/150-tx_myextension_conference-color.php

..  _columns-color-properties:

Properties of the TCA column type `color`
=========================================

..  confval-menu::
    :name: color
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_*.rst.txt
        :show-buttons:
