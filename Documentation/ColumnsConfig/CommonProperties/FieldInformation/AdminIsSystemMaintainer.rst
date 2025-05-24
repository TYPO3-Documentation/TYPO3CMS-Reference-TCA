..  include:: /Includes.rst.txt
..  _tca_property_fieldInformation_adminIsSystemMaintainer:

=======================
adminIsSystemMaintainer
=======================

This `fieldInformation` is used by TYPO3 to render an additional note about the
edited backend user. If the user is defined as Administrator and marked as
System Maintainer in Installtool the text "This user is a system maintainer"
will be rendered between the label and the form element.

..  include:: /Images/Rst/FieldInformationAdminIsSystemMaintainer.rst.txt

..  confval:: adminIsSystemMaintainer
    :name: fieldInformation-adminIsSystemMaintainer
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldInformation']
    :type: array
    :Scope: fieldInformation

..  _tca_property_fieldInformation_adminIsSystemMaintainer_example:

Examples
========

..  _tca_property_fieldInformation_adminIsSystemMaintainer_example_addAdminIsSystemMaintainer:

Adding adminIsSystemMaintainer
------------------------------

..  code-block:: php
    :caption: EXT:core/Configuration/TCA/be_users.php

    [
        'columns' => [
            'admin' => [
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.admin',
                'config' => [
                    'type' => 'check',
                    'renderType' => 'checkboxToggle',
                    'default' => 0,
                    'fieldInformation' => [
                        'adminIsSystemMaintainer' => [
                            'renderType' => 'adminIsSystemMaintainer',
                        ],
                    ],
                ],
            ],
        ],
    ],
