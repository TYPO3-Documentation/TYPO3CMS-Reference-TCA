..  include:: /Includes.rst.txt
..  _ctrl-reference-transorigdiffsourcefield:

========================
transOrigDiffSourceField
========================

.. confval:: transOrigDiffSourceField
    :name: ctrl-transOrigDiffSourceField
    :Path: $GLOBALS['TCA'][$table]['ctrl']
    :type: string (field name)
    :Scope: Proc. / Display

    Field name, by convention by convention
    :ref:`l10n_diffsource <field-l10n_diffsource>`, which will be updated with
    the value of the original
    language record whenever the translation record is updated. This
    information is later used to compare the current values of the default
    record with those stored in this field. If they differ, there will
    be a display in the form of the difference visually. This is a big
    help for translators so they can quickly grasp the changes that
    happened to the default language text.

    The field type in the database should be a large text field (clob/blob). If
    you do not define the field in the file :file:`ext_tables.sql` it is
    automatically created with the correct type.

    This field needs no configuration in :php:`$GLOBALS['TCA'][<table>]['columns']`,
    but if you do, select the :ref:`passthrough <columns-passthrough>` type.
    That will enable the undo function to also work on this field.

    .. note::
        Sometimes :sql:`l18n_diffsource` is used for this field in Core tables.
        This has historic reasons.

Example
=======

..  include:: /Images/ManualScreenshots/OtherLanguageContent.rst.txt

..  literalinclude:: _CodeSnippets/_Language.php
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_domain_model_something.php
