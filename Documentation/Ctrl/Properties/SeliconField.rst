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

Select foreign records from a drop-down using selicon
-----------------------------------------------------

.. include:: /Includes/Images/Styleguide/RstIncludes/SelectSingle12.rst.txt


The table :sql:`tx_styleguide_elements_select_single_12_foreign` is defined as
follows:


.. include:: /Includes/Snippets/Styleguide/RstIncludes/Manual/SelectSingle12ForeignPart.rst.txt


It can be used in another table as a foreign relation, for example in a field
with render type :php:`singleSelect`::

.. include:: /Includes/Snippets/Styleguide/RstIncludes/SelectSingle12.rst.txt


You can find this example in the :ref:`extension styleguide <styleguide>`.
