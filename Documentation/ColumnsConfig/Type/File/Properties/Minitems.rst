..  include:: /Includes.rst.txt
..  _columns-file-properties-minitems:

========
minitems
========

.. confval:: minitems (type => file)

    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: integer > 0
    :Scope: Display
    :Types: :ref:`group <columns-group>`, :ref:`inline <columns-inline>`
    :Default: 0

    Minimum number of attached files. JavaScript record validation prevents the
    record from being saved if the limit is not satisfied.

    This property can also be overridden by page TSconfig.

Example, exactly one image has to be attached:

..  code-block:: php

    // After
    'columns' => [
        'image' => [
            'label' => 'My one and only image',
            'config' => [
                'type' => 'file',
                'minitems' => 1,
                'maxitems' => 1,
                'allowed' => 'common-image-types'
            ],
        ],
    ],
