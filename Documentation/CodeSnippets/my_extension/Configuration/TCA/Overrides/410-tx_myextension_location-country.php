<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_location', [
  'country' => [
    'label' => 'my_extension.db:location.country',
    'config' => [
      'type' => 'country',
      'labelField' => 'localizedName',
      // Listed first, before all other countries
      'prioritizedCountries' => ['CH', 'DE', 'AT'],
      'filter' => [
        // Conferences take place in these countries only
        'onlyCountries' => ['AT', 'CH', 'DE', 'FR', 'IT', 'LI'],
      ],
      'sortItems' => [
        'label' => 'asc',
      ],
      'default' => 'CH',
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_location',
  'country',
  '',
  'after:--palette--;;address',
);
