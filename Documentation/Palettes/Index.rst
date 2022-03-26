.. include:: /Includes.rst.txt

.. _palettes:

============
['palettes']
============


Introduction
------------

If editing records in the backend, all fields are usually displayed after each other in single rows.
Palettes provide a way to display multiple fields next to each other if the browser window size allows this.
They can be used to group multiple related fields in one combined section.

Each palette has a name and can be referenced by name from within the :ref:`['types'] section <types>`.


Examples
--------

TCA of table `pages` specifies a series of palettes, let's have a closer look at one of them:

.. code-block:: php

    'palettes' => [
        'caching' => [
            'showitem' => '
                cache_timeout;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout_formlabel,
                cache_tags,
                no_cache;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.no_cache_formlabel
            ',
        ],
        ...
    ],

This specifies the palette `caching`. It is then referenced in the `types` section for "normal" tables on tab "Behaviour":

.. code-block:: php

    'types' => [
        '1' => [
            'showitem' => '
                ...
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.behaviour,
                    ...
                    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.caching;caching,
                    ...
                ...
            ',
        ],
        ...
    ],

.. figure:: ../Images/PalettesPagesCaching.png
    :alt: Caching palette in pages
    :class: with-shadow

    Caching palette in pages

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


.. _palettes-properties:

.. _palettes-properties-ishiddenpalette:
.. include:: PalettesIsHiddenPalette.rst.txt

.. _palettes-properties-label:
.. include:: PalettesLabel.rst.txt

.. _palettes-properties-showitem:
.. _palettes-linebreaks:
.. _palettes-linebreaks-examples:
.. include:: PalettesShowitem.rst.txt

