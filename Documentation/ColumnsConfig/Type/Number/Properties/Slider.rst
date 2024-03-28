..  include:: /Includes.rst.txt
..  _columns-input-properties-slider:
..  _columns-number-properties-slider:

======
slider
======

..  confval:: slider
    :name: number-slider
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: array
    :Scope: Display

    Render a value slider next to the field.

    It is advised to also define a :ref:`range <columns-number-properties-range>`
    property, otherwise the slider will go from 0 to 10000. Note the range can
    be negative if needed. Available keys:

    step (integer / float)
        Set the step size the slider will use. For floating point values this can itself be a floating point value.

    width (integer, pixels)
        Define the width of the slider.

Example
=======

Integer slider between 0 and 100
---------------------------------

..  code-block:: php

    'aField' => [
        'label' => 'percent',
        'config' => [
            'type' => 'number',
            'range' => [
                'lower' => 0,
                'upper' => 100
            ],
            'slider' => [
                'step' => 1
            ]
        ],
    ],

Integer slider between 0 and 10 000
-----------------------------------

..  code-block:: php

    'aField' => [
        'label' => 'percent',
        'config' => [
            'type' => 'number',
            'slider' => [
                'step' => 1
            ]
        ],
    ],

Decimal slider between 0 and 1
------------------------------

..  code-block:: php

    'aField' => [
        'label' => 'aLabel',
        'config' => [
            'type' => 'number',
            'format' => 'decimal',
            'range' => [
                'lower' => 0,
                'upper' => 1
            ],
            'slider' => [
                'step' => 0.1
            ]
        ],
    ],
