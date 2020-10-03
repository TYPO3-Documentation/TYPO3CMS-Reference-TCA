.. include:: ../../Includes.txt

.. _columns-input-renderType-inputLink:

=================
input (inputLink)
=================

This page describes the :ref:`input <columns-input>` type with the renderType='inputLink'.

An input field used to handle links and mail addresses in the backend.

.. contents:: Table of contents:
   :local:
   :depth: 1

Example
=======

.. figure:: ../../Images/TypeInputStyleguide29Link.png
    :alt: Link field (input_29)
    :class: with-shadow

    Link field (input_29)

.. code-block:: php

    'input_29' => [
        'label' => 'input_29 link',
        'config' => [
            'type' => 'input',
            'renderType' => 'inputLink',
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

behaviour => allowLanguageSynchronization
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

.. include:: ../Behaviour/CommonAllowLanguageSynchronization.rst.txt

default
-------

.. include:: ../Properties/CommonDefault.rst.txt

eval
----

.. include:: ../Properties/InputEval.rst.txt

fieldControl
------------

.. include:: ../Properties/CommonFieldControl.rst.txt

linkPopup
~~~~~~~~~

.. include:: ../FieldControl/LinkPopup.rst.txt

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

fieldWizard => localizationStateSelector
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

.. include:: ../FieldWizard/LocalizationStateSelector.rst.txt

fieldWizard => otherLanguageContent
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

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

range
-----

.. include:: ../Properties/InputRange.rst.txt

readOnly
--------

.. include:: ../Properties/CommonReadOnly.rst.txt

search
------

.. include:: ../Properties/CommonSearch.rst.txt

size
----

.. include:: ../Properties/InputSize.rst.txt

slider
------

.. include:: ../Properties/InputSlider.rst.txt

softref
-------

.. include:: ../Properties/CommonSoftref.rst.txt

valuePicker
-----------

.. include:: ../Properties/InputValuePicker.rst.txt
