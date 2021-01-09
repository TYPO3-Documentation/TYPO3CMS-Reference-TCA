.. include:: /Includes.rst.txt

.. _columns-input-renderType-default:

===============
input (default)
===============

This page describes the :ref:`input <columns-input>` type with the default renderType.

This normal workhorse input element is used if no renderType is set and no special functionality is needed.

It can display a simple input field, an input field with a value picker of predefined
values or a value slider.

.. contents:: Table of contents:
   :local:
   :depth: 1

.. _columns-input-examples:

Examples
========

Simple input field
------------------

.. figure:: ../../Images/TypeInputStyleguide1.png
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
----------------------------------------

.. figure:: ../../Images/TypeInputStyleguide28Placeholder.png
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
------------

.. figure:: ../../Images/TypeInputStyleguide30Slider.png
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
------------

.. figure:: ../../Images/TypeInputStyleguide33ValuePicker.png
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



.. _columns-input-properties:
.. _columns-input-properties-type:

Properties
==========

.. contents::
   :local:
   :depth: 1

.. _columns-input-properties-autocomplete:

autocomplete
------------

.. include:: ../Properties/InputAutocomplete.rst.txt

.. _columns-input-properties-behaviour:

behaviour
---------

.. include:: ../Properties/CommonBehaviour.rst.txt

allowLanguageSynchronization
~~~~~~~~~~~~~~~~~~~~~~~~~~~~

.. include:: ../Behaviour/CommonAllowLanguageSynchronization.rst.txt

.. _columns-input-properties-default:

default
-------

.. include:: ../Properties/CommonDefault.rst.txt

.. _columns-input-properties-eval:

eval
----

.. include:: ../Properties/InputEval.rst.txt

fieldControl
------------

.. include:: ../Properties/CommonFieldControl.rst.txt

fieldInformation
----------------

.. include:: ../Properties/CommonFieldInformation.rst.txt

fieldWizard
-----------

.. include:: ../Properties/CommonFieldWizard.rst.txt

The following fieldWizards are available for this renderType:

.. contents::
   :local:
   :depth: 1


fieldWizard => defaultLanguageDifferences
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

.. include:: ../FieldWizard/DefaultLanguageDifferences.rst.txt

.. _columns-input-properties-fieldWizard-localizationStateSelector:

fieldWizard => localizationStateSelector
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

.. include:: ../FieldWizard/LocalizationStateSelector.rst.txt

fieldWizard => otherLanguageContent
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

.. include:: ../FieldWizard/OtherLanguageContent.rst.txt

.. _columns-input-properties-is-in:

is\_in
------

.. include:: ../Properties/InputIsIn.rst.txt

.. _columns-input-properties-max:

max
---

.. include:: ../Properties/InputMax.rst.txt

.. _columns-input-properties-mode:

mode
----

.. include:: ../Properties/CommonMode.rst.txt

.. _columns-input-properties-placeholder:

placeholder
-----------

.. include:: ../Properties/CommonPlaceholder.rst.txt

.. _columns-input-properties-range:

range
-----

.. include:: ../Properties/InputRange.rst.txt

.. _columns-input-properties-readOnly:

readOnly
--------

.. include:: ../Properties/CommonReadOnly.rst.txt

.. _columns-input-properties-search:

search
------

.. include:: ../Properties/CommonSearch.rst.txt

.. _columns-input-properties-size:

size
----

.. include:: ../Properties/InputSize.rst.txt

.. _columns-input-properties-slider:

slider
------

.. include:: ../Properties/InputSlider.rst.txt

.. _columns-input-properties-softref:

softref
-------

.. include:: ../Properties/CommonSoftref.rst.txt

.. _columns-input-properties-valuePicker:

valuePicker
-----------

.. include:: ../Properties/InputValuePicker.rst.txt
