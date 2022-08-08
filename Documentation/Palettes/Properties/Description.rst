.. include:: /Includes.rst.txt
.. _palettes-properties-description:

===========
description
===========

.. versionadded:: 11.3
   The palettes description property has been added with TYPO3 v11.3.

.. confval:: description

   :Path: $GLOBALS['TCA'][$table]['palettes']
   :type: string

   Allows to display a localized description text into the palette declaration.
   It will be displayed below the
   :ref:`palette label<palettes-properties-label>`.

   This additional help text can be used to clarify some field usages directly
   in the UI.

   .. note::

      In contrast to the palette label, the description property can not
      be overwritten on a record type basis.

Example
=======

.. include:: /Images/Rst/PaletteDescription.rst.txt

.. include:: /CodeSnippets/PaletteDescription.rst.txt
