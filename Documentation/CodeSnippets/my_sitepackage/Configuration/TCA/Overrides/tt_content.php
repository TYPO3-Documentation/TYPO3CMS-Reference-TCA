<?php

defined('TYPO3') or die();

// The translators of this site write the headers of content elements
// themselves, so a translation starts with an unchanged copy of the header
$GLOBALS['TCA']['tt_content']['columns']['header']['l10n_mode'] = '';

// The editors of this site call a conference an event. The "New content
// element" wizard shows the teaser of the conference extension with the
// title they know.
$GLOBALS['TCA']['tt_content']['types']['myextension_conferenceteaser']['creationOptions']['title']
  = 'my_sitepackage.db:tt_content.conference_teaser.wizard_title';

// The layout of this site has room for wide and square images only
$GLOBALS['TCA']['tt_content']['columns']['image']['config']
  ['overrideChildTca']['columns']['crop']['config']['cropVariants'] = [
    'default' => [
      'title' => 'core.wizards:imwizard.crop_variant.default',
      'allowedAspectRatios' => [
        '16:9' => [
          'title' => 'core.wizards:imwizard.ratio.16_9',
          'value' => 16 / 9,
        ],
        '1:1' => [
          'title' => 'core.wizards:imwizard.ratio.1_1',
          'value' => 1.0,
        ],
      ],
    ],
  ];

// "Text and images" also shows its images on mobile devices, initially the
// middle of the image
$GLOBALS['TCA']['tt_content']['types']['textpic']['columnsOverrides']
  ['image']['config']['overrideChildTca']['columns']['crop']['config']
  ['cropVariants']['mobile'] = [
    'title' => 'my_sitepackage.db:crop_variant.mobile',
    'allowedAspectRatios' => [
      '4:3' => [
        'title' => 'core.wizards:imwizard.ratio.4_3',
        'value' => 4 / 3,
      ],
    ],
    'cropArea' => [
      'x' => 0.1,
      'y' => 0.1,
      'width' => 0.8,
      'height' => 0.8,
    ],
  ];
