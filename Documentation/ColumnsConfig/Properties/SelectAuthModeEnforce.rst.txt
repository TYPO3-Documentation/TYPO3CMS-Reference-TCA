:aspect:`Datatype`
    string (keyword)

:aspect:`Scope`
    Display / Proc.

:aspect:`Description`
    Various additional enforcing options for :ref:`authMode <columns-select-properties-authmode>`, keywords:

    strict
      If set, then permission to edit the record will be granted only if the "authMode" evaluates OK. The default
      is that a record having an authMode configured field with a "non-allowed" value can be edited – just the
      value of the authMode field cannot be set to a value that is not allowed. **Notice:** This works only when
      maxitems <=1 (and no MM relations) since the "raw" value in the record is all that is evaluated!
