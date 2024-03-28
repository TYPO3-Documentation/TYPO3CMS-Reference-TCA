..  include:: /Includes.rst.txt
..  _columns-inline-properties-mm:

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

..  confval:: MM
    :name: inline-mm
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: string (table name)
    :Scope: Proc.

    This value contains the name of the table in which to store an MM
    relation. It is used together with
    :ref:`foreign_table <columns-inline-properties-foreign-table>`. The
    database field with a MM property only stores the number of records
    in the relation.

    Please have a look into the additional information
    in the :ref:`MM common property description <tca_property_MM>`.

    ..  warning::
        Copying with MM relations will not create a copy of the value. Thus
        copying the record `Org` with `Org->orgA` and  `Org->orgB` as
        `New` results in `New->orgA` and `New->orgB` instead of `New->newA`
        and `New->newB`. Deleting the relation `New->orgA` will result in a
        broken relation `Org->orgA`.

..  confval:: MM_hasUidField (type => inline)

    :type: boolean
    :Scope: Proc.

    If the :ref:`multiple <tca_property_multiple>` property is set with MM
    relations you **must** set this value to :php:`true` and include a UID field.
    Otherwise, sorting and removing relations will be buggy.


..  confval:: MM_opposite_field
    :name: inline-mm-opposite-field
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


Examples
========

..  _tca_example_inline_mm_inline_1:

Inline field with MM table configured
-------------------------------------

..  include:: /Images/ManualScreenshots/InlineMmInline1.rst.txt

..  include:: /CodeSnippets/InlineMmInline1.rst.txt

..  _tca_example_inline_mm_child_parents:

Opposite field to display MM relations two ways
-----------------------------------------------

..  include:: /Images/ManualScreenshots/InlineMmChildParents.rst.txt

..  include:: /CodeSnippets/InlineMmChildParents.rst.txt
