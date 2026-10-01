..  include:: /Includes.rst.txt
..  _columns-imagemanipulation:
..  _columns-imagemanipulation-introduction:

==================
Image manipulation
==================

..  versionadded:: 13.0
    When using the `imageManipulation` type, TYPO3 takes care of
    :ref:`generating the according database field <t3coreapi:auto-generated-db-structure>`.
    A developer does not need to define this field in an extension's
    :file:`ext_tables.sql` file.

The type "imageManipulation" generates a button showing an image cropper in the backend for image files.
It is typically only used in FAL relations. The crop information is stored as an JSON array into the field.

The :ref:`according database field <t3coreapi:auto-generated-db-structure>`
is generated automatically.

..  contents:: Table of contents:
    :local:
    :depth: 2

..  _columns-imagemanipulation-examples:

Example: A basic image manipulation field
=========================================

..  include:: /Images/Rst/ImageManipulationButton.rst.txt

..  literalinclude:: /ColumnsConfig/Type/ImageManipulation/_Snippets/_ImageManipulation.php
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_mytable.php
    :visible-lines: 9-15
    :emphasize-lines: 12

..  _columns-imagemanipulation-properties:

Properties of the TCA column type `imageManipulation`
=====================================================

..  confval-menu::
    :name: imageManipulation
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_*.rst.txt
        :show-buttons:

..  _columns-imagemanipulation-crop-variant:

Image manipulation: Crop variants
=================================

If no :confval:`imageManipulation-cropVariants` are configured, the following
default configuration is used:

..  code-block:: php
    :caption: EXT:backend/Classes/Form/Element/ImageManipulationElement.php (excerpt)

    'cropVariants' => [
      'default' => [
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.crop_variant.default',
        'allowedAspectRatios' => [
          '16:9' => [
            'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.16_9',
            'value' => 16 / 9,
          ],
          '3:2' => [
            'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.3_2',
            'value' => 3 / 2,
          ],
          '4:3' => [
            'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.4_3',
            'value' => 4 / 3,
          ],
          '1:1' => [
            'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.1_1',
            'value' => 1.0,
          ],
          'NaN' => [
            'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.free',
            'value' => 0.0,
          ],
        ],
        'selectedRatio' => 'NaN',
        'cropArea' => [
          'x' => 0.0,
          'y' => 0.0,
          'width' => 1.0,
          'height' => 1.0,
        ],
      ],
    ],

..  _columns-imagemanipulation-crop-variants-multiple:

Define multiple crop variants
-----------------------------

It is possible to define multiple crop variants. The array key is used as identifier for the ratio and the label
is specified with the "title" and the actual (floating point) ratio with the "value" key. The value **must** be of
PHP type float, not only a string.

..  literalinclude:: /ColumnsConfig/Type/ImageManipulation/_Snippets/_ImageManipulation.php
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_mytable.php
    :visible-lines: 73-106
    :emphasize-lines: 77

..  _columns-imagemanipulation-crop-variants-initial:

Define initial crop area
------------------------

It is also possible to define an initial crop area. If no initial crop area is defined, the default selected
crop area will cover the complete image. Crop areas are defined relatively with floating point numbers. The x and y
coordinates and width and height must be specified for that. The below example has an initial crop area in the size
the previous image cropper provided by default.

..  literalinclude:: /ColumnsConfig/Type/ImageManipulation/_Snippets/_ImageManipulation.php
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_mytable.php
    :visible-lines: 17-33
    :emphasize-lines: 24

..  _columns-imagemanipulation-crop-variants-focusarea:

Add a focus area
----------------

Users can also select a focus area, when configured. The focus area is always **inside** the crop area and marks the
area in the image which must be visible for the image to transport its meaning. The selected area is persisted to
the database but will have no effect on image processing. The data points are however made available as data
attribute when using the `<f:image />` view helper.

The below example adds a focus area, which is initially one third of the size of the image and centered.

..  literalinclude:: /ColumnsConfig/Type/ImageManipulation/_Snippets/_ImageManipulation.php
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_mytable.php
    :visible-lines: 35-51
    :emphasize-lines: 42

..  _columns-imagemanipulation-crop-variants-coverareas:

Define cover areas
------------------

Very often images are used in a context, where they are overlaid with other DOM elements, like a headline. To give
editors a hint which area of the image is affected, when selecting a crop area, it is possible to define multiple
so called cover areas. These areas are shown inside the crop area. The focus area cannot intersect with any of
the cover areas.

..  literalinclude:: /ColumnsConfig/Type/ImageManipulation/_Snippets/_ImageManipulation.php
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_mytable.php
    :visible-lines: 53-71
    :emphasize-lines: 60

The above configuration examples are basically meant to add one single cropping configuration
to sys_file_reference, which will then apply in every record, which reference images.

..  _columns-imagemanipulation-crop-variants-content-element:

Configuration per content element
---------------------------------

It is however also possible to provide a configuration per content element, e.g. for tt_content images:

..  literalinclude:: _Snippets/_overrideCropVariants.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/tt_content.php

..  _columns-imagemanipulation-crop-variants-specific-content-element:

Define a cropping configuration for a specific content element
--------------------------------------------------------------

It is also possible to set the cropping configuration only for a specific content element type:

..  literalinclude:: _Snippets/_overrideCropVariantsCType.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/tt_content.php

..  _columns-imagemanipulation-crop-variants-disable:

Disable a crop variant
----------------------

Please note, that while the array for ``overrideChildTca`` is merged with the child TCA, the crop variants replace those
defined in the child TCA (most likely sys_file_reference), as long as the default configuration is in use.
If however the crop variants have already been overriden in the child TCA, the crop variants are merged.

Because you cannot remove crop variants easily, it is possible to disable them for certain field types by setting the
array key for a crop variant ``disabled`` to the value ``true``

..  _columns-imagemanipulation-crop-variants-allowedaspectratios:

Disable an aspect ratio
-----------------------

Not only cropVariants but also aspect ratios can be disabled by adding a ``disabled`` key to the array.

..  literalinclude:: _Snippets/_disabledAspectRatioCropVariant.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/tt_content.php

..  _columns-imagemanipulation-crop-variants-viewhelper:

Crop variants in ViewHelpers
----------------------------

To render crop variants, the variants can be specified as argument to the image ViewHelpers:

..  code-block:: html

    <f:image image="{data.image}" cropVariant="mobile" width="800" />
