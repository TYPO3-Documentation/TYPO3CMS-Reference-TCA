.. include:: /Includes.rst.txt

.. _columns-passthrough:

============================
Pass through / virtual field
============================

..  contents:: Table of contents:
    :local:
    :depth: 1

.. _columns-passthrough-introduction:

Introduction
============

There are three columns config types that do similar things but still have subtle differences between them.
These are the :ref:`none type <columns-none>`, the :ref:`passthrough type <columns-passthrough>` and the
:ref:`user type <columns-user>`.

Characteristics of `passthrough`:

* A value sent to the :php:`DataHandler` is kept as is and put into the database field. However, the default TYPO3 backend forms never send data for a `passthrough` field.
* Unlike the field type `none`, the field type `passthrough` must have a database field.
* The TYPO3 backend forms do not render anything for `passthrough` fields by default. But they can be combined with a custom
  `renderType` to display something. A field of type `user` is better suited for such use cases, though.
* Values of `passthrough` fields are usually not rendered at other places in the backend.
* Field updates by the `DataHandler` get logged and the history/undo function will work with such values.

The `passthrough` field can be useful, if:

* A field needs no rendering, but some data handling using hooks of the `DataHandler`.
* The passthrough type is used by TYPO3 core to handle meta data on records rows that are not shown as fields
  if editing records and only have data logic attached to it. An example is the `l10n_diffsource` field whose
  data is rendered differently in FormEngine at other places if editing a record but still updated and handled
  by the `DataHandler`.

Typical usages of the field type `passthrough` is a field that only needs data evaluation on the `DataHandler` side, but
no rendering definition. The `DataHandler` does not evaluate the value in any way by default.

Since there is no rendering mode for this field type it is specifically fitted for direct API usage with the `DataHandler`.

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

.. _columns-passthrough-properties:
.. _columns-passthrough-renderType-default:
.. _columns-passthrough-properties-type:
.. _columns-passthrough-properties-default:


Properties of the TCA column type `passthrough`
===============================================

*  :ref:`default <tca_property_default>`
