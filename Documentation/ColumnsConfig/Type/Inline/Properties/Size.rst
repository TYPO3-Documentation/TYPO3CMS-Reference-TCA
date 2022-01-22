.. include:: /Includes.rst.txt
.. _columns-inline-properties-size:

====
size
====

.. confval:: size

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: integer
   :Scope: Display

   Only useful in combination with :ref:`foreign\_selector <columns-inline-properties-foreign-selector>`.

   If set to 1 (default), the combination box is a select drop-down, else a select box of given size.
