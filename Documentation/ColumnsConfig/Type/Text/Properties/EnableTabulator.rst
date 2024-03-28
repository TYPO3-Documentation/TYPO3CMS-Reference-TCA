..  include:: /Includes.rst.txt
..  _columns-text-properties-enableTabulator:

===============
enableTabulator
===============

..  confval:: enableTabulator
    :name: text-enableTabulator
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: boolean
    :Scope: Display
    :RenderType: :ref:`default <columns-text-renderType-default>`, :ref:`textTable <columns-text-renderType-textTable>`

    Enabling this allows to use tabs in a text field. This works well together with
    :ref:`fixed-width fonts <columns-text-properties-fixedFont>` (monospace) for code editing.

    Does not apply to RTE fields.

Examples
========

..  _tca_example_text_15:

Fixed font field with tabulators enabled
----------------------------------------

..  include:: /Images/Rst/Text15.rst.txt

..  include:: /CodeSnippets/Text15.rst.txt
