.. include:: ../../Includes.txt

.. _columns-text:

type = 'text'
-------------

.. _columns-text-introduction:

Introduction
============

The type='text' is for multi line text input, in the database :file:`ext_tables.sql` files it is typically
set to a :code:`TEXT` column type. In the Backend, it is rendered in various shapes: It can be rendered as
a simple :code:`<textarea>`, as a Rich Text Editor, as a code block with syntax highlighting, and others.


.. _columns-text-examples:

Examples
========

.. figure:: ../../Images/TypeTextSysNote.png
    :alt: Message field of system notes, a simple text area (message)
    :class: with-shadow

    Message field of system notes, a simple text area (message)

.. figure:: ../../Images/TypeTextRteStyleguide1.png
    :alt: A Rich Text Editor field (rte_1)
    :class: with-shadow

    A Rich Text Editor field (rte_1)

.. figure:: ../../Images/TypeTextT3editorStyleguide1.png
    :alt: Code highlighting with t3editor (t3editor_1)
    :class: with-shadow

    Code highlighting with t3editor (t3editor_1)

.. figure:: ../../Images/TypeTextTableTtContentBodytext.png
    :alt: Table editor tt\_content bodytext
    :class: with-shadow

    Table editor tt\_content bodytext

.. figure:: ../../Images/TypeTextBackendLayout.png
    :alt: Backend layout editor (config)
    :class: with-shadow

    Backend layout editor (config)


.. code-block:: php

    'message' => [
        'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.message',
        'config' => [
            'type' => 'text',
            'cols' => 40,
            'rows' => 15
        ]
    ],

.. code-block:: php

    'rte_1' => [
        'label' => 'rte_1',
        'config' => [
            'type' => 'text',
            'enableRichtext' => true,
        ],
    ],

.. code-block:: php

    't3editor_1' => [
        'label' => 't3editor_1 format=html, rows=7',
        'config' => [
            'type' => 'text',
            'renderType' => 't3editor',
            'format' => 'html',
            'rows' => 7,
        ],
    ],

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

.. code-block:: php

    'config' => [
        'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout.config',
        'config' => [
            'type' => 'text',
            'renderType' => 'belayoutwizard',
        ]
    ],


.. _columns-text-renderType-default:

renderType default
==================

type='text' without a given specific renderType either renders a simple :code:`<textarea>`, or a Rich Text Editor
if both enabled in configuration and enabled for the user.

.. _columns-text-properties:

Properties
==========

.. _columns-text-properties-type:

.. _columns-text-properties-behaviour:
.. include:: ../Properties/CommonBehaviour.rst.txt
.. include:: ../Behaviour/CommonAllowLanguageSynchronization.rst.txt

.. _columns-text-properties-cols:
.. include:: ../Properties/TextCols.rst.txt

.. _columns-text-properties-default:
.. include:: ../Properties/CommonDefault.rst.txt

.. _columns-text-properties-enableRichtext:
.. include:: ../Properties/TextEnableRichtext.rst.txt

.. _columns-text-properties-enableTabulator:
.. include:: ../Properties/TextEnableTabulator.rst.txt

.. _columns-text-properties-eval:
.. include:: ../Properties/TextEval.rst.txt

.. _columns-text-properties-fieldControl:
.. include:: ../Properties/CommonFieldControl.rst.txt

.. _columns-text-properties-fieldInformation:
.. include:: ../Properties/CommonFieldInformation.rst.txt

.. _columns-text-properties-fieldWizard:
.. include:: ../Properties/CommonFieldWizard.rst.txt
.. include:: ../FieldWizard/DefaultLanguageDifferences.rst.txt
.. include:: ../FieldWizard/LocalizationStateSelector.rst.txt
.. include:: ../FieldWizard/OtherLanguageContent.rst.txt

.. _columns-text-properties-fixedFont:
.. include:: ../Properties/TextFixedFont.rst.txt

.. _columns-text-properties-is-in:
.. include:: ../Properties/TextIsIn.rst.txt

.. _columns-text-properties-maxlength:
.. include:: ../Properties/TextMax.rst.txt

.. _columns-text-properties-mode:
.. include:: ../Properties/CommonMode.rst.txt

.. _columns-text-properties-placeholder:
.. include:: ../Properties/CommonPlaceholder.rst.txt

.. _columns-text-properties-readOnly:
.. include:: ../Properties/CommonReadOnly.rst.txt

.. _columns-text-properties-richtextConfiguration:
.. include:: ../Properties/TextRichtextConfiugration.rst.txt

.. _columns-text-properties-rows:
.. include:: ../Properties/TextRows.rst.txt

.. _columns-text-properties-search:
.. include:: ../Properties/CommonSearch.rst.txt

.. _columns-text-properties-softref:
.. include:: ../Properties/CommonSoftref.rst.txt

.. _columns-text-properties-wrap:
.. include:: ../Properties/TextWrap.rst.txt


.. _columns-text-renderType-belayoutwizard:

renderType = 'belayoutwizard'
=============================

The :code:`renderType = 'belayoutwizard'` is a special renderType to display the backend layout
wizard when editing records of table :code:`backend_layout` in the backend. It stored a custom
syntax representing the Web -> Page layout in the database.

.. include:: ../Properties/CommonDefault.rst.txt

.. include:: ../Properties/CommonFieldInformation.rst.txt

.. include:: ../Properties/CommonFieldWizard.rst.txt


.. _columns-text-renderType-t3editor:

renderType = 't3editor'
=======================

The :code:`renderType = 't3editor'` triggers a code highlighter if extension `t3editor` is loaded, otherwise
falls back to "default" renderType.

System extension "t3editor" provides an enhanced textarea for TypoScript input, with not only syntax highlighting but
also auto-complete suggestions. Beyond that the "t3editor" extension makes it possible to add syntax highlighting
to textarea fields, for several languages.

.. include:: ../Properties/CommonBehaviour.rst.txt
.. include:: ../Behaviour/CommonAllowLanguageSynchronization.rst.txt

.. include:: ../Properties/CommonDefault.rst.txt

.. include:: ../Properties/CommonFieldControl.rst.txt

.. include:: ../Properties/CommonFieldInformation.rst.txt

.. include:: ../Properties/CommonFieldWizard.rst.txt
.. include:: ../FieldWizard/DefaultLanguageDifferences.rst.txt
.. include:: ../FieldWizard/LocalizationStateSelector.rst.txt
.. include:: ../FieldWizard/OtherLanguageContent.rst.txt

.. _columns-text-properties-format:
.. include:: ../Properties/TextFormat.rst.txt

.. include:: ../Properties/TextRows.rst.txt

.. include:: ../Properties/CommonSearch.rst.txt

.. include:: ../Properties/CommonSoftref.rst.txt


.. _columns-text-renderType-textTable:

renderType = 'textTable'
========================

The :code:`renderType = 'textTable'` triggers a view to manage frontend table display in the backend.
It is used for the "Table" tt\_content content element.

.. include:: ../Properties/CommonBehaviour.rst.txt
.. include:: ../Behaviour/CommonAllowLanguageSynchronization.rst.txt

.. include:: ../Properties/TextCols.rst.txt

.. include:: ../Properties/CommonDefault.rst.txt

.. include:: ../Properties/TextEnableTabulator.rst.txt

.. include:: ../Properties/CommonFieldControl.rst.txt
.. include:: ../FieldControl/TableWizard.rst.txt

.. include:: ../Properties/CommonFieldInformation.rst.txt

.. include:: ../Properties/CommonFieldWizard.rst.txt
.. include:: ../FieldWizard/DefaultLanguageDifferences.rst.txt
.. include:: ../FieldWizard/LocalizationStateSelector.rst.txt
.. include:: ../FieldWizard/OtherLanguageContent.rst.txt

.. include:: ../Properties/TextFixedFont.rst.txt

.. include:: ../Properties/TextIsIn.rst.txt

.. include:: ../Properties/TextMax.rst.txt

.. include:: ../Properties/CommonPlaceholder.rst.txt

.. include:: ../Properties/CommonReadOnly.rst.txt

.. include:: ../Properties/TextRows.rst.txt

.. include:: ../Properties/CommonSearch.rst.txt

.. include:: ../Properties/CommonSoftref.rst.txt

.. include:: ../Properties/TextWrap.rst.txt
