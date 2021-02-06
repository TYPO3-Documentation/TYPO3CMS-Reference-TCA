.. include:: /Includes.rst.txt
.. _columns-check-properties-eval:

====
eval
====

.. confval:: eval

   :type: string (list of keywords)
   :Scope: Proc. / Display

   Configuration of field evaluation.

   Keywords:

   maximumRecordsChecked
      If this evaluation is defined, the maximum number of records from the same table that can have this box
      checked will be limited. If someone tries to check the box of a record beyond the allowed maximum, the
      box will be unchecked automatically upon saving.

      The actual limit is defined with the validation property :ref:`validation <columns-check-properties-validation>`.

   maximumRecordsCheckedInPid
      Similar to :code:`maximumRecordsChecked` but with the validation scope limited to records stored in the same page.

.. _tca_example_checkbox_7:

Examples
========

.. include:: /Includes/Images/Styleguide/RstIncludes/Checkbox7.rst.txt
.. include:: /Includes/Snippets/Styleguide/RstIncludes/Checkbox7.rst.txt
