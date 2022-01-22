.. include:: /Includes.rst.txt
.. _ctrl-reference-transorigdiffsourcefield:

========================
transOrigDiffSourceField
========================

.. confval:: transOrigDiffSourceField

   :Path: $GLOBALS['TCA'][$table]['ctrl']
   :type: string (field name)
   :Scope: Proc. / Display


   Field name which will be updated with the value of the original
   language record whenever the translation record is updated. This
   information is later used to compare the current values of the default
   record with those stored in this field. If they differ, there will
   be a display in the form of the difference visually. This is a big
   help for translators so they can quickly grasp the changes that
   happened to the default language text.

   The field type in the database should be a large text field (clob/blob).

   This field needs no configuration in :php:`$GLOBALS['TCA'][<table>]['columns']`,
   but if you do, select the "passthrough" type. That will enable
   the undo function to also work on this field.
