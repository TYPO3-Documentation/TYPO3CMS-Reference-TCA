.. include:: /Includes.rst.txt
.. _ctrl-reference-typeicon-classes:

=================
typeicon\_classes
=================

.. confval:: typeicon_classes

   :Path: $GLOBALS['TCA'][$table]['ctrl']
   :type: array
   :Scope: Display


   Array of names to use for the records. The keys must correspond to the values found in the column
   referenced in the :ref:`typeicon_column <ctrl-reference-typeicon-column>` property. The values correspond
   to icons registered in the :ref:`Icon API <t3coreapi:icon>`. For using and configuring `typeicon_classes`
   for custom page types, please see :ref:`Create a new Page Type<t3coreapi:page-types-example>`.


Examples
========

Example from the `tt_content` table::

   'typeicon_classes' => [
      'header' => 'mimetypes-x-content-header',
      'default' => 'mimetypes-x-content-text',
      ...
   ],

