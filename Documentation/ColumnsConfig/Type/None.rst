.. include:: ../../Includes.txt

.. _columns-none:

type = 'none'
-------------

.. _columns-none-introduction:

Introduction
============

This type will just show the value of the field in the backend. The field is not editable.
Format options can be set to format a given value. The field is often similar to a :php:`type = 'input'`
field having :php:`readOnly=true` set.

.. caution::

   With :php:`type = 'none'` the DataHandler cannot process the field since the type is unknown. 
   You may use :php:`type = 'input'` with :php:`readOnly=true` instead.

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


renderType default
==================

type='none' has (currently) only one render definition, no special renderType must be set.

.. _columns-none-properties:

.. _columns-none-properties-type:

.. _columns-none-properties-cols:
.. include:: ../Properties/NoneCols.rst

.. _columns-none-properties-fieldInformation:
.. include:: ../Properties/CommonFieldInformation.rst

.. _columns-none-properties-format:
.. include:: ../Properties/NoneFormat.rst

.. _columns-none-properties-pass-content:
.. include:: ../Properties/NonePassContent.rst

.. _columns-none-properties-search:
.. include:: ../Properties/CommonSearch.rst

.. _columns-none-properties-size:
.. include:: ../Properties/NoneSize.rst

