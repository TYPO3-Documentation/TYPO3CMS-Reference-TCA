<?php

defined('TYPO3') or die();

$GLOBALS['TCA']['tt_content']['types']['textpic']['columnsOverrides']
  ['image']['config']['overrideChildTca']['columns']['crop']['config'] = [
    'cropVariants' => [
      'mobile' => [
        'title' => 'LLL:EXT:my_extension/Resources/Private/Language/locallang_db.xlf:imageManipulation.mobile',
        'cropArea' => [
          'x' => 0.1,
          'y' => 0.1,
          'width' => 0.8,
          'height' => 0.8,
        ],
      ],
    ],
  ];
