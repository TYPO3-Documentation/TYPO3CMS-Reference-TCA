.. include:: ../../Includes.txt

.. _columns-passthrough:

type = 'passthrough'
--------------------

.. _columns-passthrough-introduction:

Introduction
============

This type can be saved/updated through :ref:`DataHandler <t3coreapi:tce>` but the value is not evaluated in any
way and the field has no rendering in :ref:`FormEngine <t3coreapi:FormEngine>`.

You can use this to send values directly to the database fields without any automatic evaluation.
But still the update gets logged and the history/undo function will work with such values.

Since there is no rendering mode for this field type it is specifically fitted for direct API usage with the DataHandler.

.. _columns-passthrough-examples:

Examples
========

This field is found in a number of tables, for instance the "pages" table. It is used by the system extension
"impexp" to store some information.

.. code-block:: php

    'tx_impexp_origuid' => [
        'config' => [
            'type' => 'passthrough'
        ],
    ],

.. _columns-input-renderType-default:

renderType default
==================

This type has no renderType, so setting it is useless. However, some properties like default are applied
through the :php:`DataHandler` if storing a record with a passthrough field.

.. _columns-passthrough-properties:

.. _columns-passthrough-properties-type:

.. _columns-passthrough-properties-default:
.. include:: ../Properties/CommonDefault.rst
