..  include:: /Includes.rst.txt
..  _columns-languge-migration:

=========
Migration
=========

An automatic TCA migration is performed on the fly, migrating all occurrences
to the new TCA type and adding a deprecation message to the deprecation log
where code adaption has to take place. Occurrences are all columns, defined as
:php:`$TCA['ctrl']['languageField']`, as well as all columns, using the
`special=languages` option in combination with `type=select`.

..  note::

    The migration resets the whole `config` array to use the new TCA
    type. Custom setting such as field wizards are not evaluated until the TCA
    configuration is adapted.

..  code-block:: php

    // Before

    'config' => [
        'type' => 'select',
        'renderType' => 'selectSingle',
        'foreign_table' => 'sys_language',
        'items' => [
            ['LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages', -1],
            ['LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value', 0]
        ],
        'default' => 0
    ]

    // After

    'config' => [
        'type' => 'language'
    ]

..  code-block:: php

    // Before

    'config' => [
        'type' => 'select',
        'renderType' => 'selectSingle',
        'special' => 'languages',
        'items' => [
            [
                'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                -1,
                'flags-multiple'
            ],
        ],
        'default' => 0,
    ]

    // After

    'config' => [
        'type' => 'language'
    ]
