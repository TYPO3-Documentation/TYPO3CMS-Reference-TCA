..  include:: /Includes.rst.txt

..  _columns-example:

========
Examples
========

Some examples from the conference extension to get an idea of what the field
definition is capable of: a select drop-down with images, an inline relation
used by two tables, and the options for translated records.

..  index::
    pair: selectSingle; Images

..  _columns-example-drop-down:

Select drop-down for records represented by images
==================================================

..  figure:: /Images/Conference/CtrlSeliconField.png
    :alt: The images of the locations below the location field of a conference
    :class: with-shadow

    The images of the locations below the location field of a conference

The location of a conference is a select field with a relation to the
location table and the field wizard `selectIcons`:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/110-tx_myextension_conference-location.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/110-tx_myextension_conference-location.php
    :emphasize-lines: 18

The location table names its field with the image as
:ref:`selicon_field <ctrl-reference-selicon-field>`:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/tx_myextension_location.php
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_location.php
    :visible-lines: 4-19
    :emphasize-lines: 9

..  _tca-example-inline-1n1n-inline-1:

Inline relation (IRRE) spanning multiple tables
===============================================

..  figure:: /Images/Conference/ColumnsInlineComments.png
    :alt: The comments of a talk
    :class: with-shadow

    The comments of a talk

Visitors comment on conferences and on talks. Both tables use the same
comment table: the comment stores the uid of its parent record in `parent`,
and the table of the parent in `parent_table`:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/255-tx_myextension_talk-comments.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/255-tx_myextension_talk-comments.php
    :emphasize-lines: 14

..  _tca-example-translated-text-2:

Example: prefixLangTitle
========================

On translating a record in a new language the content of the field gets
copied to the target language. It gets prefixed with
`[Translate to <language name>:]`, here in the description of a conference:

..  figure:: /Images/Conference/ColumnsPrefixLangTitle.png
    :alt: The description of a translated conference
    :class: with-shadow

    The description of a translated conference

The language mode is defined as follows:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/130-tx_myextension_conference-description.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/130-tx_myextension_conference-description.php
    :emphasize-lines: 10

..  _tca-example-l10n-mode:

Disable the prefixLangTitle for the header field in tt_content
==============================================================

Use the default behaviour instead of `prefixLangTitle`: the field will
be copied without a prepended string.

..  code-block:: php
    :caption: EXT:my_sitepackage/Configuration/TCA/Overrides/tt_content.php

    $GLOBALS['TCA']['tt_content']['columns']['header']['l10n_mode'] = '';

..  _tca-example-translated-select-single-13:

Select field with `defaultAsReadonly`
=====================================

The format of a conference is the same in all languages. The field has the
option :php:`'l10n_display' => 'defaultAsReadonly'` set, so a translation shows
the value of the default language, which cannot be changed:

..  figure:: /Images/Conference/ColumnsDefaultAsReadonly.png
    :alt: The format of a translated conference
    :class: with-shadow

    The format of a translated conference

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/111-tx_myextension_conference-event_format.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/111-tx_myextension_conference-event_format.php
    :emphasize-lines: 12

..  _tca-example-translated-select-single-8:

Translated field without `l10n_display` definition
==================================================

The salutation of a speaker has no `l10n_display` definition, so it can be
changed in a translation:

..  figure:: /Images/Conference/ColumnsTranslatedSelect.png
    :alt: The salutation of a translated speaker
    :class: with-shadow

    The salutation of a translated speaker

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/305-tx_myextension_speaker-salutation.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/305-tx_myextension_speaker-salutation.php
