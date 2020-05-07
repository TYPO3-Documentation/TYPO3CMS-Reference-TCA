.. include:: ../../Includes.txt

.. _columns-select:

===============
type = 'select'
===============

.. _columns-select-introduction:


Introduction
============

Selector boxes are very common elements in forms. By the "select" type you can create selector boxes. In
the most simple form this is a list of values among which you can choose only one.

There are various shapes of the select type, the images below give an overview. The basic idea is that all
possible child elements are always listed. This is in contrast to the group type which lists only selected
elements and helps with selecting others via element browser and other tools.

The select type is pretty powerful, there are a lot of options to steer both rendering and database handling.

Select TCA type is used to model a static selection of items or a n:1 database relation or a n:m database relation.
For database relations the `foreign_table` TCA option is required.

* In case of static items the values of the selected items are stored as CSV content.
* In case of n:1 (e.g. Organization has one Administrator) the uid of Administrator is stored in the select column of the Organization.
* In case of the n:m (e.g. Organization has multiple categories) the uid of the selected categories are stored either in CSV style inside the select column of the organization or as records in an MM-table, if specified in TCA.

.. note::
    For this type, a renderType is mandatory!

The chosen renderType influences the behaviour of the element and how it will
be displayed.

The following renderTypes are available:

* :ref:`selectSingle <columns-select-rendertype-selectSingle>`: Select one
  element from a list of elements
* :ref:`selectSingleBox <columns-select-rendertype-selectSingleBox>`: Select
  one or more elements from a list of elements
* :ref:`selectCheckBox <columns-select-rendertype-selectCheckBox>`: One or
  more checkboxes are displayed instead of a select list.
* :ref:`selectMultipleSideBySide <columns-select-rendertype-selectMultipleSideBySide>`:
  Two select fields, items can be selected from the right field, selected
  items are displayed in the left select.
* :ref:`selectTree <columns-select-rendertype-selectTree>`: A tree for
  selecting hierarchical data items.

.. toctree::
   :hidden:

   selectSingle
   selectSingleBox
   selectCheckBox
   selectMultipleSideBySide
   selectTree
