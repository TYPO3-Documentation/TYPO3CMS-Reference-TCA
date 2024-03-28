..  include:: /Includes.rst.txt

..  _columns-inline-properties-foreign-default-sortby:

========================
foreign\_default\_sortby
========================

..  confval:: foreign_default_sortby
    :name: inline-foreign-default-sortby
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: string
    :Scope: Display

    If a field name for :ref:`foreign_sortby <columns-inline-properties-foreign-sortby>` is defined, then
    this is ignored. Otherwise, this is used as the "ORDER BY" statement to sort the records in the table when listed.
