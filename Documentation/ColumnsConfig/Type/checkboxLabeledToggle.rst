.. include:: /Includes.txt

.. _columns-check-checkboxLabeledToggle:

=============================
check (checkboxLabeledToggle)
=============================

This page describes the :ref:`check <columns-check>` type with renderType='checkboxLabeledToggle'.

A toggle switch where both states can be labelled (ON/OFF, Visible / Hidden or alike).
Its state can be inverted via :code:`invertStateDisplay`

.. contents:: Table of contents:
   :local:
   :depth: 1

Examples
========

Single checkbox with labeled toggle
-----------------------------------

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

Single checkbox with labeled toggle inverted state display
----------------------------------------------------------

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

Properties
==========

.. contents::
   :local:
   :depth: 1


behaviour
---------

.. include:: ../Properties/CommonBehaviour.rst.txt

behaviour => allowLanguageSynchronization
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

.. include:: ../Behaviour/CommonAllowLanguageSynchronization.rst.txt

cols
----

.. include:: ../Properties/CheckCols.rst.txt

default
-------

.. include:: ../Properties/CheckDefault.rst.txt

eval
----

.. include:: ../Properties/CheckEval.rst.txt

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

items
-----

.. include:: ../Properties/CheckItems.rst.txt

itemsProcFunc
-------------

.. include:: ../Properties/CommonItemsProcFunc.rst.txt

readOnly
--------

.. include:: ../Properties/CommonReadOnly.rst.txt

validation
----------

.. include:: ../Properties/CheckValidation.rst.txt
