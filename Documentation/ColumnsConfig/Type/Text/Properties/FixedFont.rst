.. include:: /Includes.rst.txt

.. _columns-text-properties-fixedFont:

=========
fixedFont
=========

.. confval:: fixedFont

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: boolean
   :Scope: Display
   :RenderType: :ref:`textTable <columns-text-renderType-textTable>`,

   :ref:`default <columns-text-renderType-default>`
   Enables a fixed-width font (monospace) for the text field. This is useful when using code.

   Does not apply to RTE fields.


Examples
========

Fixed font field with tabulators enabled
----------------------------------------

.. include:: /Images/Rst/Text4.rst.txt

.. include:: /CodeSnippets/Text4.rst.txt
