<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_talk', [
  'sponsor' => [
    'label' => 'my_extension.db:talk.sponsor',
    'config' => [
      'type' => 'select',
      'renderType' => 'selectSingle',
      'items' => [
        ['label' => '', 'value' => 0],
      ],
      'foreign_table' => 'tx_myextension_sponsor',
      // The tier of a sponsor is the group of its item
      'foreign_table_item_group' => 'tier',
      'itemGroups' => [
        'gold' => 'my_extension.db:sponsor.tier.gold',
        'silver' => 'my_extension.db:sponsor.tier.silver',
        'bronze' => 'my_extension.db:sponsor.tier.bronze',
      ],
      'relationship' => 'manyToOne',
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_talk',
  'sponsor',
  '',
  'after:speaker',
);
