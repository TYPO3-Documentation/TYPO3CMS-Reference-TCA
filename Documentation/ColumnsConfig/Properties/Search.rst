search
~~~~~~

:aspect:`Datatype`
    array

:aspect:`Scope`
    Search

:aspect:`Description`
    Defines additional search-related options for a given field.

    pidonly (boolean)
      Searches in the column only if search happens on the single page, does not search the field
      if searching in the whole table.

    case (boolean)
      Makes the search case-sensitive. This requires a proper database collation for the field,
      see your database documentation.

    andWhere (string)
      Additional SQL WHERE statement without 'AND'. With this it is possible to place an additional condition
      on the field when it is searched

      **Example from "tt\_content" bodytext:**

      .. code-block:: php

          'bodytext' => [
              'config' => [
                  'search' => [
                      'andWhere' => 'CType=\'text\' OR CType=\'textpic\'',
                  ],
                  ...
              ],
              ...
          ],

      This means that the "bodytext" field of the "tt\_content" table will be searched in only for elements
      of type Text and Text & Images. This helps making any search more relevant.
