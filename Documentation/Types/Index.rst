..  include:: /Includes.rst.txt
..  _types:

==============================
Fields to be displayed (types)
==============================

..  note::
    :ref:`Click here if you are looking for ['columns']['config']['type']. <columns-types>`

The ['types'] section plays a crucial role in TCA to specify which fields from the :ref:`['columns'] section <columns>`
are displayed if editing a table row in FormEngine. At least one type has to be configured before any field
will show up, the default type is :code:`0`.

Multiple types can be configured, which one is selected depends on the value of the field specified in
:ref:`['ctrl']['type'] property <ctrl-reference-type>`. This approach is similar to what is often done with
`Single Table Inheritance <https://en.wikipedia.org/wiki/Single_Table_Inheritance>`__ in Object-orientated
programming.

..  contents:: Table of Contents
    :depth: 1

..  _types-introduction:

Introduction
============

The ['types'] system is powerful and allows differently shaped editing forms re-using fields, having own fields
for specific forms and arranging fields differently on top of a single database table. The `tt_content` with all
its different content elements is a good example on what can be done with ['types'].

The basic ['types'] structure looks like this:

..  code-block:: php

     'types' => [
          '0' => [
                'showitem' => 'aField, anotherField',
          ],
          'anotherType' => [
                'showitem' => 'aField, aDifferentField',
          ],
     ],

So, the basic array has a key field with type names (here '0', and 'anotherType'), with a series of possible
properties each, most importantly the :ref:`showitem <types-properties-showitem>` property.

..  _types-properties:

Properties of `types` section of TCA
====================================

..  confval-menu::
    :name: types
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_*.rst.txt
        :show-buttons:

..  versionchanged:: 13.0
    The properties `bitmask_excludelist_bits` and `bitmask_excludelist_bits`
    been removed, it is not considered anymore when rendering
    records in the backend record editing interface.

    In case, extensions still use this setting, they should switch to casual
    :php:`$GLOBALS['TCA']['someTable']['ctrl']['type']` fields instead, which
    can be powered by columns based on string values.

..  _types-example:

Extended examples for using the `types` section of TCA
======================================================

..  contents::
    :local:

..  include:: _Examples/_*.rst.txt
    :show-buttons:
