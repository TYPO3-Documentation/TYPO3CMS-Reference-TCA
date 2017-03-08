size
~~~~

:aspect:`Datatype`
    integer

:aspect:`Scope`
    Display

:aspect:`Description`
    Height of the box in FormEngine.

    With `type='select'` and `renderType='selectSingle'`, the default is `1`, but if set to a number greater than 1,
    the select drop down will be displayed as box where only one item can be selected.

    With `type='select'` and `renderType='selectSingleBox'`, this value should not be set to a number smaller than 2.

    With `type='group'`, the "box" collapses to a single element input and should then be combined with a
    :ref:`maxitems=1 <columns-group-properties-maxitems>`, the default is `5`.