.. include:: /Includes.rst.txt
.. _tca_property_mode:

====
mode
====

.. confval:: mode

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: string (keywords)
   :Scope: Display
   :Types: :ref:`input <columns-input>`

   Possible keywords: :code:`useOrOverridePlaceholder`

   This property is related to the placeholder property. When defined a
   checkbox will appear above the field. If that box is checked, the field can
   be used to enter whatever the user wants as usual. If the box is **not**
   checked, the field becomes read-only and the value saved to the database
   will be :code:`NULL`.

   What impact this has in the frontend depends on what is done in the code
   using this field. In the case of FAL relations, for example, if the "title"
   field has its box checked, the "title" from the related metadata will be
   provided.

   .. warning::
      In order for this property to apply properly, the field must be allowed to
      use "NULL" as a value,
      the "eval" property must list "null" as a possible evaluation.

Examples
========

.. _tca_example_input_28:

An input field with placeholder that can be overridden
-------------------------------------------------------

.. include:: /Images/Rst/Input28.rst.txt

.. include:: /CodeSnippets/Input28.rst.txt

.. _tca_example_text_14:

An text field with placeholder that can be overridden
-----------------------------------------------------

.. include:: /Images/Rst/Text14.rst.txt

.. include:: /CodeSnippets/Text14.rst.txt

