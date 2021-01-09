:aspect:`Datatype`
    string (table name)

:aspect:`Scope`
    Proc. / Display

:aspect:`Description`
    This property does not really exist for group-type fields. It is needed as a workaround for an Extbase limitation.
    It is used to resolve dependencies during Extbase persistence. It should hold the same values as property
    :ref:`allowed <columns-group-properties-allowed>`. Notice that only one table name is allowed here in contrast
    to the property :ref:`allowed <columns-group-properties-allowed>` itself.
