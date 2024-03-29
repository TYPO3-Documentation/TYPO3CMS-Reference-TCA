.. include:: /Includes.rst.txt
.. _columns-text-properties-format:

======
format
======

..  confval:: format
    :name: text-format
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: string (keyword)
    :Scope: Display
    :RenderType: :ref:`t3editor <columns-text-renderType-t3editor>`

   The value specifies the language t3editor should handle. Allowed values:
   `css`, `html`, `javascript`, `php`, `typoscript`, `xml`


Examples
========

T3editor with format HTML
-------------------------


.. include:: /Images/Rst/T3editor1.rst.txt

.. include:: /CodeSnippets/T3editor1.rst.txt
