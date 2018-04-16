typeicon\_classes
-----------------

:aspect:`Datatype`
    array

:aspect:`Scope`
    Display

:aspect:`Description`
    Array of names to use for the records. The keys must correspond to the values found in the column
    referenced in the :ref:`typeicon_column <ctrl-reference-typeicon-column>` property. The values correspond
    to icons registered in the :ref:`Icon API <t3coreapi:icon>`.

    **Example from the `tt_content` table:**

    .. code-block:: php

        'typeicon_classes' => [
            'header' => 'mimetypes-x-content-header',
            'default' => 'mimetypes-x-content-text',
            ...
        ],
