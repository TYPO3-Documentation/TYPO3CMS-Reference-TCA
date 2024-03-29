..  include:: /Includes.rst.txt
..  _columns-text-properties-enableRichtext:

==============
enableRichtext
==============

..  confval:: enableRichtext
    :name: text-enableRichtext
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: boolean
    :Scope: Display  / Proc.
    :RenderType: :ref:`default <columns-text-renderType-default>`

    If set to true, the system renders a Rich Text Editor if that is enabled for the editor (default: yes),
    and if a suitable editor extension is loaded (default: rteckeditor).

    If either of these requirements is not met, the system falls back to a :code:`<textarea>` field.


Rich text editor (RTE)
======================

..  include:: /Images/Rst/Rte1.rst.txt

..  include:: /CodeSnippets/Rte1.rst.txt
