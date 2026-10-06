<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_sponsor', [
  'tier' => [
    'label' => 'my_extension.db:sponsor.tier',
    'config' => [
      'type' => 'select',
      'renderType' => 'selectSingle',
      'items' => [
        ['label' => 'my_extension.db:sponsor.tier.gold', 'value' => 'gold'],
        ['label' => 'my_extension.db:sponsor.tier.silver', 'value' => 'silver'],
        ['label' => 'my_extension.db:sponsor.tier.bronze', 'value' => 'bronze'],
      ],
      'default' => 'bronze',
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_sponsor',
  'tier',
  '',
  'after:name',
);
