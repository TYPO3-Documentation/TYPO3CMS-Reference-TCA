.. include:: /Includes.rst.txt
.. _ctrl-reference-translationSource:

=================
translationSource
=================

.. confval:: translationSource

   :Path: $GLOBALS['TCA'][$table]['ctrl']
   :type: string (field name)
   :Scope: Proc. / Display


   Name of the field, by convention by convention
   :ref:`l10n_parent <field-l10n_parent>`, used by translations to point back to
   the original record (i.e. the record in any language of which they are a
   translation).

   This property is similar to :ref:`transOrigPointerField <ctrl-reference-transorigpointerfield>`. Both fields
   only contain valid record uids (and not 0), if the record is a translation (connected mode), and not a
   copy (free mode). In connected mode, while "transOrigPointerField" always contains the uid of the default
   language record, this field contains the uid of the record the translation was created from.

   For example, if a tt_content record in default language english with uid 13 exists, this record is translated
   to french with uid 17, and the danish translation is later created based on the french translation, then the
   danish translation has uid 13 set as :sql:`l18n_parent` and 17 as :sql:`l10n_source`.

   .. note::
      Sometimes :sql:`l18n_parent` is used for this field in Core tables. This
      has historic reasons.

Example
=======

.. include:: /CodeSnippets/Manual/Ctrl/Language.rst.txt
