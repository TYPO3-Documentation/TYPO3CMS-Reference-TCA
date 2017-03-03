label\_alt
----------

:aspect:`Datatype`
    String (comma-separated list of field names)

:aspect:`Scope`
    Display

:aspect:`Description`
    Comma-separated list of field names, which are holding alternative
    values to the value from the field pointed to by "label" (see above)
    if that value is empty. May not be used consistently in the system,
    but should apply in most cases.

    **Example for table "tt\_content"**

    .. code-block:: php

        'ctrl' => [
            'label' => 'header',
            'label_alt' => 'subheader,bodytext',

    .. note::
        :ref:`label_userFunc <ctrl-reference-label-userfunc>` overrides this property, als
        see :ref:`label_alt_force <ctrl-reference-label-alt-force>`.
