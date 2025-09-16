..  include:: /Includes.rst.txt
..  _columns-select-rendertype-selectSingle:

============
selectSingle
============

Single select fields display a select field from which only one value can be
chosen.

The :ref:`according database field <t3coreapi:auto-generated-db-structure>`
is generated automatically.

The renderType selectSingle creates a drop-down box with items to select a
single value. Only if :confval:`select-single-size` is set to a
value greater than one, a box is rendered containing all selectable elements
from which one can be chosen.

..  contents:: Table of contents:
    :local:
    :depth: 1

..  _columns-select-rendertype-selectSingle-examples:

Examples for select fields with renderType `selectSingle`
=========================================================

..  _tca_example_select_single_3:

Simple select drop down with static and database values
-------------------------------------------------------

..  include:: /Images/Rst/SelectSingle3.rst.txt

..  include:: /CodeSnippets/SelectSingle3.rst.txt


..  _tca_example_select_single_12:

Select foreign rows with icons
------------------------------

..  include:: /Images/Rst/SelectSingle12.rst.txt

..  include:: /CodeSnippets/SelectSingle12.rst.txt


..  _tca_example_select_single_10:

Select a single value from a list of elements
---------------------------------------------

..  include:: /Images/Rst/SelectSingle10.rst.txt

..  include:: /CodeSnippets/SelectSingle10.rst.txt


..  _columns-select-properties:

Properties of the TCA column type `select` with renderType `selectSingle`
=========================================================================

..  confval-menu::
    :name: selectSingle
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_*.rst.txt
        :show-buttons:
