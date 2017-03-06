.. include:: ../Includes.txt

.. _columns:

===========
['columns']
===========

Introduction
------------

The ['columns'] section contains configuration for each table  *field* (also called "column") which can
be edited in the backend. This is typically the biggest part of a TCA definition.

The configuration includes both properties for the display in the backend as well as the processing of the
submitted data.

Each field can be configured as a certain "type" (**required!**), for instance a checkbox, an input field, or a
database relation. Each type allows a set of additional "renderType"s. Each "type" and "renderType" combination
comes with a set of additional properties.

The basic structure looks like this:

.. code-block:: php

    'columns' => [
        'aField' => [
            'label' => 'someLabel',
            'config' => [
                'type' => 'aType',
                'renderType' => 'aRenderType',
                ...
            ],
            ...
        ],
    ],

Properties on the level parallel to "label" are valid for all "type" and "renderType" combinations.
They are listed below. The list of properties within the "config" section depend on the specific "type" and "renderType"
combination and are explained in detail in the :ref:`['columns']['config'] <columns-types>` section.


Examples
--------

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

    Nested inline relation to a different table


.. _columns-properties:

.. _columns-properties-config:
.. include:: ColumnsConfig.rst

.. _columns-properties-displaycond:
.. include:: ColumnsDisplayCond.rst

.. _columns-properties-exclude:
.. include:: ColumnsExclude.rst

.. _columns-properties-label:
.. include:: ColumnsLabel.rst

.. _columns-properties-l10n-display:
.. include:: ColumnsL10nDisplay.rst

.. _columns-properties-l10n-mode:
.. include:: ColumnsL10nMode.rst
