.. include:: /Includes.rst.txt
.. _columns-none-properties-pass-content:

=============
pass\_content
=============

.. confval:: pass_content

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: boolean
   :Scope: Display

   If set, then content from the field is directly outputted in the :code:`<input>` section as value attribute.
   Otherwise, the content will be passed through :code:`htmlspecialchars()`.

   Be careful to set this flag since it allows HTML from the field to be outputted on the page, thereby creating
   the possibility of XSS security holes.
