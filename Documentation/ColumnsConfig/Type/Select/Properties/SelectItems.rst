:aspect:`Datatype`
    array

:aspect:`Scope`
    Display / Proc.

:aspect:`Description`
    Contains the elements for the selector box unless the property "foreign\_table" or "special" has been set
    in which case automated values are set in addition to any values listed in this array.

    Each element in this array is in itself an array where:

    - First value is the **item label** (string or LLL reference)

    - Second value is the **value of the item**

      - The special value `--div--` is used to insert a non-selectable value that appears as a divider
        label in the selector box (only for maxitems <=1)

      - Values must not contain "," (comma) and "\|" (vertical bar). If you want to use "authMode" you should
        also refrain from using ":" (colon).

    - Third value is an optional icon. For custom icons use a path prepended with "EXT:" to refer to an image
      file found inside an extension or use an registered icon identifier.

    - Fourth value is an optional description text. This is only shown when the list is shown
      with `renderType='selectCheckBox'`.

    - Fifth value is reserved as keyword "EXPL\_ALLOW" or "EXPL\_DENY". See
      property :ref:`authMode / individual <columns-select-properties-authmode>` for more details.

    **Example:**

    A configuration could look like this:

    .. code-block:: php

        'type' => 'select',
        'items' => [
            ['English', ''],
            ['Danish', 'dk'],
            ['German', 'de'],
        ]

    A more complex example could be this (includes icons):

    .. code-block:: php

        'type' => 'select',
        'items' => [
            ['LLL:EXT:cms/locallang_ttc.php:k1', 0, 'EXT:myext/Resources/Public/selicons/k1.gif'],
            ['LLL:EXT:cms/locallang_ttc.php:k2', 1, 'tx-myext-selicons-k2'],
            ['LLL:EXT:cms/locallang_ttc.php:k3', 2, 'tx-myext-selicons-k3'],
        ]


    .. note::

        When having a zero as second value and the field is of type :code:`int(10)` in the database, make sure to define
        the :ref:`default value <columns-select-properties-default>` as well in TCA: :php:`'default' => 0`. Otherwise
        issues may arise e.g. with MySQL strict mode.
