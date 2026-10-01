<?php

return [
  'ctrl' => [
    'title' => 'My table',
    'label' => 'my_image_manipulation',
  ],
  'columns' => [
    'my_image_manipulation' => [
      'label' => 'LLL:my_extension.db:my_image_manipulation',
      'config' => [
        'type' => 'imageManipulation',
        // The default crop variants of the core are used
      ],
    ],

    'crop_area' => [
      'label' => 'Crop variant field',
      'config' => [
        'type' => 'imageManipulation',
        'cropVariants' => [
          'mobile' => [
            'title' => 'LLL:my_extension.db:imageManipulation.mobile',
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

    'focus_area' => [
      'label' => 'Crop variant field with a focus area',
      'config' => [
        'type' => 'imageManipulation',
        'cropVariants' => [
          'mobile' => [
            'title' => 'LLL:my_extension.db:imageManipulation.mobile',
            'focusArea' => [
              'x' => 1 / 3,
              'y' => 1 / 3,
              'width' => 1 / 3,
              'height' => 1 / 3,
            ],
          ],
        ],
      ],
    ],

    'cover_area' => [
      'label' => 'Crop variant field with a cover area',
      'config' => [
        'type' => 'imageManipulation',
        'cropVariants' => [
          'mobile' => [
            'title' => 'LLL:my_extension.db:imageManipulation.mobile',
            'coverAreas' => [
              [
                'x' => 0.05,
                'y' => 0.85,
                'width' => 0.9,
                'height' => 0.1,
              ],
            ],
          ],
        ],
      ],
    ],

    'multiple' => [
      'label' => 'Field with multiple crop variants',
      'config' => [
        'type' => 'imageManipulation',
        'cropVariants' => [
          'mobile' => [
            'title' => 'LLL:my_extension.db:imageManipulation.mobile',
            'allowedAspectRatios' => [
              '4:3' => [
                'title' => 'LLL:core.wizards:imwizard.ratio.4_3',
                'value' => 4 / 3,
              ],
              'NaN' => [
                'title' => 'LLL:core.wizards:imwizard.ratio.free',
                'value' => 0.0,
              ],
            ],
          ],
          'desktop' => [
            'title' => 'LLL:my_extension.db:imageManipulation.desktop',
            'allowedAspectRatios' => [
              '4:3' => [
                'title' => 'LLL:core.wizards:imwizard.ratio.4_3',
                'value' => 4 / 3,
              ],
              'NaN' => [
                'title' => 'LLL:core.wizards:imwizard.ratio.free',
                'value' => 0.0,
              ],
            ],
          ],
        ],
      ],
    ],
  ],
  'types' => [
    '0' => [
      'showitem' => 'my_image_manipulation',
    ],
  ],
];
