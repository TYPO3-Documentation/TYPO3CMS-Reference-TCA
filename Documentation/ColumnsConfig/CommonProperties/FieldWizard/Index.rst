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

    TYPO3 merges this configuration with the configuration from TCA. To
    switch off a default wizard, set its `disabled` key to :php:`true`. To
    switch on a wizard that is disabled by default, set `disabled` to
    :php:`false`.

    The render type `selectSingle` comes with the wizard `selectIcons`
    disabled. The location field of a conference switches it on, so it
    shows the images of the locations:

    ..  figure:: /Images/Conference/CtrlSeliconField.png
        :alt: The field "Location" with "Congress Center, Basel [1]"
            selected and the images of the locations "Congress Center" and
            "Kongresshalle" below it, the image of the selected location
            framed
        :class: with-shadow

        The images of the locations below the location field of a conference

    ..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/110-tx_myextension_conference-location.php
        :caption: EXT:my_extension/Configuration/TCA/Overrides/110-tx_myextension_conference-location.php
        :emphasize-lines: 17-21

    It is possible to add own wizards by adding them to the TCA of the according field and pointing to a registered
    renderType, to resort wizards by overriding the `before` and `after` keys, to hand over additional
    options in the optional `options` array to specific wizards, and to disable single wizards using the
    `disabled` key. Developers should have a look at the
    :ref:`FormEngine docs <t3coreapi:FormEngine-Rendering-NodeExpansion>` for details.


..  toctree::
    DefaultLanguageDifferences
    LocalizationStateSelector
    OtherLanguageContent
