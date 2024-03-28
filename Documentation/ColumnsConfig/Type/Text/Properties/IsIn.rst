..  include:: /Includes.rst.txt
..  _columns-text-properties-is-in:

======
is\_in
======

..  confval:: is_in
    :name: text-is-in
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: string
    :Scope: Display  / Proc.
    :RenderType: :ref:`textTable <columns-text-renderType-textTable>`,
        :ref:`default <columns-text-renderType-default>`

    If a user-defined evaluation is used for the field (see :ref:`eval <columns-text-properties-eval>`),
    then this value will be passed as argument to the user-defined evaluation function.

    Does not apply to RTE fields.
