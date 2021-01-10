.. include:: /Includes.rst.txt
.. _tca_property_maxitems:

========
maxitems
========

:aspect:`Datatype`
   integer > 0

:aspect:`Scope`
   Display / Proc.

:aspect:`types`
   :ref:`group <columns-group>`, :ref:`inline <columns-inline>`

:aspect:`Description`
   Maximum number of child items. Defaults to a high value. JavaScript record validation prevents the
   record from being saved if the limit is not satisfied.

   .. note::
      Property maxitems is ignored with `type='select'` and `renderType='selectSingle'`.
