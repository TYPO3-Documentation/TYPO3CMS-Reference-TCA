.. include:: /Includes.rst.txt
.. _tca_property_multiple:

========
multiple
========

.. confval:: multiple

   :type: boolean
   :Scope: Display / Proc.
   :Types: :ref:`group <columns-group>`

   Allows the *same item* more than once in a list.

   If used with bidirectional MM relations it must be set for both the native and foreign field configuration.
   Also, with MM relations in general you must use a UID field in the join table, see description for "MM".
