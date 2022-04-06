.. include:: /Includes.rst.txt
.. _columns-number-properties-range:

=====
range
=====

.. confval:: range

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: array
   :Scope: Proc.

   An array which defines an integer range within which the value must be. Keys:

   lower
      Defines the lower integer value.

   upper
      Defines the upper integer value.

   It is allowed to specify only one of both of them.


Example
=======

Limit an integer to be within the range 10 to 1000

.. code-block:: php

   'aField' => [
     'label' => 'aLabel',
     'config' => [
      'type' => 'number'
       'range' => [
         'lower' => 10,
         'upper' => 1000
       ],
     ],
   ],
