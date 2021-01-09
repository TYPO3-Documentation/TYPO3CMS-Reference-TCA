:aspect:`Datatype`
    array

:aspect:`Scope`
    Proc.

:aspect:`Description`
    An array which defines an integer range within which the value must be. Keys:

    lower
      Defines the lower integer value.

    upper
      Defines the upper integer value.

    It is allowed to specify only one of both of them.

    .. note::
        This feature is evaluated *on the server only* so any regulation of the value will have happened
        after saving the form.

    Limit an integer to be within the range 10 to 1000

    .. code-block:: php

        'eval' => 'int',
        'range' => [
            'lower' => 10,
            'upper' => 1000
        ],

    In this example the upper limit is set to the last day in year 2020 while the lowest possible value is
    set to the date of 2014:

    .. code-block:: php

        'range' => [
            'upper' => gmmktime(23, 59, 59, 12, 31, 2020),
            'lower' => gmmktime(0, 0, 0, 1, 1, 2014),
        ],
