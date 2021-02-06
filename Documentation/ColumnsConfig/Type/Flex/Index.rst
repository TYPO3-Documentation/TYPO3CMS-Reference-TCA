.. include:: /Includes.rst.txt
.. _columns-flex:

==============
FlexForm field
==============

Renders a FlexForm element. Essentially this consists in a hierarchically organized set of fields which will have
their values saved into a single field in the database, stored as XML.

The general idea is: There is a data structure that defines which and how single fields should be displayed,
re-using all the `TCA` column type possibilities. The actual values of single fields are then stored
in an XML representation within this "flex" field.


.. toctree::
   :titlesonly:

   AboutDataStructures
   FlexformSyntax
   Examples
   Properties/Index
