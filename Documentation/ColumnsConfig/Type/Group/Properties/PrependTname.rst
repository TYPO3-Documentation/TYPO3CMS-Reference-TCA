..  include:: /Includes.rst.txt
..  _columns-group-properties-prepend-tname:

==============
prepend\_tname
==============

..  confval:: prepend_tname
    :name: group-prepend-tname
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: boolean
    :Scope: Proc.
    :InternalType: db

    Will prepend the table name to the stored relations (so instead of storing "23" you will
    store e.g. "tt\_content\_23"). This is automatically turned on if multiple different tables are
    allowed for one relation.
