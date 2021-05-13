.. include:: /Includes.rst.txt
.. _columns-select-properties-sort-items:

=========
sortItems
=========

.. versionadded:: 10.4
   `sortItems` allows sorting of static select items
   by their values or labels.

.. confval:: sortItems

   :type: array
   :Scope: Display
   :RenderType: all

   The property :php:`sortItems` allows
   sorting of static select items by their values or labels.

   Built-in orderings are to sort items by their labels or values.
   It is also possible to define custom sorting via PHP code.

   When using grouped select fields with
   :ref:`itemGroups<columns-select-properties-item-groups>`, sorting happens
   on a per-group basis - all items within one group are sorted - as the
   group ordering is preserved.


Examples
========

.. _tca_example_select_single_18:

Sort items by label
-------------------

.. include:: /Images/Rst/SelectSingle18.rst.txt

.. include:: /CodeSnippets/SelectSingle18.rst.txt


.. _tca_example_select_single_19:

Sort items by value
-------------------

.. include:: /Images/Rst/SelectSingle19.rst.txt

.. include:: /CodeSnippets/SelectSingle19.rst.txt


.. _tca_example_select_single_20:

Sort items by a custom method
-----------------------------

The following custom method sorts the items by their reversed labels:

.. include:: /Images/Rst/SelectSingle20.rst.txt

.. include:: /CodeSnippets/SelectSingle20.rst.txt

.. include:: /CodeSnippets/SelectItemSorter.rst.txt
