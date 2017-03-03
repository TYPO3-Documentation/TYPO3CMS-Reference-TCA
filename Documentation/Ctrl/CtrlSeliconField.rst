selicon\_field
--------------

:aspect:`Datatype`
    string (field name)

:aspect:`Scope`
    Display

:aspect:`Description`
    Field name, which contains the thumbnail image used to represent the record visually whenever it is shown
    in FormEngine as a foreign reference selectable from a selector box.

    Only images in a usual format for the web (i.e. gif, png, jpeg, jpg) are allowed. No scaling is
    done. Also see :ref:`selicon_field_path <ctrl-reference-selicon-field-path>`.

    You should consider this a feature where you can attach an "icon" to a record which is typically selected as a
    reference in other records, for example a "category". In such a case this field points out the icon image which
    will then be shown. This feature can thus enrich the visual experience of selecting the relation in other forms.

    **Example from table "backend\_layout":**

    .. code-block:: php

        'ctrl' => [
            'selicon_field' => 'icon',
            'selicon_field_path' => 'uploads/media',
            ...
        ],
