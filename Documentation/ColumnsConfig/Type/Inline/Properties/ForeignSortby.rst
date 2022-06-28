.. include:: /Includes.rst.txt
.. _columns-inline-properties-foreign-sortby:

===============
foreign\_sortby
===============

.. confval:: foreign_sortby

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: string
   :Scope: Display / Proc.

   Define a field on the child record that stores the manual sorting
   information. It is possible to have a different sorting, depending from
   which side of the relation we look at parent or child.

   .. attention::
      Do not confuse this property with :ref:`foreign_default_sortby <columns-inline-properties-foreign-default-sortby>`.
      The `foreign_sortby` field contains an integer and is managed by the DataHandler. If by accident a content column
      like "title" is set as `foreign_sortby`, the DataHandler will write these integers into that field, which is most
      likely *not* what you want. Use `foreign_default_sortby` in this case.

   This property requires that the
   :ref:`foreign_field <columns-inline-properties-foreign-field>` approach is
   used.

   When using :ref:`MM relations<columns-inline-properties-mm>` the field used
   on the intermediate table is hardcoded to :sql:`sorting_foreign`. Setting
   this property has no effect combined with an MM table.

   .. warning::
      If you use the table only as an inline element, do not put the :ref:`sortby <ctrl-reference-sortby>` field
      in the :ref:`ctrl <ctrl>` section, otherwise TYPO3 CMS will sort the entire table with every update.
      For example, if you have 10000 records, each with 4 inline elements, TYPO3 CMS will sort 40000 records even
      if only 4 must be sorted.
