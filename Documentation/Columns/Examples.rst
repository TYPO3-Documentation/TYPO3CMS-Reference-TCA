.. include:: /Includes.rst.txt

========
Examples
========

Some examples from extension styleguide to get an idea on what the ['colums'] definition is capable of: An input field
with slider, a select drop-down for images, an inline relation spanning multiple tables.

.. code-block:: php

    'input_30' => [
        'label' => 'input_30 slider, step=10, width=200, eval=trim,int',
        'config' => [
            'type' => 'input',
            'size' => 5,
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

.. figure:: ../Images/ColumnsExampleInputSlider.png
    :alt: Slider input field
    :class: with-shadow

    Slider input field


.. code-block:: php

    'select_single_12' => [
        'label' => 'select_single_12 foreign_table selicon_field',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'tx_styleguide_elements_select_single_12_foreign',
            'fieldWizard' => [
                'selectIcons' => [
                    'disabled' => false,
                ],
            ],
        ],
    ],

.. figure:: ../Images/ColumnsExampleSelectImages.png
    :alt: Select images from a drop-down
    :class: with-shadow

    Select images from a drop-down


.. code-block:: php

    'inline_1' => [
        'label' => 'inline_1',
        'config' => [
            'type' => 'inline',
            'foreign_table' => 'tx_styleguide_inline_1n1n_child',
            'foreign_field' => 'parentid',
            'foreign_table_field' => 'parenttable',
        ],
    ],

.. figure:: ../Images/ColumnsExampleInline.png
    :alt: Nested inline relation to a different table
    :class: with-shadow

    Nested inline relation to a different table
