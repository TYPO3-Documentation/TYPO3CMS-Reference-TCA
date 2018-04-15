EXT
---

:aspect:`Datatype`
    array

:aspect:`Scope`
    (variable, depends on extension)

:aspect:`Description`
    User-defined content for extensions. You can use this as you like.

    Let's say that you have an extension with the key "myext", then it is ok to define properties for:

    .. code-block:: php

        ['ctrl']['EXT']['myext'] = ... (whatever you define)

    Note this is just a convention. You can use some other syntax but
    with the risk that it conflicts with some other extension or future
    changes in the TYPO3 Core.
