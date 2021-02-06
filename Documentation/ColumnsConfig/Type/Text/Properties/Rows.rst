.. include:: /Includes.rst.txt
.. _columns-text-properties-rows:

====
rows
====

.. confval:: rows

   :type: integer
   :Scope: Display
   :RenderType: :ref:`textTable <columns-text-renderType-textTable>`,
      :ref:`t3editor <columns-text-renderType-t3editor>`,
      :ref:`default <columns-text-renderType-default>`

   The number of rows in the textarea. May be corrected for harmonization between browsers. Will also
   automatically be increased if the content in the field is found to be of a certain length, thus the
   field will automatically fit the content. Default is 5. Max value is 20.

   Does not apply to RTE fields.

A simple text editor with 20 width
==================================

.. include:: /Includes/Images/Styleguide/RstIncludes/Text4.rst.txt

.. include:: /Includes/Snippets/Styleguide/RstIncludes/Text4.rst.txt
