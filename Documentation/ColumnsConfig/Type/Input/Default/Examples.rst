.. include:: /Includes.rst.txt
.. _columns-input-examples:

========
Examples
========


Simple input field
==================

.. figure:: ../Images/Styleguide1.png
    :alt: Simple input field (input_1)
    :class: with-shadow

    Simple input field (input_1)

.. code-block:: php

    'input_1' => [
        'label' => 'input_1',
        'config' => [
            'type' => 'input',
        ],
    ],

Input with placeholder and null handling
========================================

.. figure:: ../Images/Styleguide28Placeholder.png
    :alt: Input with placeholder and null handling (input_28)
    :class: with-shadow

    Input with placeholder and null handling (input_28)

.. code-block:: php

    'input_28' => [
        'label' => 'input_28 placeholder=__row|input_26, mode=useOrOverridePlaceholder, eval=null, default=null',
        'config' => [
            'type' => 'input',
            'placeholder' => '__row|input_26',
            'eval' => 'null',
            'default' => null,
            'mode' => 'useOrOverridePlaceholder',
        ],
    ],

Value slider
============

.. figure:: ../Images/Styleguide30Slider.png
    :alt: Value slider (input_30)
    :class: with-shadow

    Value slider (input_30)

.. code-block:: php

    'input_30' => [
        'label' => 'input_30 slider, step=10, width=200, eval=trim,int',
        'config' => [
            'type' => 'input',
            'size' => 10,
            'eval' => 'trim,int',
            'range' => [
                'lower' => -90,
                'upper' => 90,
            ],
            'default' => 0,
            'slider' => [
                'step' => 10,
                'width' => 200,
            ],
        ],
    ],

Value picker
============

.. figure:: ../Images/Styleguide33ValuePicker.png
    :alt: Value picker (input_33)
    :class: with-shadow

    Value picker (input_33)

.. code-block:: php

    'input_33' => [
        'label' => 'input_33 valuePicker',
        'config' => [
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'valuePicker' => [
                'items' => [
                    ['spring', 'Spring'],
                    ['summer', 'Summer'],
                    ['autumn', 'Autumn'],
                    ['winter', 'Winter'],
                ],
            ],
        ],
    ],

