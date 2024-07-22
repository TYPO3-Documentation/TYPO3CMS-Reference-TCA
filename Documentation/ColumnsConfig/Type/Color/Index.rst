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


The TCA type :php:`color` should be used to render a JavaScript-based color picker.

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
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_AllowLanguageSynchronization.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Default.rst.txt
        :show-buttons:

    ..  include:: _Properties/_FieldControl.rst.txt
        :show-buttons:

    ..  include:: _Properties/_FieldInformation.rst.txt
        :show-buttons:

    ..  include:: _Properties/_FieldWizard.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Mode.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Nullable.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Placeholder.rst.txt
        :show-buttons:

    ..  include:: _Properties/_ReadOnly.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Required.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Size.rst.txt
        :show-buttons:

    ..  include:: _Properties/_ValuePicker.rst.txt
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
