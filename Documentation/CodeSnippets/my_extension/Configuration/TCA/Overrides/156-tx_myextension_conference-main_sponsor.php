<?php

use MyVendor\MyExtension\Backend\Filter\SponsorTierFilter;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_conference', [
  'main_sponsor' => [
    'label' => 'my_extension.db:conference.main_sponsor',
    'config' => [
      'type' => 'group',
      'allowed' => 'tx_myextension_sponsor',
      'relationship' => 'manyToOne',
      // The element browser lists the few sponsors
      'hideSuggest' => true,
      'filter' => [
        [
          'userFunc' => SponsorTierFilter::class . '->filter',
          'parameters' => [
            'tier' => 'gold',
          ],
        ],
      ],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_conference',
  'main_sponsor',
  '',
  'before:--div--;core.form.tabs:categories',
);
