<?php

declare(strict_types=1);

defined('TYPO3') or die();

$GLOBALS['TCA']['tt_content']['ctrl']['container'] = [
  'formWrapContainer' => [
    'fieldWizard' => [
      'ReferencesToThisRecordWizard' => [
        'renderType' => 'ReferencesToThisRecordWizard',
      ],
    ],
  ],
];
