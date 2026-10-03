<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_speaker', [
  'photo' => [
    'label' => 'my_extension.db:speaker.photo',
    'config' => [
      'type' => 'file',
      'maxitems' => 1,
      'allowed' => 'common-image-types',
      'relationship' => 'manyToOne',
      'overrideChildTca' => [
        'columns' => [
          'crop' => [
            'config' => [
              'cropVariants' => [
                'default' => [
                  'title' => 'my_extension.db:speaker.photo.square',
                  'allowedAspectRatios' => [
                    '1:1' => [
                      'title' => 'core.wizards:imwizard.ratio.1_1',
                      'value' => 1.0,
                    ],
                  ],
                ],
              ],
            ],
          ],
        ],
      ],
    ],
  ],
]);
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_speaker',
  'photo',
  '',
  'before:--div--;my_extension.db:tab.integration',
);
