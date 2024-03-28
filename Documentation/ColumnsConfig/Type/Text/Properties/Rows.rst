..  include:: /Includes.rst.txt
..  _columns-text-properties-rows:

====
rows
====

..  confval:: rows
    :name: text-rows
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: integer
    :Scope: Display
    :RenderType: :ref:`textTable <columns-text-renderType-textTable>`,
        :ref:`codeEditor <columns-text-renderType-codeEditor>`,
        :ref:`default <columns-text-renderType-default>`

    The number of rows in the textarea. May be corrected for harmonization between browsers. Will also
    automatically be increased if the content in the field is found to be of a certain length, thus the
    field will automatically fit the content. Default is 5. Max value is 20.

    Does not apply to RTE fields.

A simple text editor with 20 width
==================================

..  include:: /Images/Rst/Text4.rst.txt

..  include:: /CodeSnippets/Text4.rst.txt
