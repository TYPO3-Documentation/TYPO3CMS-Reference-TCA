.. include:: ../../Includes.txt

.. _columns-check:

==============
type = 'check'
==============

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

Standard checkboxes
-------------------

.. figure:: ../../Images/TypeCheckStyleguide2.png
    :alt: Simple checkbox with label (checkbox_2)
    :class: with-shadow

    Simple checkbox with label (checkbox_2)

.. code-block:: php

   'checkbox_2' => [
      'exclude' => 1,
      'label' => 'checkbox_2 one checkbox with label',
      'config' => [
         'type' => 'check',
         'items' => [
            ['foo', ''],
         ],
      ]
   ],

.. figure:: ../../Images/TypeCheckStyleguide12.png
    :alt: Four checkboxes in three columns (checkbox_12)
    :class: with-shadow

    Four checkboxes in three columns (checkbox_12)

.. code-block:: php

   'checkbox_12' => [
      'exclude' => 1,
      'label' => 'checkbox_12 cols=3',
      'config' => [
         'type' => 'check',
         'items' => [
            ['foo1', ''],
            ['foo2', ''],
            ['foo3', ''],
            ['foo4', ''],
         ],
         'cols' => '3',
      ],
   ],

.. figure:: ../../Images/TypeCheckStyleguide16.png
    :alt: Checkboxes wit inline floating (checkbox_16)
    :class: with-shadow

    Checkboxes with inline floating (checkbox_16)

.. code-block:: php

   'checkbox_16' => [
      'exclude' => 1,
      'label' => 'checkbox_16 cols=inline',
      'config' => [
         'type' => 'check',
         'items' => [
            ['Mo', ''],
            ['Tu', ''],
            ['We', ''],
            ['Th', ''],
            ['Fr', ''],
            ['Sa', ''],
            ['Su', ''],
         ],
         'cols' => 'inline',
      ],
   ],

Checkboxes with specific rendertypes
------------------------------------

.. figure:: ../../Images/TypeCheckStyleguide17.png
    :alt: Single checkbox with toggle (checkbox_17)
    :class: with-shadow

    Single checkbox with toggle (checkbox_17)

.. code-block:: php

   'checkbox_17' => [
      'exclude' => 1,
      'label' => 'checkbox_17 single checkbox with toggle',
      'config' => [
         'type' => 'check',
         'renderType' => 'checkboxToggle',
         'items' => [
            [
               0 => '',
               1 => '',
               'labelChecked' => 'Enabled',
               'labelUnchecked' => 'Disabled',
               ]
         ],
      ]
   ],

.. figure:: ../../Images/TypeCheckStyleguide18.png
    :alt: Single checkbox with toggle inverted state display (checkbox_18)
    :class: with-shadow

    Single checkbox with toggle inverted state display (checkbox_18)

.. code-block:: php

   'checkbox_18' => [
      'exclude' => 1,
      'label' => 'checkbox_18 single checkbox with toggle inverted state display',
      'config' => [
         'type' => 'check',
         'renderType' => 'checkboxToggle',
         'items' => [
            [
               0 => '',
               1 => '',
               'labelChecked' => 'Enabled',
               'labelUnchecked' => 'Disabled',
               'invertStateDisplay' => true
            ]
         ],
      ]
   ],

.. figure:: ../../Images/TypeCheckStyleguide19.png
    :alt: Single checkbox with labeled toggle (checkbox_19)
    :class: with-shadow

    Single checkbox with labeled toggle (checkbox_19)

.. code-block:: php

   'checkbox_19' => [
      'exclude' => 1,
      'label' => 'checkbox_19 single checkbox with labeled toggle',
      'config' => [
         'type' => 'check',
         'renderType' => 'checkboxLabeledToggle',
         'items' => [
            [
               0 => 'foo',
               1 => '',
               'labelChecked' => 'Enabled',
               'labelUnchecked' => 'Disabled',
            ]
         ],
      ]
   ],

.. figure:: ../../Images/TypeCheckStyleguide21.png
    :alt: Single checkbox with labeled toggle inverted state display (checkbox_21)
    :class: with-shadow

    Single checkbox with labeled toggle inverted state display (checkbox_21)

.. code-block:: php

   'checkbox_21' => [
      'exclude' => 1,
      'label' => 'checkbox_21 single checkbox with labeled toggle inverted state display',
      'config' => [
         'type' => 'check',
         'renderType' => 'checkboxLabeledToggle',
         'items' => [
            [
               0 => 'foo',
               1 => '',
               'labelChecked' => 'Enabled',
               'labelUnchecked' => 'Disabled',
               'invertStateDisplay' => true
            ]
         ],
      ]
   ],


.. _columns-check-properties:

Properties
==========

.. _columns-check-properties-type:


.. _columns-check-properties-render-type:
.. include:: ../Properties/CheckRenderType.rst.txt

.. _columns-check-properties-behaviour:
.. include:: ../Properties/CommonBehaviour.rst.txt
.. include:: ../Behaviour/CommonAllowLanguageSynchronization.rst.txt

.. _columns-check-properties-cols:
.. include:: ../Properties/CheckCols.rst.txt

.. _columns-check-properties-default:
.. include:: ../Properties/CheckDefault.rst.txt

.. _columns-check-properties-eval:
.. include:: ../Properties/CheckEval.rst.txt

.. _columns-check-properties-fieldInformation:
.. include:: ../Properties/CommonFieldInformation.rst.txt

.. _columns-check-properties-fieldWizard:
.. include:: ../Properties/CommonFieldWizard.rst.txt
.. include:: ../FieldWizard/DefaultLanguageDifferences.rst.txt
.. include:: ../FieldWizard/LocalizationStateSelector.rst.txt
.. include:: ../FieldWizard/OtherLanguageContent.rst.txt

.. _columns-check-properties-items:
.. include:: ../Properties/CheckItems.rst.txt

.. _columns-check-properties-itemsprocfunc:
.. include:: ../Properties/CommonItemsProcFunc.rst.txt

.. _columns-check-properties-readOnly:
.. include:: ../Properties/CommonReadOnly.rst.txt

.. _columns-check-properties-validation:
.. include:: ../Properties/CheckValidation.rst.txt
