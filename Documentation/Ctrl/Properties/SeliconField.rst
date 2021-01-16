.. include:: /Includes.rst.txt
.. _ctrl-reference-selicon-field:

==============
selicon\_field
==============

.. confval:: selicon_field

   :type: string (field name)
   :Scope: Display


   Field name, which contains the thumbnail image used to represent the record visually whenever it is shown
   in FormEngine as a foreign reference selectable from a selector box.
   
   This field must be a :ref:`columns-inline-examples-fal` field where icon files are selected. Since only the
   first icon file will be used, the :ref:`columns-inline-properties-maxitems` option should be used to allow only
   selecting a single icon file.

   You should consider this a feature where you can attach an "icon" to a record which is typically selected as a
   reference in other records, for example a "category". In such a case this field points out the icon image which
   will then be shown. This feature can thus enrich the visual experience of selecting the relation in other forms.

Examples
========

Example from table "backend\_layout"::

   'ctrl' => [
      'selicon_field' => 'icon',
      ...
   ],
