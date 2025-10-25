<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

// Add the content element to the "Type" dropdown
ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'label' => 'My extension custom text element with links',
        'value' => 'my_extension_extended-text',
        'icon' => 'my-extension-content-text',
        'group' => 'default',
        'description' => 'Some descripton',
    ],
    'textmedia',
    'after',
);

// Define some custom columns
$additionalColumns = [
    'my_extension_link' => [
        'label' => 'My link',
        'config' => [
            'type' => 'link',
        ],
    ],
    'my_extension_link_text' => [
        'label' => 'My link text',
        'config' => [
            'type' => 'input',
        ],
    ],
    'my_extension_extra_text' => [
        'label' => 'My extra text',
        'config' => [
            'type' => 'input',
        ],
    ],
];
// Add the custom columns to the TCA of tt_content
ExtensionManagementUtility::addTCAcolumns('tt_content', $additionalColumns);

// Add predefined and custom fields to the "General tab" and introduce a tab called "Extended"
$GLOBALS['TCA']['tt_content']['types']['my_extension_extended-text']['showitem'] = '
    --palette--;;headers,
    bodytext,
    --div--;My tab,
        my_extension_link,
        my_extension_link_text,
    --div--;core.form.tabs:extended,';

// This field will be added in tab "Extended"
ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    'my_extension_extra_text',
    'my_extension_extended-text'
);
