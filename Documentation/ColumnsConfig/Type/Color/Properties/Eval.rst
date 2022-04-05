.. include:: /Includes.rst.txt
.. _columns-color-properties-eval:

====
eval
====

.. confval:: eval (type => color)

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: string (list of keywords)
   :Scope: Display  / Proc.

   Configuration of field evaluation.

   null
      An empty value (string) will be stored as :code:`NULL` in the database,
      requires a proper sql definition.

.. note::

   The value of TCA type :php:`color` columns is automatically trimmed before
   being stored in the database. Therefore, the :php:`eval=trim` option is no
   longer needed and should be removed from the TCA configuration. The only
   valid option for :php:`eval` is :php:`null`.

Examples
========

.. code-block:: php

   'aField' => [
      'label' => 'aLabel',
      'config' => [
         'type' => 'color',
         'eval' => 'null',
      ],
   ],
