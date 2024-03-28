..  include:: /Includes.rst.txt
..  _columns-inline-properties-foreign-field:

==============
foreign\_field
==============

..  confval:: foreign\_field
    :name: inline-foreign-field
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: string
    :Scope: Display  / Proc.

    The :code:`foreign_field` is the field of the child record pointing to the parent record. This defines
    where to store the uid of the parent record.
