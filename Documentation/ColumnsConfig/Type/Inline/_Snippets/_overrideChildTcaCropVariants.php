<?php

defined('TYPO3') or die();

$GLOBALS['TCA']['tt_content']['columns']['assets']['config']
  ['overrideChildTca']['columns']['crop']['config']['cropVariants'] = [
    'default' => [
      'disabled' => true,
    ],
    'mobile' => [
      'title' => 'LLL:EXT:my_extension/Resources/Private/Language/locallang.xlf:imageManipulation.mobile',
      'cropArea' => [
        'x' => 0.1,
        'y' => 0.1,
        'width' => 0.8,
        'height' => 0.8,
      ],
      'allowedAspectRatios' => [
        '4:3' => [
          'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.4_3',
          'value' => 4 / 3,
        ],
        'NaN' => [
          'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.free',
          'value' => 0.0,
        ],
      ],
    ],
  ];
