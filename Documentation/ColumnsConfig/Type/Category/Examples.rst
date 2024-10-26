:navigation-title: Examples
..  literalinclude:: /Includes.rst.txt
..  _columns-category-examples:

====================================
Examples: TCA column type `category`
====================================

..  _columns-category-simple-example:

Simple category field
=====================

In the following example a category tree is displayed and multiple categories
can be selected.

..  literalinclude:: _Snippets/_CategorySimple.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/someTable.php

The relationship gets stored in the intermediate table
:sql:`sys_category_record_mm`. Category counts are only stored on the
local side.

..  _columns-category-one-to-one-example:

One to one relation category field
==================================

In the following example a category tree is displayed, but only one
category can be selected.

..  literalinclude:: _Snippets/_CategoryOneTo.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/someTable.php

..  _columns-category-flexform-example:

Category field used in FlexForm
===============================

It is possible to use the type `category` in FlexForm data structures.
Due to some limitations in FlexForm, the `manyToMany` relationship is not
supported. Therefore, the default relationship - used if none is defined -
is `oneToMany`.

An example of the "oneToMany" use case is EXT:news,
which allows to only display news of specific categories in the list view:

..  literalinclude:: _Snippets/_CategoryFlexform.xml
    :caption: EXT:my_extension/Configuration/FlexForm/SomeFlexForm.xml
