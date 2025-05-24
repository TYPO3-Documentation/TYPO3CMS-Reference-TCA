..  include:: /Includes.rst.txt
..  _tca_property_fieldInformation_tcaDescription:

==============
tcaDescription
==============

Use this `fieldInformation` to allow adding a more detailed description to the
form element. `tcaDescription` will read the `description` part of the
TCA column definition. If that value starts with `LLL:` it will render a
translated output. Else it will render the text unmodified.

..  include:: /Images/Rst/FieldInformationTcaDescription.rst.txt

..  confval:: tcaDescription
    :name: fieldInformation-tcaDescription
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldInformation']
    :type: array
    :Scope: fieldInformation

    ..  note::
        The HTML tags for this specific area are limited to:
        `<a>`, `<br>`, `<br/>`, `<div>`, `<em>`, `<i>`, `<p>`, `<strong>`,
        `<span>`, `<code>`.

`tcaDescription` is activated for most of the TYPO3 form elements by default.
Currently, following form elements supports `tcaDescription`:

*   BackendLayoutWizardElement.php
*   CategoryElement.php
*   CheckboxElement.php
*   CheckboxLabeledToggleElement.php
*   CheckboxToggleElement.php
*   CodeEditorElement.php
*   ColorElement.php
*   DatetimeElement.php
*   EmailElement.php
*   FolderElement.php
*   GroupElement.php
*   ImageManipulationElement.php
*   InputSlugElement.php
*   InputTextElement.php
*   JsonElement.php
*   LinkElement.php
*   NoneElement.php
*   NumberElement.php
*   PasswordElement.php
*   RadioElement.php
*   SelectCheckBoxElement.php
*   SelectMultipleSideBySideElement.php
*   SelectSingleBoxElement.php
*   SelectSingleElement.php
*   SelectTreeElement.php
*   TablePermissionElement.php
*   TextElement.php
*   TextTableElement.php
*   UserSysFileStorageIsPublicElement.php
*   UuidElement.php

Examples
========

Activate tcaDescription
-----------------------

For most of the TYPO3 own form elements it is not needed to activate
`tcaDescription` as it is activated by default. Before adding `tcaDescription`
to any kind of form elements you have to make sure the element supports the
rendering of `fieldInformation`.

..  code-block:: php
    :caption: EXT:my_ext/Configuration/TCA/Overrides/pages.php

    [
        'columns' => [
            'my_own_column' => [
                'label' => 'My own column',
                'description' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.canonical_link.description',
                'config' => [
                    'type' => 'input',
                    'renderType' => 'mySpecialRenderingForInputElements',
                    'default' => '',
                    'fieldInformation' => [
                        'tcaDescription' => [
                            'renderType' => 'tcaDescription',
                        ],
                    ],
                ],
            ],
        ],
    ],

Render a description
--------------------

As `tcaDescription` is activated for most of the TYPO3 own form elements,
it just needs to set the `description` property:

..  include:: /CodeSnippets/Manual/FieldInformation.rst.txt
