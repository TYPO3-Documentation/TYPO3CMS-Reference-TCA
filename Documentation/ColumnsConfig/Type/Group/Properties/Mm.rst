.. include:: /Includes.rst.txt
.. _columns-group-properties-mm:

==
MM
==

.. confval:: MM

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: string (table name)
   :Scope: Proc.

   This value contains the name of the table in which to store a MM
   relation. It is used together with
   :ref:`allowed (group) <columns-group-properties-allowed>`. If you use Extbase
   :ref:`foreign_table <columns-group-properties-foreign-table>` has to contain the
   same table name additionally.

   The database field with a MM property only stores the number of records
   in the relation.

   There is additional information in the :ref:`MM common property description
   <tca_property_MM>`.

   The table name used in the field :php:`MM` should be unique. It must be a valid SQL
   table name. It is best practise to use
   the name of both referenced tables and of the field in which the reference is saved
   on local side. This way uniqueness can be ensured and it is possible to find the field
   where the table is used quickly.

   Example:

   .. code-block:: php

      // table tx_table1
      $fields = [
         'relation_table1_table2' => [
              'exclude' => 1,
              'label' => 'Project manager',
              'config' => [
                  'type' => 'group',
                  'allowed' => 'tx_table1',
                  'foreign_table' => 'tx_table2', // needed by Extbase
                  'MM' => 'table1_table2_relationtable1table2',
              ],
          ],
       ];


Related configurations
======================

.. _columns-group-properties-mm-hasuidfield:
.. confval:: MM\_hasUidField

   :type: boolean
   :Scope: Proc.

   If the :ref:`multiple <tca_property_multiple>` property is set with MM
   relations you **must** set
   this value to true and include a UID field.
   Otherwise sorting and removing relations will be buggy.


.. _columns-group-properties-mm-insert-fields:
.. confval:: MM\_insert\_fields

   :type: array
   :Scope: Proc.

   Array of field=>value pairs to insert when writing new MM relations.

.. _columns-group-properties-mm-match-fields:
.. confval:: MM\_match\_fields

   :type: array
   :Scope: Display / Proc.

   Array of field=>value pairs to both insert and match against when
   writing/reading MM relations.


.. _columns-group-properties-mm-opposite-field:
.. confval:: MM\_opposite\_field

   :type: string (field name)
   :Scope: Proc.

   If you want to make a MM relation editable from the foreign side
   (bidirectional) of the relation as well, you need
   to set `MM_opposite_field` on the foreign side to the field name on
   the local side.

   For example if the field "companies.employees" is your local side and you
   want to make the same relation editable from the foreign side of the
   relation in a field called persons.employers, you would need to set the
   `MM_opposite_field` value of the TCA configuration of the persons.employers
   field to the string "employees".

   .. note::
      Bidirectional references only get registered once on the native side in "sys\_refindex".


.. _columns-group-properties-mm-opposite-usage:
.. confval:: MM\_oppositeUsage

   :type: array
   :Scope: Proc.

   In a MM bidirectional relation using
   :ref:`group match fields <columns-group-properties-mm-match-fields>`
   the opposite side needs to know about the match fields for certain operations
   (for example, when a copy is created in a workspace) so that relations
   are carried over with the correct information.

   `MM_oppositeUsage` is an array which references which fields contain the
   references to the opposite side, so that they can be queried for match
   field configuration.


.. _columns-group-properties-mm-table-where:
.. confval:: MM\_table\_where

   :type: string (SQL WHERE)
   :Scope: Proc.

   Additional where clause used when reading MM relations.

   Example::

      {#uid_local} = ###THIS_UID###

   The above example uses the special field quoting syntax :php:`{#...}` around identifiers of the
   :ref:`QueryHelper <t3coreapi:database-query-helper-quoteDatabaseIdentifiers>` to be as DBAL compatible
   as possible.

.. todo: add Examples
