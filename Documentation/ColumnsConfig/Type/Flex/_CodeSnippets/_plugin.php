<?php

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

ExtensionUtility::registerPlugin(
    'MyExtension',
    'MyPlugin',
    'My Plugin Title',
    'my-extension-icon',
    'plugins',
    'Plugin description',
    'FILE:EXT:myext/Configuration/FlexForm.xml'
);
