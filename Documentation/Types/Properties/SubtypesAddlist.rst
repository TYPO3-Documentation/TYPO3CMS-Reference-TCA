.. include:: /Includes.rst.txt
.. _types-properties-subtypes-addlist:

=================
subtypes\_addlist
=================

.. confval:: subtypes_addlist

   :Path: $GLOBALS['TCA'][$table]['types'][$type]
   :type: array


   A list of fields to add when the "subtype\_value\_field" matches a key in this array.

   See :ref:`property subtype\_value\_field <types-properties-subtype-value-field>`.

   Syntax:
       "[value]" => "[comma-separated list of fields which are added]"
