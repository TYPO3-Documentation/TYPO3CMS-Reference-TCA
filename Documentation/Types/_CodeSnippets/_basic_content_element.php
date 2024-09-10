<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

// Add the content element to the "Type" dropdown
ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'label' => 'My extension basic text element',
        'value' => 'my_extension_basic_text',
    ],
);

// Add the predefined fields to the "General" tab
$GLOBALS['TCA']['tt_content']['types']['my_extension_basic_text']['showitem'] =
    '--palette--;;headers,bodytext,';
