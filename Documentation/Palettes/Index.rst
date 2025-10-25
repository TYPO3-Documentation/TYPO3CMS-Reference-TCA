..  include:: /Includes.rst.txt

..  _palettes:

==========================
Grouping fields (palettes)
==========================

..  versionchanged:: 14.0
    TYPO3 Core TCA configurations have been updated to use short form
    translation reference formats (for example `core.form.tabs:*`) instead of
    the full `LLL:EXT:` path format in `showitem` strings.

    Custom extensions that programmatically manipulate TCA :php:`showitem` strings
    from core tables and expect the full `LLL:EXT:` path format will break.

    See also: `Breaking: #107789 - Core TCA showitem strings use short form references <https://docs.typo3.org/permalink/changelog:breaking-107789-1729603200>`_.

If editing records in the backend, all fields are usually displayed after each
other in single rows. Palettes provide a way to display multiple fields next
to each other if the browser window size allows this. They can be used to
group multiple related fields in one combined section.

Each palette has a name and can be referenced by name from within the
:ref:`['types'] section <types>`.

To modify existing palettes you can use the utility functions
:php:`\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette` and
:php:`ExtensionManagementUtility::addFieldsToAllPalettesOfField`.


..  contents:: Table of Contents

..  _palettes-examples:

Examples
========

The TCA of the styleguide extension provides palettes with different properties.

..  include:: /Images/Rst/Palette.rst.txt

Palettes get defined in the section :php:`palettes` of the tables TCA array.

The following TCA section specifies the different palettes.

..  include:: /CodeSnippets/Palettes.rst.txt

The palettes then get referenced in the :php:`types` section:

..  include:: /CodeSnippets/PalettesTypes.rst.txt

It is also possible to define the label of a palette directly in the palette
definition. Declaring the label in an 'palettes' array can reduce boilerplate
declarations if a palette is used over and over again in multiple types. If a
label is defined for a palette this way, it is always displayed. Setting a
specific label in the 'types' array for a palette overrides the default label
that was defined within the 'palettes' array. There is no way to unset a label
that is set within the 'palettes' array. It will always be displayed.

Example:

..  code-block:: php
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_table.php (Excerpt)

    'types' => [
      'myType' => [
         'showitem' => 'aField, --palette--;;aPalette, someOtherField',
      ],
    ],
    'palettes' => [
      'aPalette' => [
         'label' => 'LLL:my_extension.db:aPaletteDescription',
         'showitem' => 'aFieldInAPalette, anotherFieldInPalette',
      ],
    ],

..  _palettes-properties:

Properties of `palettes` section of TCA
=======================================

..  confval-menu::
    :name: palettes
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_*.rst.txt
        :show-buttons:
