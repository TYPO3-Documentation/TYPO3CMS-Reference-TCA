.. include:: /Includes.rst.txt
.. _columns-input-properties-is-in:

======
is\_in
======

.. confval:: is_in

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: string
   :Scope: Display  / Proc.
   :RenderTypes: default, colorpicker, inputLink

   If the evaluation type "is\_in" (see :ref:`eval <columns-input-properties-eval>`) is used for evaluation, then
   the characters in the input string should be found in this string as well. This value is also passed
   as argument to the evaluation function if a user-defined evaluation function is registered.

   .. note::
      The "is\_in" value is trimmed during processing, leading and trailing whitespaces are removed. If
      whitespaces should be allowed, it should be in between other characters, example :php:`a b`.
