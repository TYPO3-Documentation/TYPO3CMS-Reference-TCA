.. include:: ../Includes.txt

.. _columns-check:

type = 'check'
--------------

.. _columns-check-introduction:

Introduction
============

This type creates checkbox(es).

There can be between 1 and 31 checkboxes. The corresponding database field must be of type integer.
Each checkbox corresponds to a single bit of the integer value, even if there is only one checkbox.

.. tip::
    This means that you should check the bit-0 of values from single-checkbox
    fields and not just whether it is true or false.

.. warning::
    Resorting the 'items' of a type='check' config results in single items moving to different bit positions.
    It might be required to migrate existing field data if doing so.


.. _columns-check-examples:
.. _columns-check-examples-single:
.. _columns-check-examples-array:

Examples
========

.. figure:: ../../Images/TypeCheckStyleguide2.png
    :alt: Simple checkbox with label (checkbox_2)

    Simple checkbox with label (checkbox_2)

.. figure:: ../../Images/TypeCheckStyleguide12.png
    :alt: Four checkboxes in three columns (checkbox_12)

    Four checkboxes in three columns (checkbox_12)

.. figure:: ../../Images/TypeCheckStyleguide16.png
    :alt: Checkboxes wit inline floating (checkbox_16)

    Checkboxes with inline floating (checkbox_16)

.. code-block:: php

    'checkbox_2' => [
        'label' => 'checkbox_2 one checkbox with label',
        'config' => [
            'type' => 'check',
            'items' => [
                [ 'foo', '' ],
            ],
        ],
    ],

.. code-block:: php

    'checkbox_12' => [
        'label' => 'checkbox_12 cols=3',
        'config' => [
            'type' => 'check',
            'items' => [
                [ 'foo1', '' ],
                [ 'foo2', '' ],
                [ 'foo3', '' ],
                [ 'foo4', '' ],
            ],
            'cols' => '3',
        ],
    ],

.. code-block:: php

    'checkbox_16' => [
        'exclude' => 1,
        'label' => 'checkbox_16 cols=inline',
        'config' => [
            'type' => 'check',
            'items' => [
                [ 'Mo', '' ],
                [ 'Tu', '' ],
                [ 'We', '' ],
                [ 'Th', '' ],
                [ 'Fr', '' ],
                [ 'Sa', '' ],
                [ 'Su', '' ],
            ],
            'cols' => 'inline',
        ],
    ],


renderType default
==================

type='check' has (currently) only one render definition, no special renderType must be set.

.. _columns-check-properties:

.. _columns-check-properties-type:

.. _columns-check-properties-cols:
.. include:: ../Properties/CheckCols.rst

.. _columns-check-properties-default:
.. include:: ../Properties/CheckDefault.rst

.. _columns-check-properties-eval:
.. include:: ../Properties/CheckEval.rst

.. _columns-check-properties-fieldInformation:
.. include:: ../Properties/FieldInformation.rst

.. _columns-check-properties-fieldWizard:
.. include:: ../Properties/FieldWizard.rst
.. include:: ../FieldWizard/LocalizationStateSelector.rst
.. include:: ../FieldWizard/OtherLanguageContent.rst
.. include:: ../FieldWizard/DefaultLanguageDifferences.rst

.. _columns-check-properties-items:
.. include:: ../Properties/CheckItems.rst

.. _columns-check-properties-itemsprocfunc:
.. include:: ../Properties/ItemsProcFunc.rst

.. _columns-check-properties-readOnly:
.. include:: ../Properties/ReadOnly.rst

.. _columns-check-properties-validation:
.. include:: ../Properties/CheckValidation.rst
