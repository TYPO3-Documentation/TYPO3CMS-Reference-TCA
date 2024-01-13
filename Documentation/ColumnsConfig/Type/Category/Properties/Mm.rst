..  include:: /Includes.rst.txt
..  _columns-category-properties-mm:

==
MM
==

..  versionadded:: 11.4
    TCA table column fields that define :php:`['config']['MM']` can omit the
    specification of the intermediate MM table layout in
    :ref:`ext_tables.sql <t3coreapi:ext_tables-sql>`. The TYPO3 database
    analyzer takes care of proper schema definition.

    Extensions are strongly encouraged to drop :sql:`CREATE TABLE` definitions
    from the :file:`ext_tables.sql` file for those intermediate tables
    referenced by TCA table columns. Dropping these definitions allows the Core
    to adapt and migrate definitions if needed.

..  confval:: MM (type => category)

    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: string (table name)
    :Scope: Proc.

    This value contains the name of the table in which to store a MM relation.
    It is used together with
    :ref:`foreign_table <columns-category-properties-foreign-table>`.

    The database field with a MM property only stores the number of records
    in the relation.

    Please have a look into the additional information
    in the :ref:`MM common property description <tca_property_MM>`
    and the :ref:`property MM of select field <columns-select-properties-mm>`
