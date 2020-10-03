.. include:: ../../Includes.txt

.. _columns-text-renderType-textTable:

================
text (textTable)
================

.. contents:: Table of contents:
   :local:
   :depth: 1

This page describes the :ref:`text <columns-text>` type with the renderType='textTable'.

.. code-block:: php

   // ...
   'type' => 'text',
   'renderType' => 'textTable',
   // ...

The :code:`renderType = 'textTable'` triggers a view to manage frontend table display in the backend.
It is used for the "Table" tt\_content content element.

Example
=======

.. figure:: ../../Images/TypeTextTableTtContentBodytext.png
    :alt: Table editor tt\_content bodytext
    :class: with-shadow

    Table editor tt\_content bodytext

.. code-block:: php

    'bodytext' => [
        'label' => '',
        'config' => [
            'type' => 'text',
            'renderType' => 'textTable',
            'wrap' => 'off',
            'cols' => 80,
            'rows' => 15,
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

cols
----

.. include:: ../Properties/TextCols.rst.txt

default
-------

.. include:: ../Properties/CommonDefault.rst.txt

enableTabulator
---------------

.. include:: ../Properties/TextEnableTabulator.rst.txt

fieldControl
------------

.. include:: ../Properties/CommonFieldControl.rst.txt

tableWizard
~~~~~~~~~~~

.. include:: ../FieldControl/TableWizard.rst.txt

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

fixedFont
---------

.. include:: ../Properties/TextFixedFont.rst.txt

is\_in
------

.. include:: ../Properties/TextIsIn.rst.txt

max
---

.. include:: ../Properties/TextMax.rst.txt

placeholder
-----------

.. include:: ../Properties/CommonPlaceholder.rst.txt

readOnly
--------

.. include:: ../Properties/CommonReadOnly.rst.txt

rows
----

.. include:: ../Properties/TextRows.rst.txt

search
------

.. include:: ../Properties/CommonSearch.rst.txt

softref
-------

.. include:: ../Properties/CommonSoftref.rst.txt

wrap
----

.. include:: ../Properties/TextWrap.rst.txt
