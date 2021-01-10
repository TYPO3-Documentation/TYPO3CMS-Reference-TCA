:aspect:`Datatype`
    string (keyword)

:aspect:`Scope`
    Display

:aspect:`Description`
    Determines the wrapping of the textarea field. Does not apply to RTE fields. There are two options:

    virtual (default)
      The textarea automatically wraps the lines like it would be expected for editing a text.

    off
      The textarea will *not* wrap the lines as you would expect when editing some kind of code.

    Example configuration to create a textarea useful for code lines since it will not wrap the lines,
    uses a :ref:`monospace font <columns-text-properties-fixedFont>`
    and :ref:`enables tabs <columns-text-properties-enableTabulator>`:

    .. code-block:: php

        'config' => [
            'type' => 'text',
            'cols' => '40',
            'rows' => '15',
            'wrap' => 'off',
            'fixedFont' => true,
            'enableTabulator' => true,
        ]
