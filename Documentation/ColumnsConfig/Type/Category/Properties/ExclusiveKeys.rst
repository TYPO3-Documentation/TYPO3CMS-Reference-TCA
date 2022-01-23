.. include:: /Includes.rst.txt
.. _columns-category-properties-exclusivekeys:

=============
exclusiveKeys
=============

.. confval:: exclusiveKeys

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: string (list of)
   :Scope: Display  / Proc.
   :RenderType: all

   List of keys that exclude any other keys in a select box where multiple
   items could be selected. See also :ref:`property exclusiveKeys of selectTree
   <columns-select-properties-exclusivekeys>`.
