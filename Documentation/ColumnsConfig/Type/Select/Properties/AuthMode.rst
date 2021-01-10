.. include:: /Includes.rst.txt
.. _columns-select-properties-authmode:

========
authMode
========

:aspect:`Datatype`
   string (keyword)

:aspect:`Scope`
   Display / Proc.

:aspect:`RenderType`
   all

:aspect:`Description`
   Authorization mode for the selector box. Keywords are:

   explicitAllow
      All static values from the "items" array of the selector box will be added to a matrix in the backend user
      configuration where a value must be explicitlyselected if a user (other than admin) is allowed to use it!)

   explicitDeny
      All static values from the "items" array of the selector box will be added to a matrix in the backend user
      configuration where a value must be explicitlyselected if a user should be denied access.

   individual
      State is individually set for each item in the selector box. This is done by the keywords
      " **EXPL\_ALLOW** " and " **EXPL\_DENY** " entered at the 5. position in the item array (see "items"
      configuration). Items without any of these keywords can be selected as usual without any access
      restrictions applied.

   .. note::
      The authentication modes will work only with values that are statically present in the "items" configuration.
      Any values added from foreign tables, file folder or by user processing will  *not* be configurable and the
      evaluation of such values is not guaranteed for!

   maxitems > 1
      "authMode" works also for selector boxes with maxitems > 1. In this case the list of values is traversed and each
      value is evaluated. Any disallowed values will be removed.

      If all submitted values turns out to be removed the result will be that the field is not written – basically
      leaving the old value. For maxitems <=1 (single value) this means that a non-allowed value is just not written.
      For multiple values (maxitems >1) it depends on whether any elements are left in the list after evaluation
      of each value.
