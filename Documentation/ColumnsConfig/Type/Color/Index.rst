..  include:: /Includes.rst.txt

..  _columns-input-renderType-colorpicker:
..  _columns-color:

=====
Color
=====

..  versionadded:: 12.0
    The TCA type :php:`color` has been introduced. It replaces the
    :php:`renderType=colorpicker` of TCA type :php:`input`. See
    :ref:`columns-color-migration`.


The TCA type :php:`color` can be used to render a JavaScript-based color picker.

The :ref:`according database field <t3coreapi:auto-generated-db-structure>`
is generated automatically.

:ref:`Color palettes <t3tsref:pagecolorpalettes>` can be defined via
:ref:`page TSconfig <t3tsref:setting-page-tsconfig>`. This way, for example,
colors defined in a corporate design can be selected by a simple click.

..  contents:: Table of contents:
    :depth: 1

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

..  _columns-color-migration:

Migration: from renderType `colorpicker` to TCA type color
==========================================================

A complete migration from :php:`renderType=colorpicker` to :php:`type=color`
looks like the following:

..  literalinclude:: _Snippets/_migration.diff

An automatic TCA migration is performed on the fly, migrating all occurrences
to the new TCA type and triggering a PHP :php:`E_USER_DEPRECATED` error
where code adoption has to take place.
