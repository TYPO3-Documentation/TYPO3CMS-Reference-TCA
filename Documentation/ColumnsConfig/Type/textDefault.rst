.. include:: ../../Includes.txt

.. _columns-text-renderType-default:

==============
text (default)
==============

.. contents:: Table of contents:
   :local:
   :depth: 1

This page describes the :ref:`text <columns-text>` type with no renderType (default).

type='text' without a given specific renderType either renders a simple :code:`<textarea>` or a Rich Text
field if Rich Text Editor is enabled in the configuration and for the user.

.. _columns-text-examples:

Examples
========

Simple text area
----------------

.. figure:: ../../Images/TypeTextSysNote.png
    :alt: Message field of system notes, a simple text area (message)
    :class: with-shadow

    Message field of system notes, a simple text area (message)

.. code-block:: php

    'message' => [
        'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.message',
        'config' => [
            'type' => 'text',
            'cols' => 40,
            'rows' => 15
        ]
    ],

Rich text editor field
----------------------

.. figure:: ../../Images/TypeTextRteStyleguide1.png
    :alt: A Rich Text Editor field (rte_1)
    :class: with-shadow

    A Rich Text Editor field (rte_1)

.. code-block:: php

    'rte_1' => [
        'label' => 'rte_1',
        'config' => [
            'type' => 'text',
            'enableRichtext' => true,
        ],
    ],

.. _columns-text-properties:
.. _columns-text-properties-type:

Properties
==========

.. contents::
   :local:
   :depth: 1

.. _columns-text-properties-behaviour:

behaviour
---------

.. include:: ../Properties/CommonBehaviour.rst.txt


behaviour => allowLanguageSynchronization
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

.. include:: ../Behaviour/CommonAllowLanguageSynchronization.rst.txt

.. _columns-text-properties-cols:

cols
----

.. include:: ../Properties/TextCols.rst.txt

.. _columns-text-properties-default:

default
-------

.. include:: ../Properties/CommonDefault.rst.txt

.. _columns-text-properties-enableRichtext:

enableRichtext
--------------

.. include:: ../Properties/TextEnableRichtext.rst.txt

.. _columns-text-properties-enableTabulator:

enableTabulator
---------------

.. include:: ../Properties/TextEnableTabulator.rst.txt

.. _columns-text-properties-eval:

eval
----

.. include:: ../Properties/TextEval.rst.txt

.. _columns-text-properties-fieldControl:

fieldControl
------------

.. include:: ../Properties/CommonFieldControl.rst.txt

.. _columns-text-properties-fieldInformation:

fieldInformation
----------------

.. include:: ../Properties/CommonFieldInformation.rst.txt

.. _columns-text-properties-fieldWizard:

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

.. _columns-text-properties-fixedFont:

fixedFont
---------

.. include:: ../Properties/TextFixedFont.rst.txt

.. _columns-text-properties-is-in:

is\_in
------

.. include:: ../Properties/TextIsIn.rst.txt

.. _columns-text-properties-maxlength:

max
---

.. include:: ../Properties/TextMax.rst.txt

.. _columns-text-properties-mode:

mode
----

.. include:: ../Properties/CommonMode.rst.txt

.. _columns-text-properties-placeholder:

placeholder
-----------

.. include:: ../Properties/CommonPlaceholder.rst.txt

.. _columns-text-properties-readOnly:

readOnly
--------

.. include:: ../Properties/CommonReadOnly.rst.txt

.. _columns-text-properties-richtextConfiguration:

richtextConfiguration
---------------------

.. include:: ../Properties/TextRichtextConfiugration.rst.txt

.. _columns-text-properties-rows:

rows
----

.. include:: ../Properties/TextRows.rst.txt

.. _columns-text-properties-search:

search
------

.. include:: ../Properties/CommonSearch.rst.txt

.. _columns-text-properties-softref:

softref
-------

.. include:: ../Properties/CommonSoftref.rst.txt

.. _columns-text-properties-wrap:

wrap
----

.. include:: ../Properties/TextWrap.rst.txt
