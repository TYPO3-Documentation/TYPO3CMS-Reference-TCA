..  include:: /Includes.rst.txt
..  _columns-input-properties-valuePicker:

===========
valuePicker
===========

..  confval:: valuePicker
    :name: input-valuePicker
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: array
    :Scope: Display
    :RenderTypes: default, colorpicker, inputLink

    Renders a select box with static values next to the input field. When a value is selected in the box,
    the value is transferred to the field. Keys:

    mode (keyword)
        blank (or not set)
            The selected value substitutes the value in the input field
        append
            The selected value is appended to an existing value of the input field
        prepend
            The selected value is prepended to an existing value of the input field

    ..  note::
        The colorpicker ignores the :php:`mode` setting, new values from the select box always substitute an existing one.

    items (array)
        An array with selectable items. Each item is an array with the first value being the label in the select
        drop-down (LLL reference possible) the second being the value transferred to the input field.

Example
=======

..  code-block:: php

    'input_33' => [
        'label' => 'input_33',
        'config' => [
            'type' => 'input',
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
