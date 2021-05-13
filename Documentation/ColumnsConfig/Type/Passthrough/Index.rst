.. include:: /Includes.rst.txt

.. _columns-passthrough:

============================
Pass through / virtual field
============================

.. contents:: Table of contents:
   :local:
   :depth: 1

.. _columns-passthrough-introduction:

Introduction
============

There are three columns config types that do similar things but still have subtle differences between them.
These are the :ref:`none type <columns-none>`, the :ref:`passthrough type <columns-passthrough>` and the
:ref:`user type <columns-user>`.

Characteristics of `passthrough`:

* A value sent to the `DataHandler`
  is just kept as is and put into the database field. Default `FormEngine`
  however never sends values.
* Unlike none, type passthrough must have a database field.
* `FormEngine` does not render anything for passthrough types by default. But it can be combined with a custom
  renderType to make it render something. A user type is better suited for such use cases, though.
* Type passthrough field values are usually not rendered at other places in the backend.
* Field updates by the `DataHandler` get logged and the history/undo function will work with such values.

The `passthrough` field can be useful, if:

* A field needs no rendering, but some data handling using hooks of the `DataHandler`.
* The passthrough type is used by TYPO3 core to handle meta data on records rows that are not shown as fields
  if editing records and only have data logic attached to it. An example is the `l18n_diffsource` field whose
  data is rendered differently in FormEngine at other places if editing a record but still updated and handled
  by the `DataHandler`.

Typical usages of type passthrough is a field that only needs data evaluation on the `DataHandler` side, but
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


Properties
==========

*  :ref:`default <tca_property_default>`
