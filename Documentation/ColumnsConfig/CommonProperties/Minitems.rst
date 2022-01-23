.. include:: /Includes.rst.txt
.. _tca_property_minitems:

========
minitems
========

.. confval:: minitems

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: integer > 0
   :Scope: Display
   :Types: :ref:`group <columns-group>`, :ref:`inline <columns-inline>`

   Minimum number of child items. Defaults to 0. JavaScript record validation prevents the
   record from being saved if the limit is not satisfied.
