..  include:: /Includes.rst.txt
..  _columns-category-properties-default:

=============
default value
=============

..  confval:: default
    :name: category-default
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: string
    :Scope: Display  / Proc.
    :RenderType: all

    Default value set if a new record is created. If empty, no category gets
    selected.
