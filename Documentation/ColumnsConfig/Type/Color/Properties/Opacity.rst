..  include:: /Includes.rst.txt
..  _columns-color-properties-opacity:

=======
Opacity
=======

..  confval:: opacity
    :name: color-opacity
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: bool
    :default: false

    ..  versionadded:: 13.3

    If enabled, editors can select not only a color but also adjust its opacity
    (how transparent the color should be) in a color element.

    Colors with an opacity are saved with the
    the `RRGGBBAA` color notation.

..  _columns-color-properties-opacity-example:

Example: Allow opaque colors
============================

..  figure:: /Images/ManualScreenshots/ColorOpacity.png
    :alt: A color picker with adjustable opacity

    A color picker with adjustable opacity

..  code-block:: php

    $myColorField =  [
        'label' => 'My Color',
        'config' => [
            'type' => 'color',
            'opacity' => true,
        ],
    ];
