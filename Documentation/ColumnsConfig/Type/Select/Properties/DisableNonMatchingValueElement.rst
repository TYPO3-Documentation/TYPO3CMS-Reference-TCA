..  include:: /Includes.rst.txt
..  _columns-select-properties-disablenomatchingvalueelement:

=============================
disableNoMatchingValueElement
=============================

..  confval:: disableNoMatchingValueElement
    :name: select-disableNoMatchingValueElement
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: boolean
    :Scope: Display
    :RenderType: all

    If set, then no element is inserted if the current value does not match
    any of the existing elements. A corresponding options is also found in Page
    TSconfig.
