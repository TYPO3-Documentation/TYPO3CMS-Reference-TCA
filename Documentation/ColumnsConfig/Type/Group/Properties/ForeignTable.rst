.. include:: /Includes.rst.txt
.. _columns-group-properties-foreign-table:

==============
foreign\_table
==============

.. confval:: foreign\_table

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: string (table name)
   :Scope: Proc. / Display

   This property does not really exist for group-type fields. It is needed as
   a workaround for an Extbase limitation. It is used to resolve dependencies
   during Extbase persistence. It should hold the same values as property
   :ref:`allowed <columns-group-properties-allowed>`. Notice that only one
   table name is allowed here in contrast to the property
   :ref:`allowed <columns-group-properties-allowed>` itself.
