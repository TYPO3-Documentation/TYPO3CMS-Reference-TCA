..  include:: /Includes.rst.txt
..  _columns-select-rendertype-selectTree:

==========
selectTree
==========

The :php:`selectTree` render type is used to display hierarchical data in a
tree structure.

The :ref:`according database field <t3coreapi:auto-generated-db-structure>`
is generated automatically.

A field with the :php:`selectTree` render type allows you to represent data in
a hierarchical manner, similar to a tree. It is typically used when working
with database tables that have a hierarchical structure. The properties :ref:`treeConfig
<columns-select-properties-treeconfig>` and
:ref:`foreign_table <columns-select-properties-foreign-table>` are mandatory and must be provided to establish the
connection to the relevant database table. Optionally, you can also use
:ref:`items <columns-select-properties-items>` or :ref:`itemsProcFunc
<tca_property_itemsProcFunc>` to pass the values, but these are not
sufficient on their own. The top-level item in the tree will always represent
the descriptive name of the table.

Regarding joining several tables, the :php:`selectTree` render type can handle multiple
tables through the configuration options.

..  contents:: Table of contents:
    :local:
    :depth: 1

..  _tca_example_select_tree_1:

Example: A happy little tree!
=============================

..  include:: /Images/Rst/SelectTree1.rst.txt

..  include:: /CodeSnippets/SelectTree1.rst.txt


..  _columns-select-selectTree-properties:

Properties of the TCA column type `select` with renderType `selectTree`
=======================================================================

..  confval-menu::
    :name: selectTree
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_*.rst.txt
        :show-buttons:
