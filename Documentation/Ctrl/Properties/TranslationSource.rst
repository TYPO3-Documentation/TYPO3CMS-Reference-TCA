.. include:: /Includes.rst.txt
.. _ctrl-reference-translationSource:

=================
translationSource
=================

:aspect:`Datatype`
    string (field name)

:aspect:`Scope`
    Proc. / Display

:aspect:`Description`
    Name of the field used by translations to point back to the original record (i.e. the record in any language
    of which they are a translation). This property is often set to "l10n\_source" in core tables.

    This property is similar to :ref:`transOrigPointerField <ctrl-reference-transorigpointerfield>`. Both fields
    only contain valid record uid's (and not 0), if the record is a translation (connected mode), and not a
    copy (free mode). In connected mode, while "transOrigPointerField" always contains the uid of the default
    language record, this field contains the uid of the record the translation was created from.

    For example, if a tt_content record in default language english with uid 13 exists, this record is translated
    to french with uid 17, and the danish translation is later created based on the french translation, then the
    danish translation has uid 13 set as l10n_parent and 17 as l10n_source.
