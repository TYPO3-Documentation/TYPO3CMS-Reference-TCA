.. include:: /Includes.rst.txt

.. _columns-input-renderType-colorpicker:
.. _columns-color:

=====
Color
=====

.. versionadded:: 12.0
   The TCA type :php:`color` has been introduced. It replaces the
   :php:`renderType=colorpicker` of TCA type :php:`input`.


The TCA type :php:`color` should be used to render a JavaScript based color-picker.

Examples
========

A simple color picker:

.. code-block:: php

    'a_color_field' => [
        'label' => 'Color field',
        'config' => [
            'type' => 'color',
        ]
    ]


Migration
=========

A complete migration from :php:`renderType=colorpicker` to :php:`type=color`
looks like the following:

.. code-block:: php

    // Before

    'a_color_field' => [
        'label' => 'Color field',
        'config' => [
            'type' => 'input',
            'renderType' => 'colorpicker',
            'required' => true,
            'size' => 20,
            'max' => 1024,
            'eval' => 'trim',
            'valuePicker' => [
                'items' => [
                    ['typo3 orange', '#FF8700'],
                ],
            ],
        ],
    ],

    // After

    'a_color_field' => [
        'label' => 'Color field',
        'config' => [
            'type' => 'color',
            'required' => true,
            'size' => 20,
            'valuePicker' => [
                'items' => [
                    ['typo3 orange', '#FF8700'],
                ],
            ],
        ]
    ]

An automatic TCA migration is performed on the fly, migrating all occurrences
to the new TCA type and triggering a PHP :php:`E_USER_DEPRECATED` error
where code adoption has to take place.

.. toctree::
   :titlesonly:

   Properties/Index
