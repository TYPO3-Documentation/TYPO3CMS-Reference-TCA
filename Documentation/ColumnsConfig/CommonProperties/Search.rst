..  include:: /Includes.rst.txt
..  _tca_property_search:

======
search
======

..  confval:: search
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: array
    :Scope: Search
    :Types: :ref:`input <columns-input>`

    Defines additional search-related options for a given field.

    ..  confval:: pidonly
        :type: boolean

        Searches in the column only if search happens on the single page, does not search the field
        if searching in the whole table.

    ..  confval:: case
        :type: boolean

        Makes the search case-sensitive. This requires a proper database collation for the field,
        see your database documentation.

    ..  confval:: andWhere
        :type: string

        Additional SQL WHERE statement without 'AND'. With this it is possible to place an additional condition
        on the field when it is searched

        Example from "tt\_content" bodytext::

            'bodytext' => [
                'config' => [
                    'search' => [
                        'andWhere' => '{#CType}=\'text\' OR {#CType}=\'textpic\'',
                    ],
                    ...
                ],
                ...
            ],

        This means that the "bodytext" field of the "tt\_content" table will be searched in only for elements
        of type Text and Text & Images. This helps making any search more relevant.

        The above example uses the special field quoting syntax :php:`{#...}`
        around identifiers to be as :ref:`DBAL <t3coreapi:database>`-compatible as
        possible.
