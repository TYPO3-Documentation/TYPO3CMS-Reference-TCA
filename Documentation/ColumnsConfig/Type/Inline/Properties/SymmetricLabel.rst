..  include:: /Includes.rst.txt
..  _columns-inline-properties-symmetric-label:

================
symmetric\_label
================

..  confval:: symmetric_label
    :name: inline-symmetric-label
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: string
    :Scope: Display  / Proc.

    If set, it overrides the label set in :php:`$GLOBALS['TCA'][<foreign_table>]['ctrl']['label']` for the
    inline-view and only if looking to a symmetric relation from the "other" side.
