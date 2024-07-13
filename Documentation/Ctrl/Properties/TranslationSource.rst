..  include:: /Includes.rst.txt
..  _ctrl-reference-translationSource:

=================
translationSource
=================

..  confval:: translationSource
    :name: ctrl-translationSource
    :Path: $GLOBALS['TCA'][$table]['ctrl']
    :type: string (field name)
    :Scope: Proc. / Display


    Name of the field, by convention
    :ref:`l10n_source <field-l10n_source>` is used by translations to point back to
    the original record (i.e. the record in any language from which they are a
    translated).

    This property is similar to :ref:`transOrigPointerField <ctrl-reference-transorigpointerfield>`. Both fields
    only contain valid record uids (and not 0), if the record is a translation (connected mode), and not a
    copy (free mode). In connected mode, while "transOrigPointerField" always contains the uid of the default
    language record, this field contains the uid of the record the translation was created from.

    For example, if a tt_content record in default language English with uid 13 exists, this record is translated
    to French with uid 17, and the Danish translation is later created based on the French translation, then the
    Danish translation has uid 13 set as :sql:`l10n_parent` and 17 as :sql:`l10n_source`.

Example
=======

..  literalinclude:: /CodeSnippets/Manual/Ctrl/Language.php
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_domain_model_something.php
