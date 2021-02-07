.. include:: /Includes.rst.txt
.. _palettes-examples:

========
Examples
========

The TCA of the styleguide extension provides palettes with different properties.

.. include:: /Includes/Images/Styleguide/RstIncludes/Palette.rst.txt

Palettes get defined in the section :php:`palettes` of the tables TCA array.

The following TCA section specifies the different palettes.

.. include:: /Includes/Snippets/Styleguide/RstIncludes/Manual/Palettes.rst.txt

The palettes then get referenced in the :php:`types` section:

.. include:: /Includes/Snippets/Styleguide/RstIncludes/Manual/PalettesTypes.rst.txt



It is also possible to define the label of a palette directly in the palette
definition. Declaring the label in an 'palettes' array can reduce boilerplate
declarations if a palette is used over and over again in multiple types. If a
label is defined for a palette this way, it is always displayed. Setting a
specific label in the 'types' array for a palette overrides the default label
that was defined within the 'palettes' array. There is no way to unset a label
that is set within the 'palettes' array. It will always be displayed.

Example::

   'types' => [
      'myType' => [
         'showitem' => 'aField, --palette--;;aPalette, someOtherField',
      ],
   ],
   'palettes' => [
      'aPalette' => [
         'label' => 'LLL:EXT:myExt/Resources/Private/Language/locallang.xlf:aPaletteDescription',
         'showitem' => 'aFieldInAPalette, anotherFieldInPalette',
      ],
   ],
