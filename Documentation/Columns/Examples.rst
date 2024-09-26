..  include:: /Includes.rst.txt

..  _columns-example:

========
Examples
========

Some examples from extension styleguide to get an idea on what the
field definition is capable of: An input field
with slider, a select drop-down for images, an inline relation spanning multiple tables.


The following examples all can be found in the
:ref:`extension styleguide <styleguide>`.

..  index::
    Styleguide; select_single_12
    pair: selectSingle; Images

..  _columns-example-drop down:

Select drop-down for records represented by images
==================================================

..  include:: /Images/Rst/SelectSingle12.rst.txt

Select field with foreign table relation and field wizard:

..  include:: /CodeSnippets/SelectSingle12.rst.txt

The table :sql:`tx_styleguide_elements_select_single_12_foreign` is defined as
follows:

..  include:: /CodeSnippets/Manual/SelectSingle12ForeignPart.rst.txt

..  _tca_example_inline_1n1n_inline_1:

Inline relation (IRRE) spanning multiple tables
===============================================

..  include:: /Images/Rst/Inline1n1nInline1.rst.txt

Inline relation to a foreign table:

..  include:: /CodeSnippets/Inline1n1nInline1.rst.txt

..  _tca_example_translated_text_2:

Example: prefixLangTitle
========================

The following example can be found in the :ref:`extension styleguide
<styleguide>`. On translating a record in a new language the content of the
field gets copied to the target language. It get prefixed with
:code:`[Translate to <language name>:]`.

..  include:: /Images/Rst/TranslatedText2.rst.txt

The language mode is defined as follows:

..  include:: /CodeSnippets/TranslatedText2.rst.txt

..  _tca_example_l10n_mode:

Disable the prefixLangTitle for the header field in tt_content
==============================================================

Use the default behaviour instead of :php:`prefixLangTitle`: the field will
be copied without a prepended string.

..  code-block:: php
    :caption: EXT:my_sitepackage/Configuration/TCA/Overrides/tt_content.php

    $GLOBALS['TCA']['tt_content']['columns']['header']['l10n_mode'] = ''

..  _tca_example_translated_select_single_13:

Select field with `defaultAsReadonly`
=====================================

The following field has the option :php:`'l10n_display' => 'defaultAsReadonly'`
set:

..  include:: /Images/Rst/TranslatedSelectSingle13.rst.txt

Complete TCA definition of the field:

..  include:: /CodeSnippets/SelectSingle13.rst.txt

..  _tca_example_translated_select_single_8:

Translated field without `l10n_display` definition
==================================================

The following has no :php:`'l10n_display'` definition:

..  include:: /Images/Rst/TranslatedSelectSingle8.rst.txt

Complete TCA definition of the field:

..  include:: /CodeSnippets/SelectSingle8.rst.txt
