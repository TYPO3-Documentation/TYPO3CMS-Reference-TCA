..  include:: /Includes.rst.txt
..  _tca-property-fieldwizard:

===========
fieldWizard
===========

..  confval:: fieldWizard
    :name: fieldWizard
    :TCA path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldWizard']
    :type: array
    :Scope: Display
    :Types: :ref:`category <columns-category>`, :ref:`check <columns-check>`,
        :ref:`color <columns-input-rendertype-colorpicker>`,
        :ref:`country <columns-country>`,
        :ref:`datetime <columns-input-rendertype-inputdatetime>`,
        :ref:`email <columns-email>`, :ref:`file <columns-file>`,
        :ref:`folder <columns-folder>`, :ref:`group <columns-group>`,
        :ref:`imageManipulation <columns-imagemanipulation>`,
        :ref:`inline <columns-inline>`, :ref:`input <columns-input>`,
        :ref:`json <columns-json>`,
        :ref:`link <columns-input-rendertype-inputlink>`,
        :ref:`number <columns-number>`, :ref:`radio <columns-radio>`,
        :ref:`select <columns-select>`, :ref:`slug <columns-slug>`,
        :ref:`text <columns-text>`

    Specifies wizards rendered below the main input area of an element. Single type / renderType elements
    can register default wizards which are merged with this property.

    For example, type='check' comes with this default wizards configuration:

    ..  code-block:: php
        :caption: EXT:backend/Classes/Form/Element/CheckboxElement.php (excerpt)

        protected $defaultFieldWizard = [
            'localizationStateSelector' => [
                'renderType' => 'localizationStateSelector',
            ],
            'otherLanguageContent' => [
                'renderType' => 'otherLanguageContent',
                'after' => [
                    'localizationStateSelector',
                ],
            ],
            'defaultLanguageDifferences' => [
                'renderType' => 'defaultLanguageDifferences',
                'after' => [
                    'otherLanguageContent',
                ],
            ],
        ];

    This is be merged with the configuration from TCA, if there is any. Below example disables the default
    `localizationStateSelector` wizard.

    ..  literalinclude:: /ColumnsConfig/CommonProperties/_codesnippets/_FieldWizardDisabled.php
        :caption: EXT:my_extension/Configuration/TCA/tx_myextension_domain_model_something.php
        :visible-lines: 9-19
        :emphasize-lines: 15

    It is possible to add own wizards by adding them to the TCA of the according field and pointing to a registered
    renderType, to resort wizards by overriding the `before` and `after` keys, to hand over additional
    options in the optional `options` array to specific wizards, and to disable single wizards using the
    `disabled` key. Developers should have a look at the
    :ref:`FormEngine docs <t3coreapi:FormEngine-Rendering-NodeExpansion>` for details.


..  toctree::
    DefaultLanguageDifferences
    LocalizationStateSelector
    OtherLanguageContent
