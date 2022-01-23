.. include:: /Includes.rst.txt
.. _columns-inline-properties-foreign-match-fields:

======================
foreign\_match\_fields
======================

.. confval:: foreign_match_fields

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: array
   :Scope: Proc.

   Array of field-value pairs to both insert and match against when writing/reading IRRE relations. Using the match
   fields, it is possible to re-use the same child table in more than one field of the parent table by using a match
   field with different values for each of the use cases.

Examples
========

Imagine you have a parent table called "company" and a child table called "persons". Now, if you want the company
table to have two fields of type "inline", one called "employees" and one called "customers", both containing
"persons". Then you could use a (hidden) field called "role" on the child (person) table to keep them apart.
The match TCA configuration of the parent table would then look like this:

.. code-block:: php

   $GLOBALS['TCA']['ty_myext_company'] = [
      'columns' => [
         'employees' => [
            'config' => [
               'type' => 'inline',
               'foreign_table' => 'ty_myext_person',
               'foreign_field' => 'company',
               'foreign_match_fields' => [
                  'role' => 'employee',
               ],
            ],
         ],
         'customers' => [
            'config' => [
               'type' => 'inline',
               'foreign_table' => 'ty_myext_person',
               'foreign_field' => 'company',
               'foreign_match_fields' => [
                  'role' => 'customer',
               ],
            ],
         ],
      ],
   ];

If the match field is made editable, for instance as a select drop-down of two values, the the relation would
switch between the two parent fields after change an save. Imagine a user record having "open" and "closed" issues
assigned, both pointing to the same table. The user then switches the status of an issue from "open" to "closed".
On save, the issue would "move over" to the "closed" section in his view.
