.. include:: /Includes.rst.txt
.. _columns-number-properties-eval:

====
eval
====

.. confval:: eval ('type' => 'number')

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: string (list of keywords)
   :Scope: Display  / Proc.

   Configuration of field evaluation.

   Keywords:

   null
      An empty value (string) will be stored as :code:`NULL` in the database,
      requires a proper sql definition.

Examples
========


.. code-block:: php

   'aField' => [
      'label' => 'aLabel',
      'config' => [
         'type' => 'number',
         'eval' => 'null',
      ],
   ],
