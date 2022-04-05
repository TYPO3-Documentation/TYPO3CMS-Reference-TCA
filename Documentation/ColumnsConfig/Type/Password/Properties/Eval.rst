.. include:: /Includes.rst.txt
.. _columns-password-properties-eval:

====
eval
====

.. confval:: eval

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: string (list of keywords)
   :Scope: Proc.

   Only the following keyword is possible for :php:`type => password`

   null
      An empty value (string) will be stored as :code:`NULL` in the database,
      requires a proper SQL definition.


Examples
========

.. code-block:: php

   'aField' => [
      'label' => 'aLabel',
      'config' => [
         'type' => 'password',
         'eval' => 'null',
      ],
   ],
