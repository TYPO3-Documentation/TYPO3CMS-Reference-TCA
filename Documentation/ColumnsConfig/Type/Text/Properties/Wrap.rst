.. include:: /Includes.rst.txt
.. _columns-text-properties-wrap:

====
wrap
====

.. confval:: wrap

   :type: string (keyword)
   :Scope: Display
   :RenderType: :ref:`textTable <columns-text-renderType-textTable>`,
      :ref:`default <columns-text-renderType-default>`

   Determines the wrapping of the textarea field. Does not apply to RTE fields. There are two options:

   virtual (default)
     The textarea automatically wraps the lines like it would be expected for editing a text.

   off
     The textarea will *not* wrap the lines as you would expect when editing some kind of code.


Examples
========

.. _tca_example_text_5:

Textarea with no wraping
------------------------

.. include:: /Includes/Images/Styleguide/RstIncludes/Text5.rst.txt

.. include:: /Includes/Snippets/Styleguide/RstIncludes/Text5.rst.txt


.. _tca_example_text_6:

Textarea with virtual wraping
-----------------------------

.. include:: /Includes/Images/Styleguide/RstIncludes/Text6.rst.txt

.. include:: /Includes/Snippets/Styleguide/RstIncludes/Text6.rst.txt

