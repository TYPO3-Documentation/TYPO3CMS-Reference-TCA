<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTCAcolumns('tx_myextension_conference', [
  'logo' => [
    'label' => 'my_extension.db:conference.logo',
    'config' => [
      'type' => 'file',
      'maxitems' => 1,
      'allowed' => 'common-image-types',
      'relationship' => 'manyToOne',
    ],
  ],
  'impressions' => [
    'label' => 'my_extension.db:conference.impressions',
    'config' => [
      'type' => 'file',
      'allowed' => 'common-image-types',
      'overrideChildTca' => [
        'columns' => [
          'crop' => [
            'config' => [
              'cropVariants' => [
                'desktop' => [
                  'title' => 'my_extension.db:conference.impressions.desktop',
                  'allowedAspectRatios' => [
                    '16:9' => [
                      'title' => 'core.wizards:imwizard.ratio.16_9',
                      'value' => 16 / 9,
                    ],
                    'NaN' => [
                      'title' => 'core.wizards:imwizard.ratio.free',
                      'value' => 0.0,
                    ],
                  ],
                ],
                'mobile' => [
                  'title' => 'my_extension.db:conference.impressions.mobile',
                  'allowedAspectRatios' => [
                    '4:3' => [
                      'title' => 'core.wizards:imwizard.ratio.4_3',
                      'value' => 4 / 3,
                    ],
                  ],
                  // Initially the middle of the image, without the edges
                  'cropArea' => [
                    'x' => 0.1,
                    'y' => 0.1,
                    'width' => 0.8,
                    'height' => 0.8,
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
$GLOBALS['TCA']['tx_myextension_conference']['palettes']['media'] = [
  'showitem' => 'logo, impressions',
];
ExtensionManagementUtility::addToAllTCAtypes(
  'tx_myextension_conference',
  '--palette--;;media',
  '',
  'before:--div--;core.form.tabs:categories',
);
