.. include:: /Includes.rst.txt
.. _ctrl-reference-transorigpointerfield:

=====================
transOrigPointerField
=====================

.. confval:: transOrigPointerField

   :Path: $GLOBALS['TCA'][$table]['ctrl']
   :type: string (field name)
   :Scope: Proc. / Display


   Name of the field, by convention :ref:`l10n_parent <field-l10n_parent>`, used by
   translations to point back to the original record, the record in the default
   language of which they are a translation.

   If this value is found being set together with :ref:`languageField <ctrl-reference-languagefield>` then
   FormEngine will show the default translation value under the fields in the main form. This is very neat
   if translators are to see what they are translating.

   The target field must be configured in :php:`$GLOBALS['TCA'][<table>]['columns']`,
   at least as a passthrough type.

Example
=======

.. include:: /Images/Rst/TranslatedText2.rst.txt

.. include:: /CodeSnippets/Manual/Ctrl/Language.rst.txt

