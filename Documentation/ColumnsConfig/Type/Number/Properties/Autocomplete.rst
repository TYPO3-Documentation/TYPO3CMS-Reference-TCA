..  include:: /Includes.rst.txt
..  _columns-number-properties-autocomplete:

============
autocomplete
============

..  confval:: autocomplete
    :name: number-autocomplete
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: boolean
    :Scope: Display

    Controls the `autocomplete` attribute of a given number field. If set to true (default false),
    adds attribute :php:`autocomplete="on"` to the number input field allowing browser auto filling the field:

    ..  code-block:: php
        :emphasize-lines: 7

        'integer_field' => [
            'label' => 'Integer field',
            'config' => [
                'type' => 'number',
                'size' => 20,
                'nullable' => true,
                'autocomplete' => true
            ]
        ],
