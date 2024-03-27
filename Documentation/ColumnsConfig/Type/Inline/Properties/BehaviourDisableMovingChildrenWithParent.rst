..  include:: /Includes.rst.txt

=========================================
disableMovingChildrenWithParent behaviour
=========================================

..  confval:: behaviour[disableMovingChildrenWithParent]
    :name: inline-behaviour-disableMovingChildrenWithParent
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['behaviour']
    :type: boolean
    :Scope: Proc.

    Default false. Disables that child records get moved along with their parent records. Usually if in a parent-child
    relation a parent record is moved to a different page (eg. via cut+paste from clipboard), the children are relocated
    along with the parent. This flag disables the child move.

    This property can be especially useful if all child records should be gathered in one storage folder and their
    parents are spread out at different places in the page tree. In combination with the
    :ref:`Tsconfig setting <t3tsconfig:usertoplevelobjects>` :typoscript:`TCAdefaults.<table>.pid = <page id>` children
    can be forced to be created in this folder and stay there.
