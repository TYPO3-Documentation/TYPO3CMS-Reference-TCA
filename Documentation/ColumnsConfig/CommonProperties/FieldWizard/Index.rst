..  include:: /Includes.rst.txt
..  _tca_property_fieldWizard:

===========
fieldWizard
===========

..  confval:: fieldWizard
    :name: fieldWizard
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: array
    :Scope: Display
    :Types: :ref:`check <columns-check>`, :ref:`flex <columns-flex>`,
        :ref:`group <columns-group>`,
        :ref:`imageManipulation <columns-imageManipulation>`,
        :ref:`input <columns-input>`,
        :ref:`radio <columns-radio>`

    Specifies wizards rendered below the main input area of an element. Single type / renderType elements
    can register default wizards which are merged with this property.

    For example, type='check' comes with this default wizards configuration:

    ..  code-block:: php
        :caption: EXT:backend/Classes/Form/Element/CheckboxElement.php

        protected $defaultFieldWizard = [
            'localizationStateSelector' => [
                'renderType' => 'localizationStateSelector',
            ],
            'otherLanguageContent' => [
                'renderType' => 'otherLanguageContent',
                'after' => [
                    'localizationStateSelector'
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

    ..  code-block:: php
        :caption: EXT:my_extension/Configuration/TCA/tx_myextension_domain_model_something.php

        'aField' => [
            'config' => [
                'fieldWizard' => [
                    'localizationStateSelector' => [
                        'disabled' => true,
                    ],
                ],
            ],
        ],

    It is possible to add own wizards by adding them to the TCA of the according field and pointing to a registered
    renderType, to resort wizards by overriding the `before` and `after` keys, to hand over additional
    options in the optional `options` array to specific wizards, and to disable single wizards using the
    `disabled` key. Developers should have a look at the
    :ref:`FormEngine docs <t3coreapi:FormEngine-Rendering-NodeExpansion>` for details.


..  toctree::
    DefaultLanguageDifferences
    LocalizationStateSelector
    OtherLanguageContent
