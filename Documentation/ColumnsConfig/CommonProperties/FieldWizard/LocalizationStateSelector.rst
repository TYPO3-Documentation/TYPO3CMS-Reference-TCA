..  include:: /Includes.rst.txt
..  _tca-property-fieldwizard-localizationstateselector:

=========================
localizationStateSelector
=========================

..  confval:: localizationStateSelector
    :name: fieldWizard-localizationStateSelector
    :TCA path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldWizard']['localizationStateSelector']
    :type: array
    :Scope: Display
    :Types: :ref:`check <columns-check>`, :ref:`flex <columns-flex>`,
        :ref:`group <columns-group>`,
        :ref:`imageManipulation <columns-imagemanipulation>`,
        :ref:`input <columns-input>`

    The localization state selector wizard displays two or three radio buttons in localized records
    saying: "This field has an own value distinct from my default language or source record", "This field
    has the same value as the default language record" or "This field has the same value as my source record".
    This wizard is especially useful for the `tt_content` table. It will only render, if:

    *   The record is a localized record (not default language)
    *   The record is in "translated" (connected), but not in "copy" (free) mode
    *   The table is localization aware using the ['ctrl'] properties :ref:`languageField <ctrl-reference-languagefield>`,
        :ref:`transOrigPointerField <ctrl-reference-transorigpointerfield>`. If the optional property
        :ref:`translationSource <ctrl-reference-translationsource>` is also set, and if the record is a translation
        from another localized record, the third radio appears.
    *   The property ['config']['behaviour']['allowLanguageSynchronization'] is set to true

    ..  figure:: /Images/Conference/FieldWizardLocalizationState.png
        :alt: The contact email of a translated conference with the localization state and the value of the default language
        :class: with-shadow

        The contact email of a translated conference with the localization state and the value of the default language

    ..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/140-tx_myextension_conference-contact_email.php
        :caption: EXT:my_extension/Configuration/TCA/Overrides/140-tx_myextension_conference-contact_email.php
        :emphasize-lines: 13-15
