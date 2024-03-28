..  include:: /Includes.rst.txt
..  _columns-select-properties-exclusivekeys:

=============
exclusiveKeys
=============

..  confval:: exclusiveKeys (type => select)

    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: string (list of)
    :Scope: Display  / Proc.
    :RenderType: all

    List of keys that exclude any other keys in a select box where multiple
    items could be selected.

..  note::

     The property :php:`exclusiveKeys` is not available for all select types,
     only for the renderTypes selectMultipleSideBySide and selectTree.

Examples
========

..  _tca_example_select_multiplesidebyside_2:

Side-by-side select with two exclusive items
--------------------------------------------

..  include:: /Images/Rst/SelectMultiplesidebyside1.rst.txt

..  include:: /CodeSnippets/SelectMultiplesidebyside2.rst.txt
