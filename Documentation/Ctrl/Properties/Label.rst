.. include:: /Includes.rst.txt
.. _ctrl-reference-label:

=====
label
=====

:aspect:`Datatype`
    string (field name)

:aspect:`Scope`
    Display

:aspect:`Description`
    **Required!**

    Points to the field name of the table which should be used as the "title" when the record is displayed in the system.

    .. note::
        :ref:`label_userFunc <ctrl-reference-label-userfunc>` overrides this property (but it is still required).

    .. warning::
        For the label only regular input or text fields should be used. Otherwise issues may occur and prevent from a working system if :code:`TCEMAIN.table.tt_content.disablePrependAtCopy` is not set or set to :code:`0`.


.. _ctrl-reference-label-alt:

label\_alt
==========

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
        ],

    .. note::
        :ref:`label_userFunc <ctrl-reference-label-userfunc>` overrides this property, also
        see :ref:`label_alt_force <ctrl-reference-label-alt-force>`.


.. _ctrl-reference-label-alt-force:

label\_alt\_force
=================

:aspect:`Datatype`
    boolean

:aspect:`Scope`
    Display

:aspect:`Description`
    If set, then the :ref:`label_alt <ctrl-reference-label-alt>` fields
    are always shown in the title separated by comma.

    .. note::
        :ref:`label_userFunc <ctrl-reference-label-userfunc>` overrides this property.
