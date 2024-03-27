..  include:: /Includes.rst.txt
..  _columns-imageManipulation-properties-cropVariants:

============
cropVariants
============

..  confval:: cropVariants
    :name: imageManipulation-cropVariants
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: array
    :Scope: Proc. / Display

    Main crop, focus area and cover area configuration.

    Default configuration:

    ..  code-block:: php

        'cropVariants' => [
           'default' => [
              'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.crop_variant.default',
              'allowedAspectRatios' => [
                 '16:9' => [
                    'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.16_9',
                    'value' => 16 / 9
                 ],
                 '3:2' => [
                    'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.3_2',
                    'value' => 3 / 2
                 ],
                 '4:3' => [
                    'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.4_3',
                    'value' => 4 / 3
                 ],
                 '1:1' => [
                    'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.1_1',
                    'value' => 1.0
                 ],
                 'NaN' => [
                    'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.free',
                    'value' => 0.0
                 ],
              ],
              'selectedRatio' => 'NaN',
              'cropArea' => [
                 'x' => 0.0,
                 'y' => 0.0,
                 'width' => 1.0,
                 'height' => 1.0,
              ],
           ],
        ]

   Above configuration is a fall back if no other more specific configuration has been given.


Examples
========

Define multiple crop variants
-----------------------------

It is possible to define multiple crop variants. The array key is used as identifier for the ratio and the label
is specified with the "title" and the actual (floating point) ratio with the "value" key. The value **must** be of
PHP type float, not only a string.

..  code-block:: php

    'config' => [
       'type' => 'imageManipulation',
       'cropVariants' => [
          'mobile' => [
             'title' => 'LLL:EXT:ext_key/Resources/Private/Language/locallang.xlf:imageManipulation.mobile',
             'allowedAspectRatios' => [
                '4:3' => [
                   'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.4_3',
                   'value' => 4 / 3
                ],
                'NaN' => [
                   'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.free',
                   'value' => 0.0
                ],
             ],
          ],
          'desktop' => [
             'title' => 'LLL:EXT:ext_key/Resources/Private/Language/locallang.xlf:imageManipulation.desktop',
             'allowedAspectRatios' => [
                '4:3' => [
                   'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.4_3',
                   'value' => 4 / 3
                ],
                'NaN' => [
                   'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.free',
                   'value' => 0.0
                ],
             ],
          ],
       ]
    ]


Define initial crop area
------------------------

It is also possible to define an initial crop area. If no initial crop area is defined, the default selected
crop area will cover the complete image. Crop areas are defined relatively with floating point numbers. The x and y
coordinates and width and height must be specified for that. The below example has an initial crop area in the size
the previous image cropper provided by default.

..  code-block:: php

    'config' => [
       'type' => 'imageManipulation',
       'cropVariants' => [
          'mobile' => [
             'title' => 'LLL:EXT:ext_key/Resources/Private/Language/locallang.xlf:imageManipulation.mobile',
             'cropArea' => [
                'x' => 0.1,
                'y' => 0.1,
                'width' => 0.8,
                'height' => 0.8,
             ],
          ],
       ],
    ]


Add a focus area
----------------

Users can also select a focus area, when configured. The focus area is always **inside** the crop area and marks the
area in the image which must be visible for the image to transport its meaning. The selected area is persisted to
the database but will have no effect on image processing. The data points are however made available as data
attribute when using the `<f:image />` view helper.

The below example adds a focus area, which is initially one third of the size of the image and centered.

..  code-block:: php

    'config' => [
       'type' => 'imageManipulation',
       'cropVariants' => [
          'mobile' => [
             'title' => 'LLL:EXT:ext_key/Resources/Private/Language/locallang.xlf:imageManipulation.mobile',
             'focusArea' => [
                'x' => 1 / 3,
                'y' => 1 / 3,
                'width' => 1 / 3,
                'height' => 1 / 3,
             ],
          ],
       ],
    ]


Define cover areas
------------------

Very often images are used in a context, where they are overlaid with other DOM elements, like a headline. To give
editors a hint which area of the image is affected, when selecting a crop area, it is possible to define multiple
so called cover areas. These areas are shown inside the crop area. The focus area cannot intersect with any of
the cover areas.

..  code-block:: php

    'config' => [
       'type' => 'imageManipulation',
       'cropVariants' => [
          'mobile' => [
             'title' => 'LLL:EXT:ext_key/Resources/Private/Language/locallang.xlf:imageManipulation.mobile',
             'coverAreas' => [
                [
                   'x' => 0.05,
                   'y' => 0.85,
                   'width' => 0.9,
                   'height' => 0.1,
                ]
             ],
          ],
       ],
    ]

The above configuration examples are basically meant to add one single cropping configuration
to sys_file_reference, which will then apply in every record, which reference images.


Configuration per content element
---------------------------------

It is however also possible to provide a configuration per content element. If you for example want a different
cropping configuration for tt_content images, then you can add the following to your `image` field configuration of tt_content records:

..  code-block:: php

    'config' => [
       'overrideChildTca' => [
          'columns' => [
             'crop' => [
                'config' => [
                   'cropVariants' => [
                      'mobile' => [
                         'title' => 'LLL:EXT:ext_key/Resources/Private/Language/locallang.xlf:imageManipulation.mobile',
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
    ]

Please note, that you need to specify the target column name as array key. Most of the time this will be `crop`
as this is the default field name for image manipulation in `sys_file_reference`


Define a cropping configuration for a specific content element
--------------------------------------------------------------

It is also possible to set the cropping configuration only for a specific tt_content element type by using the
`columnsOverrides` feature:

..  code-block:: php

    $GLOBALS['TCA']['tt_content']['types']['textmedia']['columnsOverrides']['assets']['config']['overrideChildTca']['columns']['crop']['config'] = [
       'cropVariants' => [
          'default' => [
             'disabled' => true,
          ],
          'mobile' => [
             'title' => 'LLL:EXT:ext_key/Resources/Private/Language/locallang.xlf:imageManipulation.mobile',
             'cropArea' => [
                'x' => 0.1,
                'y' => 0.1,
                'width' => 0.8,
                'height' => 0.8,
             ],
             'allowedAspectRatios' => [
                '4:3' => [
                   'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.4_3',
                   'value' => 4 / 3
                ],
                'NaN' => [
                   'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.free',
                   'value' => 0.0
                ],
             ],
          ],
       ],
    ];

Please note, that the array for ``overrideChildTca`` is merged with the child TCA, so are the crop variants that are defined
in the child TCA (most likely sys_file_reference). Because you cannot remove crop variants easily, it is possible to disable them
for certain field types by setting the array key for a crop variant ``disabled`` to the value ``true``


Disable an aspect ratio
-----------------------

Not only cropVariants but also aspect ratios can be disabled by adding a
"disabled" key to the array.

..  code-block:: php

    $GLOBALS['TCA']['tt_content']['types']['textmedia']['columnsOverrides']['assets']['config']['overrideChildTca']['columns']['crop']['config'] = [
        'cropVariants' => [
            'default' => [
                'allowedAspectRatios' => [
                    '4:3' => [
                        'disabled' => true,
                    ],
                ],
            ],
        ],
    ];

This works for each field, that defines cropVariants for any
:sql:`sys_file_reference` usage.



Crop variants in view helpers
-----------------------------

To render crop variants, the variants can be specified as argument to the image view helper:

..  code-block:: html

    <f:image image="{data.image}" cropVariant="mobile" width="800" />
