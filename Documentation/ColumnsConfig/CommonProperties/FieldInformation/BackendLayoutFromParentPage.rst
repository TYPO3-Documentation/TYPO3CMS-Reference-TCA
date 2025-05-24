..  include:: /Includes.rst.txt
..  _tca_property_fieldInformation_backendLayoutFromParentPage:

===========================
backendLayoutFromParentPage
===========================

This `fieldInformation` is used by TYPO3 to render an information about
the used backend layout from parent pages (recursive).

..  include:: /Images/Rst/FieldInformationBackendLayoutFromParentPage.rst.txt

..  confval:: backendLayoutFromParentPage
    :name: fieldInformation-backendLayoutFromParentPage
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldInformation']
    :type: array
    :Scope: fieldInformation

Examples
========

Adding backendLayoutFromParentPage
----------------------------------

..  code-block:: php
    :caption: EXT:core/Configuration/TCA/pages.php

    [
        'columns' => [
            'backend_layout' => [
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout_formlabel',
                'config' => [
                    'type' => 'select',
                    'renderType' => 'selectSingle',
                    'fieldInformation' => [
                        'backendLayoutFromParentPage' => [
                            'renderType' => 'backendLayoutFromParentPage',
                        ],
                    ],
                ],
            ],
        ],
    ],
