<?php

defined('TYPO3') or die();

// The name of the location is shown on top of the lower part of the image
$GLOBALS['TCA']['tx_myextension_location']['columns']['image']['config']
  ['overrideChildTca']['columns']['crop']['config']['cropVariants'] = [
    'default' => [
      'title' => 'core.wizards:imwizard.crop_variant.default',
      'allowedAspectRatios' => [
        '16:9' => [
          'title' => 'core.wizards:imwizard.ratio.16_9',
          'value' => 16 / 9,
        ],
      ],
      'coverAreas' => [
        [
          'x' => 0.05,
          'y' => 0.75,
          'width' => 0.9,
          'height' => 0.2,
        ],
      ],
    ],
  ];
