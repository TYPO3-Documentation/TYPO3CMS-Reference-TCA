.. include:: /Includes.rst.txt

.. _columns-none:

=============
type = 'none'
=============

.. contents:: Table of contents:
   :local:
   :depth: 1

.. _columns-none-introduction:

Introduction
============

There are three columns config types that do similar things but still have subtle differences between them.
These are the :ref:`none type <columns-none>`, the :ref:`passthrough type <columns-passthrough>` and the
:ref:`user type <columns-user>`.

Characteristics of `none`:

* The DataHandler discards values send for type none and never persists or updates them in the database.
* Type none is the only type that does **not** necessarily need a database field.
* Type none fields does have a default renderType in FormEngine that displays the value as readonly
  if a database field exists and the value can be formatted.
* If no database field exists for none fields, an empty readonly input field is rendered by default.
* Type none fields are designed to be not rendered at other places in the backend, for instance they can
  not be selected to be displayed in the list module "single table view" if everything has been configured
  correctly.

The `none` field can be useful, if:

* A "virtual" field that has no database representation is needed. A simple example could be a rendered
  map that receives values from `latitude` and `longitude` fields but that needs to database representation
  itself.
* A third party feeds the database field with a value and the value should be formatted and displayed
  in FormEngine. However, a :ref:`input type <columns-input>` with :php:`readOnly=true` is usually better
  suited to do that.

Since the formatting part of `none` fields can be done with `input` type as well, most useful usage
of type `none` fields is a "virtual" field that is combined with a custom
:ref:`renderType <t3coreapi:FormEngine-Rendering-NodeExpansion>` by an extension.
The TYPO3 core makes little or no use of `none` fields itself.


.. _columns-none-examples:

Examples
========

.. figure:: ../../Images/TypeNoneStyleguide1.png
    :alt: Simple none field (none_1)
    :class: with-shadow

    Simple none field

.. code-block:: php

    'none_1' => [
        'label' => 'none_1',
        'config' => [
            'type' => 'none',
        ],
    ],


.. _columns-none-properties:
.. _columns-none-properties-type:

Properties
==========

.. contents::
   :local:
   :depth: 1

.. _columns-none-properties-cols:

cols
----

.. include:: ../Properties/NoneCols.rst.txt

.. _columns-none-properties-fieldInformation:

fieldInformation
----------------

.. include:: ../Properties/CommonFieldInformation.rst.txt

.. _columns-none-properties-format:

format
------

.. include:: ../Properties/NoneFormat.rst.txt

.. _columns-none-properties-pass-content:

pass\_content
-------------

.. include:: ../Properties/NonePassContent.rst.txt

.. _columns-none-properties-size:

size
----

.. include:: ../Properties/NoneSize.rst.txt

