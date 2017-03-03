thumbnail
---------

:aspect:`Datatype`
    string (field name)

:aspect:`Scope`
    Display

:aspect:`Description`
    Field name, which contains the value for any thumbnails of the records. This could be a field
    of type "inline", usually a "sys_file_reference" / FAL record.

    **Example:**

    For the "tt\_content" table this option could point to the field "image" or "media" which contains the list of
    images that can be attached to the content element. You might have to enable "Show Thumbnails by default" in
    the "Edit and Advanced functions" tab of the User Settings module first in order to see this display.

    .. code-block:: php

        'ctrl' => [
            'thumbnail' => 'image',
            ...
        ],

    The effect of the field can be seen in listings in e.g. the "Web > List" module:

    .. figure:: ../Images/CtrlThumbnail.png
        :alt: Thumbnails in the list module

        Thumbnails in the List module
