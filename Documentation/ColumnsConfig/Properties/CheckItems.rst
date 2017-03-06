items
~~~~~

:aspect:`Datatype`
    array

:aspect:`Scope`
    Display

:aspect:`Description`
    If set, this array will create an array of checkboxes instead of just a single "on/off" checkbox.

    .. note::
        You can have a maximum of 31 checkboxes in such an array and each element is represented by a single bit
        in the integer value which ultimately goes into the database.

    In this array each entry is itself an array where the first entry is the label (string or LLL reference) and the
    second entry is a blank value. The value sent to the database will be an integer where each bit represents the
    state of a checkbox in this array.

    .. code-block:: php

        'items' => [
            [ 'Green tomatoes', '' ], // Note these should be LLL references
            [ 'Red peppers', '' ],
        ],
