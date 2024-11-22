..  include:: /Includes.rst.txt

..  _columns-input-renderType-colorpicker:
..  _columns-color:

=====
Color
=====

..  versionadded:: 13.0
    When using the `color` type, TYPO3 takes care of
    :ref:`generating the according database field <t3coreapi:auto-generated-db-structure>`.
    A developer does not need to define this field in an extension's
    :file:`ext_tables.sql` file.

The TCA type :php:`color` should be used to render a JavaScript-based color picker.
The :ref:`according database field <t3coreapi:auto-generated-db-structure>`
is generated automatically.

..  versionadded:: 13.0
    :ref:`Color palettes <t3tsref:pagecolorpalettes>` have been added.

:ref:`Color palettes <t3tsref:pagecolorpalettes>` can be defined via
:ref:`page TSconfig <t3tsref:setting-page-tsconfig>`. This way, for example,
colors defined in a corporate design can be selected by a simple click.

..  contents::
    :caption: Table of contents

..  _columns-color-example:

Example: Define a simple color picker in TCA
============================================

A simple color picker:

..  code-block:: php

    $aColorField' = [
        'label' => 'Color field',
        'config' => [
            'type' => 'color',
        ]
    ];

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
