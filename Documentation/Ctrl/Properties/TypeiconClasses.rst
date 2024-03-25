.. include:: /Includes.rst.txt
.. _ctrl-reference-typeicon-classes:

=================
typeicon\_classes
=================

.. confval:: typeicon_classes
   :name: ctrl-typeicon-classes
   :Path: $GLOBALS['TCA'][$table]['ctrl']
   :type: array
   :Scope: Display

   Array of icon identifiers to use for the records. The keys must correspond to the values found in the column
   referenced in the :ref:`typeicon_column <ctrl-reference-typeicon-column>` property. The values correspond
   to icons registered in the :ref:`Icon API <t3coreapi:icon>`. With the key `default`, a default icon is
   defined, which is used when no matching key is found. The default icon is also used in the
   "Create new record" dialog from the List module. For using and configuring `typeicon_classes`
   for custom page types, please see :ref:`Create a new Page Type<t3coreapi:page-types-example>`.


Examples
========

Example from the `tt_content` table::

   'typeicon_classes' => [
      'default' => 'mimetypes-x-content-text',
      'header' => 'mimetypes-x-content-header',
      ...
   ],

