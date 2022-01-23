.. include:: /Includes.rst.txt
.. _tca_property_maxitems:

========
maxitems
========

.. confval:: maxitems

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: integer > 0
   :Scope: Display / Proc.
   :Types: :ref:`group <columns-group>`, :ref:`inline <columns-inline>`

   Maximum number of child items. Defaults to a high value. JavaScript record validation prevents the
   record from being saved if the limit is not satisfied.

   .. note::
      Property maxitems is ignored with `type='select'` and `renderType='selectSingle'`.
