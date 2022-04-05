.. include:: /Includes.rst.txt
.. _columns-email-properties-eval:

====
eval
====

.. confval:: eval ('type' => 'email')

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: string (list of keywords)
   :Scope: Display  / Proc.

   Configuration of field evaluation.

   Some of these evaluation keywords will trigger a JavaScript pre- evaluation in the form. Other evaluations will be
   performed in the backend. The evaluation functions will be executed in the list-order. Keywords:

   null
      An empty value (string) will be stored as :code:`NULL` in the database, requires a proper sql definition.

   unique
      Requires the field to be unique for the *whole* table. Evaluated on the server only.

      .. note::
         When selecting on unique-fields, make sure to select using :code:`AND pid>=0` since the field *can* contain
         duplicate values in other versions of records (always having PID = -1). This also means that if you are using
         versioning on a table where the unique-feature is used you cannot set the field to be truly unique
         in the database either!

   uniqueInPid
      Requires the field to be unique for the current PID among other records on the same page.
      Evaluated on the server only.


Examples
========

Trim white space
----------------

Require an email address to be unique for this record type in this folder

.. code-block:: php

   'aField' => [
      'label' => 'aLabel',
      'config' => [
         'type' => 'email',
         'eval' => 'uniqueInPid',
      ],
   ],
