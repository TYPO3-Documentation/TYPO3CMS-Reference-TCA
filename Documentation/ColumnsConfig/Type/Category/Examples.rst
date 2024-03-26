..  include:: /Includes.rst.txt
..  _columns-category-examples:

========
Examples
========

..  _columns-category-simple-example:

Simple category field
=====================

In the following example a category tree is displayed and multiple categories
can be selected.

..  include:: /CodeSnippets/Manual/CategorySimple.rst.txt


The relationship gets stored in the intermediate table
:sql:`sys_category_record_mm`. Category counts are only stored on the
local side.

..  note::
    This is the use case, which was previously accomplished using
    :php:`ExtensionManagementUtility->makeCategorizable()` up to v11.


One to one relation category field
==================================

In the following example a category tree is displayed, but only one
category can be selected.

..  include:: /CodeSnippets/Manual/CategoryOneTo.rst.txt


Category field used in FlexForm
===============================

It is possible to use the type `category` in FlexForm data structures.
Due to some limitations in FlexForm, the `manyToMany` relationship is not
supported. Therefore, the default relationship - used if none is defined -
is `oneToMany`.

An example of the "oneToMany" use case is EXT:news,
which allows to only display news of specific categories in the list view:

..  include:: /CodeSnippets/Manual/CategoryFlexform.rst.txt
