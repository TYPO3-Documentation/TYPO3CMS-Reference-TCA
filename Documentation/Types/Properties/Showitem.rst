.. include:: /Includes.rst.txt
.. _types-properties-showitem:

========
showitem
========

:aspect:`Datatype`
    string

:aspect:`Scope`
    string (list of field configuration sets)

:aspect:`Description`
    **Required.**

    Configuration of the displayed order of fields in FormEngine and their tab alignment.

    The whole string is a comma `,` separated list of tokens. Each token can have keywords separated by
    semicolon `;`.

    Each comma separated token is one of the following:

    fieldName;fieldLabel
        Name of a field to show. Optionally an alternative label (string or LLL reference) to override
        the :ref:`default label from columns section <columns-properties-label>`.

    ==palette==;paletteLabel;paletteName
        Name of a :ref:`palette <palettes>` to show. The label (string or LLL reference) is optional. If set, it is
        shown above the single palette fields. The palette name is required and must reference a palette from
        the palette section.

        .. code-block:: php

            ==palette==;;caching // Show palette "caching" without additional label
            ==palette==;Caching;caching // Show palette "caching" with label "Caching"

    ==div==;tabLabel
        Put all fields after this token onto a new tab and name the tab as given in "tabLabel" (string or LLL reference).

    **Examples:**

    .. code-block:: php

        'types' => [
            '0' => [
                'showitem' => 'hidden, title, poem,',
            ],
        ],

    The above example shows three fields of the form. Since no further '==div==' are specified, there would be only
    one tab. In this case FormEngine will suppress that single tab and just show all specified fields without
    a tabbing indicator.

    .. code-block:: php

        'types' => [
            '0' => [
                'showitem' => '
                    hidden, title, poem,
                    ==div==;LLL:EXT:examples/locallang_db.xml:tx_examples_haiku.images, image1, image2,
                '
            ],
        ],

    Put three fields on first tab "General" and the two fields "image1" and "image2" on a second tab with the
    localized name found in "EXT:examples/locallang_db.xml:tx_examples_haiku.images".

    .. code-block:: php

        'types' => [
            '0' => [
                'showitem' => '
                    ==div==;LLL:EXT:examples/locallang_db.xml:tx_examples_haiku.images, hidden, title, poem,
                    ==div==;LLL:EXT:examples/locallang_db.xml:tx_examples_haiku.images, image1, image2,
                '
            ],
        ],

    Similar to the example before, but rename the "General" tab to the string specified in label
    "LLL:EXT:examples/locallang_db.xml:tx_examples_haiku.images".

    .. note::
        It is good practice to add a comma in excess behind the very last field name as shown in the examples
        above. The FormEngine code will ignore this, but it helps developers to not forget about a comma when
        additional fields are added, which can suppress an annoying "Why is my new field not displayed?" bug hunt.
