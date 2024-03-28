..  include:: /Includes.rst.txt
..  _columns-inline-properties-filter:

======
filter
======

..  confval:: filter
    :name: inline-filter
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: array
    :Scope: Display  / Proc.

    Possibility to define user functions to filter out child items.

    This is useful in special scenarios when used in conjunction with a
    :ref:`foreign_selector <columns-inline-properties-foreign-selector>` where only certain foreign records are
    allowed to be related to.

    For further documentation on this feature, see the
    :ref:`"filter" documentation under TYPE: "group"<columns-group-properties-filter>`.
