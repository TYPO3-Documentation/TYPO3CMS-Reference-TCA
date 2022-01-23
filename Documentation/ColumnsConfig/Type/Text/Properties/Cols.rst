.. include:: /Includes.rst.txt
.. _columns-text-properties-cols:

====
cols
====

.. confval:: cols

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: integer
   :Scope: Display


   :RenderType: :ref:`textTable <columns-text-renderType-textTable>`,
      :ref:`default <columns-text-renderType-default>`

   Abstract value for the width of the :code:`<textarea>` field. To set the textarea to the full width
   of the form area, use the value 50. Default is 30.

   Does not apply to RTE fields.

A simple text editor with 20 width
==================================

.. include:: /Images/Rst/Text4.rst.txt

.. include:: /CodeSnippets/Text4.rst.txt
