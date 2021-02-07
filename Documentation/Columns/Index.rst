.. include:: /Includes.rst.txt
.. _columns:

===========================
Field definitions (columns)
===========================

The ['columns'] section contains configuration for each table  *field* (also called "column") which can
be edited in the backend. This is typically the biggest part of a TCA definition.

The configuration includes both properties for the display in the backend as well as the processing of the
submitted data.

Each field can be configured as a certain "type" (**required!**), for instance a checkbox, an input field, or a
database relation. Each type allows a set of additional "renderType"s. Each "type" and "renderType" combination
comes with a set of additional properties.

The basic structure looks like this:

.. code-block:: php

    'columns' => [
        'aField' => [
            'label' => 'someLabel',
            'config' => [
                'type' => 'aType',
                'renderType' => 'aRenderType',
                ...
            ],
            ...
        ],
    ],

Properties on the level parallel to "label" are valid for all "type" and "renderType" combinations.
They are listed below. The list of properties within the "config" section depend on the specific "type" and "renderType"
combination and are explained in detail in the :ref:`['columns']['config'] <columns-types>` section.

.. _columns-properties:

.. toctree::
   :titlesonly:

   Examples
   Properties/Index
