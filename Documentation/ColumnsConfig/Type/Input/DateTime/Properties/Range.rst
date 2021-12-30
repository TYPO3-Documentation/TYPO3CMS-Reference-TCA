.. include:: /Includes.rst.txt
.. _columns-input-datetime-properties-range:

=====
range
=====

.. confval:: range

   :type: array
   :Scope: Proc.

   An array which defines an integer range within which the value must be. Keys:

   lower
      Defines the earliest date.

   upper
      Defines the latest date.

   It is allowed to specify only one of both of them.

   In this example the upper limit is set to the last day in year 2020 while the lowest possible value is
   set to the date of 2014:

   .. code-block:: php

      'range' => [
         'upper' => gmmktime(23, 59, 59, 12, 31, 2020),
         'lower' => gmmktime(0, 0, 0, 1, 1, 2014),
      ],
