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
    :ref:`Color palettes <t3tsconfig:pagecolorpalettes>` have been added.

:ref:`Color palettes <t3tsconfig:pagecolorpalettes>` can be defined via
:ref:`page TSconfig <t3tsconfig:setting-page-tsconfig>`. This way, for example,
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

    ..  include:: _Properties/_Opacity.rst.txt
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
