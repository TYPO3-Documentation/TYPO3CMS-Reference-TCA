.. include:: /Includes.rst.txt
.. _palettes-properties-label:

=====
label
=====

.. confval:: label

   :Path: $GLOBALS['TCA'][$table]['palettes']
   :type: string

   Allows to display a localized label text as a dedicated entry into the palette declaration, instead as a part of
   the types configuration.
   By using the explicit label entry, code duplication upon reusing existing palettes can be reduced. The label is
   always shown with the palette, no matter where it is referenced.

   Before::

         'types' => [
            'myType' => [
               'showitem' => 'aField, --palette--;LLL:EXT:myExt/Resources/Private/Language/locallang.xlf:aPaletteDescription;aPalette, someOtherField',
            ],
         ],
         'palettes' => [
            'aPalette' => [
               'showitem' => 'aFieldInAPalette, anotherFieldInPalette',
            ],
         ],

   After::

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
