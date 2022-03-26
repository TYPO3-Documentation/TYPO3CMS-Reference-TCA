.. include:: /Includes.rst.txt

.. _columns-check-checkboxToggle:

======================
check (checkboxToggle)
======================

This page describes the :ref:`check <columns-check>` type with the renderType='checkboxToggle'.

Toggle switches are rendered instead of checkboxes.
No additional configuration is necessary. Its state can be inverted via
:code:`invertStateDisplay`.

.. contents:: Table of contents:
   :local:
   :depth: 1

Examples
========

Example: Single checkbox With toggle
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
           ]
        ],
     ]
  ],

`checkboxToggle`: Instead of checkboxes, a toggle item is displayed.

Example: Single checkbox with toggle inverted state display
-----------------------------------------------------------

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
              'invertStateDisplay' => true
           ]
        ],
     ]
  ],

`invertedStateDisplay`:  A checkbox is marked checked if the database bit is not set and vice versa.

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
