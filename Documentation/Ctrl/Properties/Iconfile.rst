.. include:: /Includes.rst.txt
.. _ctrl-reference-iconfile:

========
iconfile
========

:aspect:`Datatype`
    string

:aspect:`Scope`
    Display

:aspect:`Description`
    Pointing to the icon file to use for the table. Icons should be square SVGs. In case you cannot supply a SVG you
    can still use a PNG file of 64x64 pixels in dimension.

    **Example usage from the "examples" extension:**

    .. code-block:: php

        'ctrl' => [
            'iconfile' => 'EXT:examples/Resources/Public/Images/Haiku.svg',
            ...
        ],
