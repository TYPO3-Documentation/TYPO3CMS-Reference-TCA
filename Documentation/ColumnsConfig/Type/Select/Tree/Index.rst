.. include:: /Includes.rst.txt
.. _columns-select-rendertype-selectTree:

==========
selectTree
==========


The :php:`selectTree` render type is used to display hierarchical data in a
tree structure.

A field with the :php:`selectTree` render type allows you to represent data in
a hierarchical manner, similar to a tree. It is typically used when working
with database tables that have a hierarchical structure. The field requires
certain fields to be set in order to function properly. The treeConfig and
foreign_table fields are mandatory and must be provided to establish the
connection to the relevant database table. Optionally, you can also use
items or itemsProcFunc to pass the values, but these are not
sufficient on their own. The top-level item in the tree will always represent
the descriptive name of the table.

Regarding joining several tables, the selectTree field can handle multiple
tables through the configuration options. By appropriately setting up the
treeConfig and defining the relationships between the tables, you can create
complex trees that span multiple database tables.

Please note that the selectTree field only handles the presentation of
hierarchical data in a tree structure and does not directly handle the
database operations. The actual data retrieval and manipulation need to
be implemented separately.

.. include:: /Images/Rst/SelectTree1.rst.txt


.. toctree::
    :titlesonly:

Examples
Properties
