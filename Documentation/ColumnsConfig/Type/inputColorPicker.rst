.. include:: ../../Includes.txt

.. _columns-input-renderType-colorpicker:

===================
input (colorPicker)
===================

This page describes the :ref:`input <columns-input>` type with renderType='colorPicker'.

An input field with a JavaScript color picker.

.. contents:: Table of contents:
   :local:
   :depth: 1

Example
=======

.. figure:: ../../Images/TypeInputStyleguide34Colorbox.png
    :alt: Color picker (input_34)
    :class: with-shadow

    Color picker (input_34)

.. code-block:: php

    'input_34' => [
        'label' => 'input_34 renderType colorbox',
        'config' => [
            'type' => 'input',
            'renderType' => 'colorpicker',
            'size' => 10,
        ],
    ],

Properties
==========

.. contents::
   :local:
   :depth: 1

autocomplete
------------

.. include:: ../Properties/InputAutocomplete.rst.txt

behaviour
---------

.. include:: ../Properties/CommonBehaviour.rst.txt

allowLanguageSynchronization
~~~~~~~~~~~~~~~~~~~~~~~~~~~~

.. include:: ../Behaviour/CommonAllowLanguageSynchronization.rst.txt

default
-------

.. include:: ../Properties/CommonDefault.rst.txt

eval
----

.. include:: ../Properties/InputEval.rst.txt

.. note::
    A lot of the default :php:`eval` properties do not make much sense in the colorpicker. Choose with care.

fieldControl
------------

.. include:: ../Properties/CommonFieldControl.rst.txt

fieldInformation
----------------

.. include:: ../Properties/CommonFieldInformation.rst.txt

fieldWizard
-----------

.. include:: ../Properties/CommonFieldWizard.rst.txt

defaultLanguageDifferences
~~~~~~~~~~~~~~~~~~~~~~~~~~

.. include:: ../FieldWizard/DefaultLanguageDifferences.rst.txt

localizationStateSelector
~~~~~~~~~~~~~~~~~~~~~~~~~

.. include:: ../FieldWizard/LocalizationStateSelector.rst.txt

otherLanguageContent
~~~~~~~~~~~~~~~~~~~~

.. include:: ../FieldWizard/OtherLanguageContent.rst.txt

is\_in
------

.. include:: ../Properties/InputIsIn.rst.txt

max
---

.. include:: ../Properties/InputMax.rst.txt

mode
----

.. include:: ../Properties/CommonMode.rst.txt

placeholder
-----------

.. include:: ../Properties/CommonPlaceholder.rst.txt

readOnly
--------

.. include:: ../Properties/CommonReadOnly.rst.txt

search
------

.. include:: ../Properties/CommonSearch.rst.txt

size
----

.. include:: ../Properties/InputSize.rst.txt

softref
-------

.. include:: ../Properties/CommonSoftref.rst.txt

valuePicker
-----------

.. include:: ../Properties/InputValuePicker.rst.txt

.. note::
    The colorpicker ignores `mode` setting of the valuePicker, new values from the select box always substitute an existing one.
