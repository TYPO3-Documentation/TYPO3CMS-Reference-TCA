.. include:: /Includes.rst.txt
.. _columns-check-properties-validation:

==========
validation
==========

.. confval:: validation

   :type: array
   :Scope: Proc.

   Values for the :ref:`eval <columns-check-properties-eval>` rules. The keys of the array must correspond to the
   keyword of the related evaluation rule. For :code:`maximumRecordsChecked` and :code:`maximumRecordsCheckedInPid`
   the value is expected to be an integer.


Examples
========

.. _tca_example_checkbox_8:

Only one record can be checked
===============================

In the example below, only one record from the same table will be allowed to have that particular box checked.


.. include:: /Includes/Images/Styleguide/RstIncludes/Checkbox8.rst.txt

.. include:: /Includes/Snippets/Styleguide/RstIncludes/Checkbox8.rst.txt
