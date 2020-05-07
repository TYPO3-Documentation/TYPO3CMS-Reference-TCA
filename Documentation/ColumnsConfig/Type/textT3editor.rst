.. include:: ../../Includes.txt

.. _columns-text-renderType-t3editor:

===============
text (t3editor)
===============

.. contents:: Table of contents:
   :local:
   :depth: 1

This page describes the :ref:`text <columns-text>` type with the renderType='t3editor'.

.. code-block:: php

   // ...
   'type' => 'text',
   'renderType' => 't3editor',
   // ...

The :code:`renderType = 't3editor'` triggers a code highlighter if extension `t3editor` is loaded, otherwise
falls back to "default" renderType.

System extension "t3editor" provides an enhanced textarea for TypoScript input, with not only syntax highlighting but
also auto-complete suggestions. Beyond that the "t3editor" extension makes it possible to add syntax highlighting
to textarea fields, for several languages.

Example
=======

.. figure:: ../../Images/TypeTextT3editorStyleguide1.png
    :alt: Code highlighting with t3editor (t3editor_1)
    :class: with-shadow

    Code highlighting with t3editor (t3editor_1)


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

Properties
==========

.. contents::
   :local:
   :depth: 1


behaviour
---------

.. include:: ../Properties/CommonBehaviour.rst.txt

allowLanguageSynchronization
~~~~~~~~~~~~~~~~~~~~~~~~~~~~

.. include:: ../Behaviour/CommonAllowLanguageSynchronization.rst.txt

default
-------

.. include:: ../Properties/CommonDefault.rst.txt

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

.. _columns-text-properties-format:

format
------

.. include:: ../Properties/TextFormat.rst.txt

rows
----

.. include:: ../Properties/TextRows.rst.txt

search
------

.. include:: ../Properties/CommonSearch.rst.txt

softref
-------

.. include:: ../Properties/CommonSoftref.rst.txt
