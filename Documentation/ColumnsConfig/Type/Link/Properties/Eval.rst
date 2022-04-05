.. include:: /Includes.rst.txt
.. _columns-link-properties-link:

====
eval
====

.. confval:: eval

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: string (list of keywords)
   :Scope: Display  / Proc.

   Configuration of field evaluation.

   Some of these evaluation keywords will trigger a JavaScript pre- evaluation in the form. Other evaluations will be
   performed in the backend. The evaluation functions will be executed in the list-order. Keywords:

   null
      An empty value (string) will be stored as :code:`NULL` in the database, requires a proper sql definition.


Examples
========

.. code-block:: php

   'aField' => [
      'label' => 'aLabel',
      'config' => [
         'type' => 'link',
         'eval' => 'null',
      ],
   ],
