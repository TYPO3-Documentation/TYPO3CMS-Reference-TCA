..  include:: /Includes.rst.txt
..  _tca-property-fieldwizard-otherlanguagecontent:

====================
otherLanguageContent
====================

..  confval:: otherLanguageContent
    :name: fieldWizard-otherLanguageContent
    :TCA path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldWizard']['otherLanguageContent']
    :type: array
    :Scope: Display
    :Types: :ref:`check <columns-check>`,
        :ref:`color <columns-input-rendertype-colorpicker>`,
        :ref:`country <columns-country>`,
        :ref:`datetime <columns-input-rendertype-inputdatetime>`,
        :ref:`email <columns-email>`, :ref:`folder <columns-folder>`,
        :ref:`group <columns-group>`, :ref:`input <columns-input>`,
        :ref:`json <columns-json>`,
        :ref:`link <columns-input-rendertype-inputlink>`,
        :ref:`number <columns-number>`, :ref:`radio <columns-radio>`,
        :ref:`select <columns-select>`, :ref:`slug <columns-slug>`,
        :ref:`text <columns-text>`

    Show values from the default language record and other localized records if the edited row is a
    localized record. Often used in `tt_content` fields. By default, only the value of the default
    language record is shown, values from further translations can be shown by setting the
    :ref:`user TSconfig property additionalPreviewLanguages <t3tsref:useroptions-additionalPreviewLanguages>`.

    The wizard shows content only for "simple" fields. For instance, it does not work for database relation fields,
    and if the field is set to `readOnly`. Additionally, the table has to be language aware by setting up the
    according fields in ['ctrl'] section.

    The render type :ref:`selectTree <columns-select-rendertype-selecttree>`
    of the type `select` does not show this wizard.

    ..  figure:: /Images/Conference/FieldWizardLocalizationState.png
        :alt: The contact email of a translated conference with the localization state and the value of the default language
        :class: with-shadow

        The contact email of a translated conference with the localization state and the value of the default language
