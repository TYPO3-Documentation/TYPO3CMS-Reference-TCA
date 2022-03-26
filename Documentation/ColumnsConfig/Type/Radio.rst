.. include:: /Includes.rst.txt

.. _columns-radio:

==============
type = 'radio'
==============

.. contents:: Table of contents:
   :local:
   :depth: 1

.. _columns-radio-introduction:

Introduction
============

This type creates a set of radio buttons. The value is typically stored as integer value, each radio
item has one assigned number, but it can be a string, too.


.. _columns-radio-examples:

Examples
========

.. figure:: ../../Images/TypeRadioStyleguide1.png
    :alt: A set of radio buttons
    :class: with-shadow

    A set of radio buttons

.. code-block:: php

    'radio_1' => [
        'label' => 'radio_1 three options',
        'config' => [
            'type' => 'radio',
            'items' => [
                ['foo', 1], // 'foo' should be a LLL reference
                ['bar', 2],
                ['foobar', 3],
            ],
        ],
    ],



.. _columns-radio-properties:
.. _columns-radio-properties-type:

Properties
==========

.. contents::
   :local:
   :depth: 1

.. _columns-radio-properties-behaviour:

behaviour
---------

.. include:: ../Properties/CommonBehaviour.rst.txt

behaviour => allowLanguageSynchronization
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

.. include:: ../Behaviour/CommonAllowLanguageSynchronization.rst.txt

.. _columns-radio-properties-default:

default
-------

.. include:: ../Properties/CommonDefault.rst.txt

.. _columns-radio-properties-fieldInformation:

fieldInformation
----------------

.. include:: ../Properties/CommonFieldInformation.rst.txt

.. _columns-radio-properties-fieldWizard:

fieldWizard
-----------

.. include:: ../Properties/CommonFieldWizard.rst.txt

The following fieldWizards are available for this type:

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

.. _columns-radio-properties-items:

items
-----

.. include:: ../Properties/RadioItems.rst.txt

.. _columns-radio-properties-itemsprocfunc:

itemsProcFunc
-------------

.. include:: ../Properties/CommonItemsProcFunc.rst.txt

.. _columns-radio-properties-readOnly:

readOnly
--------

.. include:: ../Properties/CommonReadOnly.rst.txt
