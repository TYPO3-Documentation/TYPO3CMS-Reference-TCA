..  include:: /Includes.rst.txt

..  _columns-inline-properties-symmetric-field:

================
symmetric\_field
================

..  confval:: symmetric_field
    :name: inline-symmetric-field
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: string
    :Scope: Display  / Proc.

    This works like :ref:`foreign_field <columns-inline-properties-foreign-field>`, but in case of using
    bidirectional symmetric relations. :code:`symmetric_field` defines in which field on
    the :ref:`foreign_table <columns-inline-properties-foreign-table>` the uid of the "other" parent is stored.
