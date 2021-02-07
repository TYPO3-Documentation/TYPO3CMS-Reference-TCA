.. include:: /Includes.rst.txt
.. _ctrl-reference-enablecolumns:

=============
enablecolumns
=============

.. confval:: enablecolumns

   :type: array
   :Scope: Proc. / Display


   Specifies which *publishing control features* are automatically implemented for the table.

   This includes that records can be "disabled" or "hidden", have a starting and/or ending time and be access
   controlled so only a certain front end user group can access them. This property is used by the
   :ref:`RestrictionBuilder <t3coreapi:database-restriction-builder>` to create SQL fragments.

   These are the keys in the array you can use. Each of the values must be a field name in the table which
   should be used for the feature:

   disabled
      Defines which field serves as hidden/disabled flag.

   starttime
      Defines which field contains the starting time.

   endtime
      Defines which field contains the ending time.

   fe\_group
      Defines which field is used for access control via a selection of FE user groups.

   .. note::
      In general these fields do *not* affect the access or display in the backend! They are primarily
      related to the frontend. However the icon of records having these features enabled will
      normally change as these examples show:

   .. include:: /Includes/Images/Styleguide/RstIncludes/CtrlEnableFields.rst.txt

   See also the :ref:`delete <ctrl-reference-delete>` feature which is related, but is active for both frontend and backend.

Examples
========

Common enable fields
====================

.. include:: /Includes/Images/Styleguide/RstIncludes/CtrlEnableFields.rst.txt

.. include:: /Includes/Snippets/Styleguide/RstIncludes/Manual/TxStyleguideCtrlCommon.rst.txt
