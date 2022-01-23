.. include:: /Includes.rst.txt
.. _columns-slug-properties-prependSlash:

============
prependSlash
============

.. confval:: prependSlash

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: boolean
   :Scope: Proc. / Display

   Defines whether a slug field should contain a prepending slash, for example for nested categories with speaking segments.

   If not set, this defaults to :php:`false`. (Exception: for the :sql:`pages.slug` field this defaults to :php:`true`
   and cannot be changed.)
