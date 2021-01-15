.. include:: /Includes.rst.txt
.. _columns-input-properties-range:

=====
range
=====

.. confval:: range

   :type: array
   :Scope: Proc.
   :RenderTypes: default, inputLink

   An array which defines an integer range within which the value must be. Keys:

   lower
      Defines the lower integer value.

   upper
      Defines the upper integer value.

   It is allowed to specify only one of both of them.

   .. note::
      This feature is evaluated *on the server only* so any regulation of the value will have happened
      after saving the form.

Example
=======

Limit an integer to be within the range 10 to 1000

.. code-block:: php

   'eval' => 'int',
   'range' => [
      'lower' => 10,
      'upper' => 1000
   ],
