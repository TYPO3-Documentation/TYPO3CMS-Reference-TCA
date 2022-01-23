.. include:: /Includes.rst.txt
.. _columns-slug-properties-fallbackCharacter:

=================
fallbackCharacter
=================

.. confval:: fallbackCharacter

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: string
   :Scope: Proc. / Display
   :Default: \-

   Character that represents the separator of slug sections, that contain the
   :ref:`fieldSeparator <columns-slug-properties-generatorOptions>`.


Examples
========

fallbackCharacter and fieldSeparator set
----------------------------------------

.. include:: /Images/Rst/Slug2.rst.txt

.. include:: /CodeSnippets/Slug2.rst.txt
