.. include:: /Includes.rst.txt
.. _columns-select-properties-default:

=============
default value
=============

.. confval:: default

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: string
   :Scope: Display  / Proc.
   :RenderType: all

   Default value set if a new record is created. If empty, the first element in
   the items array is selected.
