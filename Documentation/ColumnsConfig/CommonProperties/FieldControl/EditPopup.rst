:aspect:`Datatype`
    array

:aspect:`Scope`
    fieldControl

:aspect:`Description`
    The edit popup field control gives a shortcut to edit referenced elements directly a popup. When a record is
    selected and the edit button is clicked, that record opens in a new window for modification.

    .. note::
        The edit popup control is pre-configured, but disabled by default. Enable it if you need it, the button
        is by default shown below `element browser` and `insert clipboard`.

    **Options:**

    title (string or LLL reference)
      Allows to set a different 'title' attribute to the popup icon, defaults
      to :code:`LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.edit`

    windowOpenParameters (string)
      Allows to set a different size of the popup, defaults
      to :code:`height=800,width=600,status=0,menubar=0,scrollbars=1`.

    .. figure:: ../../Images/TypeGroupFieldControlEditPopup.png
        :alt: Editing a record thanks to the wizard
        :class: with-shadow

        Edit a related record directly thanks to the Edit wizard

    **Example**

    .. code-block:: php

        'myField' => [
            'type' => 'group',
            // ...
            'config' => [
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                        'options' => [
                            'title' => 'Edit a selected record!',
                        ],
                    ],
                ],
            ],
        ],
