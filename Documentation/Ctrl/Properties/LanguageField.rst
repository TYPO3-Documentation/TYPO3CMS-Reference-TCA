.. include:: /Includes.rst.txt
.. _ctrl-reference-languagefield:

=============
languageField
=============

.. confval:: languageField

   :type: string (field name)
   :Scope: Proc. / Display


   **Localization access control.**

   Field name which contains the pointer to the language of the record's content. Language for a record is defined
   by an integer pointing to a "sys\_language" record (found in the page tree root).

   Backend users can be limited to have edit access for only certain of these languages and if this option is set,
   edit access for languages will be enforced for this table.

   The values in this field may be the following:

   **-1 :** (ALL) The record does not represent any specific language. Localization access control is never carried out
   for such a record. Typically this is used if the record has content which itself handles
   localization (such as plugins or flexforms).

   **0 :** The default language of the system. Localization access control applies.

   **Values > 0** : Points to a uid of a sys\_language record representing a possible language for translation.
   Localization access control applies.

   The field name pointed to should be a single value selector box (maxitems <=1) saving its value into an
   integer field in the database.

   Also see the :ref:`Frontend Localization Guide <t3l10n:core-support-tca>` for a discussion about the effects of
   this property (and other TCA properties) on the localization process.
