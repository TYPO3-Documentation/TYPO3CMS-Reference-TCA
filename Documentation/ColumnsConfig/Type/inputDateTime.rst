.. include:: ../../Includes.txt

.. _columns-input-renderType-inputDateTime:

=====================
input (inputDateTime)
=====================

This page describes the :ref:`input <columns-input>` type with renderType='inputDateTime'.

Renders an input field with date or time pickers.

.. contents:: Table of contents:
   :local:
   :depth: 1

Example
=======

.. figure:: ../../Images/TypeInputDateTimeStyleguide3.png
    :alt: Date and time picker (inputdatetime_3)
    :class: with-shadow

    Date and time picker (inputdatetime_3)

.. code-block:: php

    'inputdatetime_3' => [
        'label' => 'inputdatetime_3 eval=datetime',
        'config' => [
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
        ],
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

.. _columns-input-properties-dbtype:

dbType
~~~~~~

.. include:: ../Properties/InputDbType.rst.txt

default
-------

.. include:: ../Properties/CommonDefault.rst.txt

.. _columns-input-properties-disableAgeDisplay:

disableAgeDisplay
-----------------

.. include:: ../Properties/InputDisableAgeDisplay.rst.txt

eval
----

.. include:: ../Properties/InputEvalInputDateTime.rst.txt

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

fieldWizard => localizationStateSelector
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

.. include:: ../FieldWizard/LocalizationStateSelector.rst.txt

fieldWizard => otherLanguageContent
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

.. include:: ../FieldWizard/OtherLanguageContent.rst.txt

.. _columns-input-properties-format:

format
------

.. include:: ../Properties/InputFormat.rst.txt

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

softref
-------

.. include:: ../Properties/CommonSoftref.rst.txt
