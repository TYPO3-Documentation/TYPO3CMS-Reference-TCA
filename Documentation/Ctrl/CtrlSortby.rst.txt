sortby
------

:aspect:`Datatype`
    string (field name)

:aspect:`Scope`
    Proc. / Display

:aspect:`Description`
    Field name, which is used to manage the **order** of the records when displayed.

    The field contains an integer value which positions it at the correct position between other records
    from the same table on the current page.

    This feature is used by e.g. the "pages" table and "tt\_content" table (Content Elements) in order to output the
    pages or the content elements in the order expected by the editors. Extensions are expected to respect this field.

    Typically the field name :code:`sorting` is dedicated to this feature.

    .. code-block:: php

        'ctrl' => [
            'sortby' => 'sorting',
            ...
        ],

    .. note::
        The field should **not** be made editable by the user since the DataHandler will manage the content automatically.

    .. important::
        Do not confuse this property with :ref:`default_sortby <ctrl-reference-default-sortby>`. The sortby field contains
        an integer and is managed by the DataHandler. If by accident a content column like "title" is set as sortby, the
        DataHandler will write these integers into that field, which is most likely *not* what you want.

