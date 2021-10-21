.. include:: /Includes.rst.txt
.. _columns-slug-properties-prependSlash:

============
prependSlash
============

.. confval:: prependSlash

   :type: boolean
   :Scope: Proc. / Display

   Defines whether a slug field should contain a prepending slash, e.g. for nested categories with speaking segments.
   
   If not set, this defaults to :php:`false`. (Exception: for the :sql:`pages.slug` field this defaults to :php:`true`.)
