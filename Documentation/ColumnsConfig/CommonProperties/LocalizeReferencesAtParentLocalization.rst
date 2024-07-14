..  include:: /Includes.rst.txt
..  _tca_property_localizeReferencesAtParentLocalization:

======================================
localizeReferencesAtParentLocalization
======================================

..  confval:: localizeReferencesAtParentLocalization
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: boolean
    :Scope: Proc.
    :Types: :ref:`group <columns-group>`, :ref:`select <columns-select>`

    Defines whether referenced records should be localized when the current
    record gets localized. This only applies if references are **not** stored using
    `MM` tables. In addition, when using the type `group`, :ref:`foreign_table <columns-group-properties-foreign-table>`
    has to reference the same table in :ref:`allowed <columns-group-properties-allowed>`.
