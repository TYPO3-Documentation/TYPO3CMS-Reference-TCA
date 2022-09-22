.. include:: /Includes.rst.txt
.. _columns-select-properties-mm:

==
MM
==

.. confval:: MM (type => select)

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: string (table name)
   :Scope: Proc.

   This value contains the name of the table in which to store an MM
   relation. It is used together with
   :ref:`foreign_table <columns-select-properties-foreign-table>`.

   The database field with a MM property only stores the number of records
   in the relation.

   There is additional information in the :ref:`MM common property description
   <tca_property_MM>`.


Examples
========

.. _tca_example_select_single_15:

Select field with foreign table via MM table
--------------------------------------------

.. include:: /Images/Rst/SelectSingle15.rst.txt

.. include:: /CodeSnippets/SelectSingle15.rst.txt


Related configurations
======================

.. confval:: MM_hasUidField (type => select)

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: boolean
   :Scope: Proc.

   If the :ref:`multiple <tca_property_multiple>` property is set with MM
   relations you **must** set
   this value to true and include a UID field.
   Otherwise sorting and removing relations will be buggy.


.. confval:: MM_insert_fields (type => select)

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: array
   :Scope: Proc.

   Array of field=>value pairs to insert when writing new MM relations.

.. _columns-select-properties-mm-match-fields:
.. confval:: MM_match_fields (type => select)

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: array
   :Scope: Display / Proc.

   Array of field=>value pairs to both insert and match against when
   writing/reading MM relations.


.. confval:: MM_opposite_field (type => select)

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
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


.. confval:: MM_oppositeUsage (type => select)

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: array
   :Scope: Proc.

   In a MM bidirectional relation using
   :ref:`group match fields <columns-select-properties-mm-match-fields>`
   the opposite side needs to know about the match fields for certain operations
   (for example, when a copy is created in a workspace) so that relations
   are carried over with the correct information.

   `MM_oppositeUsage` is an array which references which fields contain the
   references to the opposite side, so that they can be queried for match
   field configuration.


.. confval:: MM_table_where (type => select)

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: string (SQL WHERE)
   :Scope: Proc.

   Additional where clause used when reading MM relations.

   Example::

      {#uid_local} = ###THIS_UID###

   The above example uses the special field quoting syntax :php:`{#...}` around identifiers of the
   :ref:`QueryHelper <t3coreapi:database-query-helper-quoteDatabaseIdentifiers>` to be as DBAL compatible
   as possible.
