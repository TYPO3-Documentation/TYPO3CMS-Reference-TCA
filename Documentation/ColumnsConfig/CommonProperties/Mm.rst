.. include:: /Includes.rst.txt
.. _tca_property_MM:

==
MM
==

.. confval:: MM

   :type: string (table name)
   :Scope: Proc.
   :Types: :ref:`group <columns-group>`

   Means that the relation to the records of :ref:`foreign_table <columns-select-properties-foreign-table>`
   (or table specified in :ref:`allowed <columns-group-properties-allowed>` property in case of the group field) is done
   with a M-M relation with a third "join" table.

   The intermediate table has three columns as a minimum:

   uid\_local, uid\_foreign (Required)
     Storing uids of both sides. If done right, this is reflected in the table name - :code:`tx_foo_local_foreign_mm`

   sorting (Required)
     Is a required field used for ordering the items.

   sorting\_foreign
     Is required if the relation is bidirectional (see description and example below table)

   tablenames
     Is used if multiple tables are allowed in the relation.

   uid (auto-incremented and PRIMARY KEY)
     May be used if you need the "multiple" feature (which allows the same record to be references multiple times
     in the box. See :ref:`MM_hasUidField <columns-select-properties-mm-hasuidfield>` for type='select' and
     :ref:`MM_hasUidField <columns-group-properties-mm-hasuidfield>` for type='group' fields.

   further fields
     May exist, in particular if :ref:`MM_match_fields <columns-select-properties-mm-match-fields>` /
     :ref:`MM_match_fields <columns-group-properties-mm-match-fields>` is involved in the set up.

   Example SQL #1
     Most simple MM table

     .. code-block:: php

        CREATE TABLE tx_testmmrelations_one_rel_mm (
           uid_local int(11) DEFAULT '0' NOT NULL,
           uid_foreign int(11) DEFAULT '0' NOT NULL,
           sorting int(11) DEFAULT '0' NOT NULL,

           KEY uid_local (uid_local),
           KEY uid_foreign (uid_foreign)
        );

   Example SQL #2
     Advanced with uid field, "ident" used with :ref:`MM_match_fields <columns-select-properties-mm-match-fields>`
     and "sorting_foreign" for bidirectional MM relations:

     .. code-block:: php

      CREATE TABLE tx_testmmrelations_two_rel_mm (
         uid int(11) NOT NULL auto_increment,
         uid_local int(11) DEFAULT '0' NOT NULL,
         uid_foreign int(11) DEFAULT '0' NOT NULL,
         tablenames varchar(30) DEFAULT '' NOT NULL,
         sorting int(11) DEFAULT '0' NOT NULL,
         sorting_foreign int(11) DEFAULT '0' NOT NULL,
         ident varchar(30) DEFAULT '' NOT NULL,

         KEY uid_local (uid_local),
         KEY uid_foreign (uid_foreign),
         PRIMARY KEY (uid)
      );

   Value of field
     The field name of the config is not used for data-storage anymore but rather it's set to the number of records
     in the relation on each update, so the field should be an integer.

   MM relations and flexforms
     MM relations has been tested to work with flexforms if not in a repeated element in a section.

   .. note::
      Using MM relations you can ONLY store real relations for foreign tables in the list - no additional
      string values or non-record values.


.. confval:: MM\_hasUidField

   :type: boolean
   :Scope: Proc.

   If the "multiple" feature is used with MM relations you MUST set this value to true and include a UID field!
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

   `MM_oppositeUsage` is an array which references whichfields contain the references to the opposite side, so that
   they can be queried for match field configuration.

   This is used by the Core for system categories. Whenever a table is registered as being categorizable, an entry
   in `MM_oppositeUsage` is created for the "sys_category" table.

   Example
     With "pages", "tt_content" and "sys_file_metadata" all registered as categorizable (using the default name
     of "categories" for the relations field) plus extension "examples" installed, the TCA for "sys_category"
     contains the following definition once fully assembled:

     .. code-block:: php

        $GLOBALS['TCA']['sys_category']['columns']['items']['config']['MM_oppositeUsage'] = [
           'pages' => ['tx_examples_cats', 'categories'],
           'sys_file_metadata' => ['categories'],
           'tt_content' => ['categories'],
        ];


.. confval:: MM\_table\_where

   :type: string (SQL WHERE)
   :Scope: Proc.

   Additional where clause used when reading MM relations.

   Example::

      {#uid_local} = ###THIS_UID###

   The above example uses the special field quoting syntax :php:`{#...}` around identifiers of the
   :ref:`QueryHelper <t3coreapi:database-query-helper-quoteDatabaseIdentifiers>` to be as DBAL compatible
   as possible.
