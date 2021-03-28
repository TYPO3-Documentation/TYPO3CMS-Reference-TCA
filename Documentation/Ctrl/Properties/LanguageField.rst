.. include:: /Includes.rst.txt
.. _ctrl-reference-languagefield:

=============
languageField
=============

.. confval:: languageField

   :type: string (field name of type :ref:`language <columns-language>`)
   :Scope: Proc. / Display


   .. deprecated:: 11.2
      This field can only be used with the type
      :ref:`language <columns-language>`. All other field types will be
      automatically migrated on-the-fly possibly losing configurations.
      See :ref;`Migration to the languge type <columns-languge-migration>`

   This property contains the field name which contains a pointer to the
   language of the record. The field should have the type
   :ref:`language <columns-language>`.

   This TCA type automatically displays all available languages for the
   current context (the corresponding site configuration) and also automatically
   adds the special `-1` language (meaning `all languages`) for all record
   types, except `pages`.

   Backend users can be limited to have edit access for only certain of
   these languages and if this option is set, edit access for languages
   will be enforced for this table.

   Also see the :ref:`Frontend Localization Guide <t3l10n:core-support-tca>`
   for a discussion about the effects of
   this property (and other TCA properties) on the localization process.
