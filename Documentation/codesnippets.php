<?php

// https=>//github.com/TYPO3-Documentation/t3docs-codesnippets
// ddev exec vendor/bin/typo3  restructured_api_tools:php_domain public/fileadmin/TYPO3CMS-Reference-TCA/Documentation/CodeSnippets/

return [
  [
    'action' => 'createPhpArrayCodeSnippet',
    'sourceFile' => 'EXT:core/Configuration/TCA/be_groups.php',
    'fields' => ['columns/file_mountpoints'],
    'targetFileName' => 'CodeSnippets/FileMountpoints.rst.txt',
  ],
  [
    'action' => 'createPhpArrayCodeSnippet',
    'sourceFile' => 'EXT:frontend/Configuration/TCA/tt_content.php',
    'fields' => ['ctrl'],
    'targetFileName' => 'CodeSnippets/TtContentCtrl.rst.txt',
  ],

];
