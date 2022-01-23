.. include:: /Includes.rst.txt
.. _tca_property_MM:

==
MM
==

.. confval:: MM

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: string (table name)
   :Scope: Proc.
   :Types: :ref:`group <columns-group>`, :ref:`select <columns-select>`, :ref:`inline <columns-inline>`

   The relation of the records of the specified table gets stored in an
   intermediate table. The name of this table is stored in the property `MM`.

   This property is used with :ref:`foreign_table (select) <columns-select-properties-foreign-table>`
   for `select` fields, :ref:`allowed (group) <columns-group-properties-allowed>` for
   `group` fields or :ref:`foreign_table (inline)
   <columns-inline-properties-foreign-table>` for `inline` fields.

   The table defined in this property is :ref:`automatically created by the
   Database Analyzer <tca_property_MM_auto_creation_mm_table>` starting with
   v11.4.

   The field for which an MM configuration exists stores the number of records
   in the relation on each update, so the field should be an integer.

.. note::
   Using MM relations you can **only** store the relations for foreign tables
   in the list. You cannot add properties like string values for the relation
   itself.

MM relations and FlexForms
==========================

MM relations has been tested to work with FlexForms if not in a repeated
element in a section.


Related configurations
======================

.. _tca_property_MM_hasUidField:

.. confval:: MM\_hasUidField

   :type: boolean
   :Scope: Proc.

   If the "multiple" feature is used with MM relations you **must** set this value
   to true and include a UID field.
   Otherwise sorting and removing relations will be buggy.


.. confval:: MM\_insert\_fields

   :type: array
   :Scope: Proc.

   Array of field=>value pairs to insert when writing new MM relations.


.. confval:: MM\_match\_fields

   :type: array
   :Scope: Display / Proc.

   Array of field=>value pairs to both insert and match against when writing/reading MM relations.


.. confval:: MM\_opposite\_field

   :type: string (field name)
   :Scope: Proc.

   If you want to make a MM relation editable from the foreign side (bidirectional) of the relation as well, you need
   to set `MM_opposite_field` on the foreign side to the field name on the local side.

   E.g. if the field "companies.employees" is your local side and you want to make the same relation editable from
   the foreign side of the relation in a field called persons.employers, you would need to set the `MM_opposite_field`
   value of the TCA configuration of the persons.employers field to the string "employees".

   .. note::
      Bidirectional references only get registered once on the native side in "sys\_refindex".


.. confval:: MM\_oppositeUsage

   :type: array
   :Scope: Proc.

   In a MM bidirectional relation using :ref:`select match fields <columns-select-properties-mm-match-fields>`
   / :ref:`group match fields <columns-group-properties-mm-match-fields>` the opposite side needs to know about
   the match fields for certain operations (for example, when a copy is created in a workspace) so that relations
   are carried over with the correct information.

   `MM_oppositeUsage` is an array which references which fields contain the
   references to the opposite side, so that they can be queried for match
   field configuration.


.. confval:: MM\_table\_where

   :type: string (SQL WHERE)
   :Scope: Proc.

   Additional where clause used when reading MM relations.

   Example::

      {#uid_local} = ###THIS_UID###

   The above example uses the special field quoting syntax :php:`{#...}` around identifiers of the
   :ref:`QueryHelper <t3coreapi:database-query-helper-quoteDatabaseIdentifiers>` to be as DBAL compatible
   as possible.

.. _tca_property_MM_auto_creation_mm_table:

Auto creation of intermediate MM tables from TCA
================================================

.. versionadded:: 11.4
   Starting with v11.4 intermediate mm tables defined in :php:`['config']['MM']`
   are created automatically and do not have to be defined in
   file:`ext_tables.sql` anymore.

TCA table column fields that define :php:`['config']['MM']` can
drop specification of the intermediate mm table layout in:
file:`ext_tables.sql`. The TYPO3 database analyzer
takes care of proper schema definition.

Extensions are strongly encouraged to drop :file:`ext_tables.sql`
:sql:`CREATE TABLE` definitions for those intermediate tables referenced by
:php:`TCA` table columns. Dropping these definitions allows the Core to adapt
and migrate definitions if needed.

The mm tables are automatically created if:

*  A table column TCA config defines :php:`MM` with :php:`type='select'`,
   :php:`type='group'` or :php:`type='inline'`.
*  The "MM" intermediate table has *no* TCA table definition (!).
*  A table of the resulting name is not defined in :file:`ext_tables.sql`.

The schema analyzer takes care of further possible fields apart from
:sql:`uid_local` and :sql:`uid_foreign`, like :sql:`tablenames`,
:sql:`fieldname` and :sql:`uid` if necessary, depending on local side of the
TCA definition.

The fields used for sorting :sql:`sorting` and :sql:`sorting_foreign` are
always created, they do not need to be defined in TCA.

Example
-------

The "local" side of a mm table is defined as such in TCA:

.. code-block:: php

    ...
    'columns' => [
        ...
        'myField' => [
            'label' => 'myField',
            'config' => [
                'type' => 'group',
                'foreign_table' => 'tx_myextension_myfield_child',
                'MM' => 'tx_myextension_myfield_mm',
            ]
        ],
        ...
    ],
    ...

A table like the following will be automatically created in the Database
Analyzer:

.. code-block:: sql

    CREATE TABLE tx_myextension_myfield_mm (
        uid_local int(11) DEFAULT '0' NOT NULL,
        uid_foreign int(11) DEFAULT '0' NOT NULL,
        sorting int(11) DEFAULT '0' NOT NULL,
        sorting_foreign int(11) DEFAULT '0' NOT NULL,

        KEY uid_local (uid_local),
        KEY uid_foreign (uid_foreign)
    );

Columns of the intermediate MM table
------------------------------------

The intermediate table may have the following fields:

uid\_local, uid\_foreign
   Storing uids of both sides. If done right, this is reflected in the table
   name - :code:`tx_foo_local_foreign_mm`

sorting, sorting\_foreign
   Are required fields used for ordering the items.

tablenames
   Is used if multiple tables are allowed in the relation.

uid (auto-incremented and PRIMARY KEY)
   May be used if you need the "multiple" feature (which allows the same record to be references multiple times
   in the box. See :ref:`MM_hasUidField <columns-select-properties-mm-hasuidfield>` for type='select' and
   :ref:`MM_hasUidField <columns-group-properties-mm-hasuidfield>` for type='group' fields.

further fields
   May exist, in particular if :ref:`MM_match_fields <columns-select-properties-mm-match-fields>` /
   :ref:`MM_match_fields <columns-group-properties-mm-match-fields>` is involved in the set up.

