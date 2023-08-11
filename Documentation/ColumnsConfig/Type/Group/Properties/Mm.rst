..  include:: /Includes.rst.txt
..  _columns-group-properties-mm:

==
MM
==

..  confval:: MM (type => group)

    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: string (table name)
    :Scope: Proc.

    This value contains the name of the table in which to store a MM relation.
    It is used together with
    :ref:`allowed (group) <columns-group-properties-allowed>`. If you use
    :ref:`Extbase <t3coreapi:extbase>`,
    :ref:`foreign_table <columns-group-properties-foreign-table>` has to contain
    the same table name additionally.

    The database field with a MM property only stores the number of records
    in the relation.

    Please have a look into the additional information
    in the :ref:`MM common property description <tca_property_MM>`.

    The table name used in the field :php:`MM` should be unique. It must be a
    valid SQL table name. It is best practise to use the name of both
    referenced tables and of the field in which the reference is saved on local
    side. See also :ref:`naming conventions for mm tables <t3coreapi:naming-tables-mm>`.
    This way uniqueness can be ensured and it is possible to find the field
    where the table is used quickly.

    Example:

    ..  code-block:: php

        // table tx_myextension_domain_model_mymodel1
        $fields = [
            'relation_table1_table2' => [
                'label' => 'Some relation from table 1 to table 2',
                'config' => [
                    'type' => 'group',
                    'allowed' => 'tx_myextension_domain_model_mymodel2',
                    'foreign_table' => 'tx_myextension_domain_model_mymodel2', // needed by Extbase
                    'MM' => 'tx_myextension_domain_model_mymodel1_mymodel2_mm',
                ],
            ],
        ];


Related configurations
======================

..  _columns-group-properties-mm-hasuidfield:
..  confval:: MM_hasUidField (type => group)

    :type: boolean
    :Scope: Proc.

    If the :ref:`multiple <tca_property_multiple>` property is set with MM
    relations you **must** set this value to :php:`true` and include a UID field.
    Otherwise, sorting and removing relations will be buggy.


..  _columns-group-properties-mm-match-fields:
..  confval:: MM_match_fields (type => group)

    :type: array
    :Scope: Display / Proc.

    Array of field => value pairs to both insert and match against when
    writing/reading MM relations.


..  _columns-group-properties-mm-opposite-field:
..  confval:: MM_opposite_field (type => group)

    :type: string (field name)
    :Scope: Proc.

    If you want to make a MM relation editable from the foreign side
    (bidirectional) of the relation as well, you need to set
    :php:`MM_opposite_field` on the foreign side to the field name on
    the local side.

    For example, if the field :sql:`companies.employees` is your local side and
    you want to make the same relation editable from the foreign side of the
    relation in a field called :sql:`persons.employers`, you would need to set
    the :php:`MM_opposite_field` value of the TCA configuration of the
    :sql:`persons.employers` field to the string "employees".

    ..  note::
        Bidirectional references only get registered once on the native side in
        :sql:`sys_refindex`.


..  _columns-group-properties-mm-opposite-usage:
..  confval:: MM_oppositeUsage (type => group)

    :type: array
    :Scope: Proc.

    In a MM bidirectional relation using
    :ref:`group match fields <columns-group-properties-mm-match-fields>`
    the opposite side needs to know about the match fields for certain operations
    (for example, when a copy is created in a
    :doc:`workspace <ext_workspaces:Index>`) so that relations are carried over
    with the correct information.

    :php:`MM_oppositeUsage` is an array which references which fields contain
    the references to the opposite side, so that they can be queried for match
    field configuration.


..  _columns-group-properties-mm-table-where:
..  confval:: MM_table_where (type => group)

    :type: string (SQL WHERE)
    :Scope: Proc.

    Additional where clause used when reading MM relations.

    Example:

    ..  code-block:: text

        {#uid_local} = ###THIS_UID###

    The above example uses the special field quoting syntax :php:`{#...}`
    around identifiers to be as :ref:`DBAL <t3coreapi:database>`-compatible as
    possible.

..  todo: add Examples
