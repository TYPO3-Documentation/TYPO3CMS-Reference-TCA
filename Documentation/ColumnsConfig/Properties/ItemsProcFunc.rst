itemsProcFunc
~~~~~~~~~~~~~

:aspect:`Datatype`
    string (function reference)

:aspect:`Scope`
    Display

:aspect:`Description`
    PHP function which is called to fill / manipulate the array with elements.

    [classname]->[methodname]

    The function/method will have an array of parameters passed to it, the items-array is passed by reference
    in the key 'items'. By modifying the array of items, you alter the list of items. A method may throw an
    exception which will be displayed as a proper error message to the user.

    See extension styleguide for a couple of examples on different config type's.