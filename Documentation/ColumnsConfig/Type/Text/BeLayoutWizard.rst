.. include:: /Includes.rst.txt

.. _columns-text-renderType-belayoutwizard:

=====================
text (belayoutwizard)
=====================

.. contents:: Table of contents:
   :local:
   :depth: 1

This page describes the :ref:`text <columns-text>` type with renderType='belayoutwizard'.

The :code:`renderType = 'belayoutwizard'` is a special renderType to display the backend layout
wizard when editing records of table :code:`backend_layout` in the backend. It stored a custom
syntax representing the Web -> Page layout in the database.


Example
=======

.. figure:: ../../Images/TypeTextBackendLayout.png
    :alt: Backend layout editor (config)
    :class: with-shadow

    Backend layout editor (config)

.. code-block:: php

    'config' => [
        'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout.config',
        'config' => [
            'type' => 'text',
            'renderType' => 'belayoutwizard',
        ]
    ],

Properties
==========

.. contents::
   :local:
   :depth: 1


default
-------

.. include:: ../Properties/CommonDefault.rst.txt

fieldInformation
----------------

.. include:: ../Properties/CommonFieldInformation.rst.txt

fieldWizard
-----------

.. include:: ../Properties/CommonFieldWizard.rst.txt
