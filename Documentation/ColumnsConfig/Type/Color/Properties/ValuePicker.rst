..  include:: /Includes.rst.txt
..  _columns-color-properties-valuePicker:

===========
valuePicker
===========

..  confval:: valuePicker
    :name: color-valuePicker
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: array
    :Scope: Display

    Renders a select box with static values next to the input field. When a
    value is selected in the box, the value is transferred to the field. Keys:

    items (array)
        An array with selectable items. Each item is an array with the first value being the label in the select
        drop-down (LLL reference possible) the second being the hex-value transferred to the input field.
        The value should have exactly 7 characters, as this is the maximum for a hex-value.

..  note::

    The :php:`valuePicker` allows to define default color codes via :php:`items`
    for a TCA type :php:`color` field.

Example
=======

..  code-block:: php

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
        ],
    ],
