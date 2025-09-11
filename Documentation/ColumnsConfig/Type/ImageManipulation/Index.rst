..  include:: /Includes.rst.txt
..  _columns-imageManipulation:
..  _columns-imageManipulation-introduction:

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

..  _columns-imageManipulation-examples:

Example: A basic image manipulation field
=========================================

..  include:: /Images/Rst/ImageManipulationButton.rst.txt

..  literalinclude:: _Snippets/_basic.php

..  _columns-imageManipulation-properties:

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

..  literalinclude:: _Snippets/_defaultCropVariants.php

..  _columns-imageManipulation-crop-variants-multiple:

Define multiple crop variants
-----------------------------

It is possible to define multiple crop variants. The array key is used as identifier for the ratio and the label
is specified with the "title" and the actual (floating point) ratio with the "value" key. The value **must** be of
PHP type float, not only a string.

..  literalinclude:: _Snippets/_multipleCropVariants.php

..  _columns-imageManipulation-crop-variants-initial:

Define initial crop area
------------------------

It is also possible to define an initial crop area. If no initial crop area is defined, the default selected
crop area will cover the complete image. Crop areas are defined relatively with floating point numbers. The x and y
coordinates and width and height must be specified for that. The below example has an initial crop area in the size
the previous image cropper provided by default.

..  literalinclude:: _Snippets/_cropAreaCropVariants.php

..  _columns-imageManipulation-crop-variants-focusArea:

Add a focus area
----------------

Users can also select a focus area, when configured. The focus area is always **inside** the crop area and marks the
area in the image which must be visible for the image to transport its meaning. The selected area is persisted to
the database but will have no effect on image processing. The data points are however made available as data
attribute when using the `<f:image />` view helper.

The below example adds a focus area, which is initially one third of the size of the image and centered.

..  literalinclude:: _Snippets/_focusAreaCropVariants.php

..  _columns-imageManipulation-crop-variants-coverAreas:

Define cover areas
------------------

Very often images are used in a context, where they are overlaid with other DOM elements, like a headline. To give
editors a hint which area of the image is affected, when selecting a crop area, it is possible to define multiple
so called cover areas. These areas are shown inside the crop area. The focus area cannot intersect with any of
the cover areas.

..  literalinclude:: _Snippets/_coverAreaCropVariants.php

The above configuration examples are basically meant to add one single cropping configuration
to sys_file_reference, which will then apply in every record, which reference images.

..  _columns-imageManipulation-crop-variants-content-element:

Configuration per content element
---------------------------------

It is however also possible to provide a configuration per content element. If you for example want a different
cropping configuration for tt_content images, then you can add the following to your `image` field configuration of tt_content records:

..  literalinclude:: _Snippets/_overrideCropVariants.php

Please note, that you need to specify the target column name as array key. Most of the time this will be `crop`
as this is the default field name for image manipulation in `sys_file_reference`

..  _columns-imageManipulation-crop-variants-specific-content-element:

Define a cropping configuration for a specific content element
--------------------------------------------------------------

It is also possible to set the cropping configuration only for a specific tt_content element type by using the
`columnsOverrides` feature:

..  literalinclude:: _Snippets/_overrideCropVariants.php

Please note, that the array for ``overrideChildTca`` is merged with the child TCA, so are the crop variants that are defined
in the child TCA (most likely sys_file_reference). Because you cannot remove crop variants easily, it is possible to disable them
for certain field types by setting the array key for a crop variant ``disabled`` to the value ``true``

..  _columns-imageManipulation-crop-variants-allowedAspectRatios:

Disable an aspect ratio
-----------------------

Not only cropVariants but also aspect ratios can be disabled by adding a
"disabled" key to the array.

..  literalinclude:: _Snippets/_disabledAspectRatioCropVariant.php

This works for each field, that defines cropVariants for any
:sql:`sys_file_reference` usage.

..  _columns-imageManipulation-crop-variants-viewHelper:

Crop variants in ViewHelpers
----------------------------

To render crop variants, the variants can be specified as argument to the image ViewHelpers:

..  code-block:: html

    <f:image image="{data.image}" cropVariant="mobile" width="800" />
