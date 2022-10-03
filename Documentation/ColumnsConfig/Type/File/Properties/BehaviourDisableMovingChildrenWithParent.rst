..  include:: /Includes.rst.txt
..  _columns-file-properties-behaviour-disableMovingChildrenWithParent:

=========================================
disableMovingChildrenWithParent behaviour
=========================================

..  todo: Does this make sense? sys_file_references are always stored on the root level...

..  confval:: behaviour > disableMovingChildrenWithParent (type => file)

    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['behaviour']
    :type: boolean
    :Scope: Proc.

    Default false. Disables that child records get moved along with their parent records. Usually if in a parent-child
    relation a parent record is moved to a different page (eg. via cut+paste from clipboard), the children are relocated
    along with the parent. This flag disables the child move.

    This property can also be overridden by page TSconfig.
