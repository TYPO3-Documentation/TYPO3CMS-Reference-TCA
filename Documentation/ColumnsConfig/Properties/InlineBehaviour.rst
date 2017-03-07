behaviour
~~~~~~~~~

:aspect:`Datatype`
    array

:aspect:`Scope`
    Display / Proc.

:aspect:`Description`
    Has information about the behavior of child-records, namely:

    localizationMode ('keep', 'select')
      Defines in general whether children are really localizable (set to 'select') or just taken from the default
      language (set to 'keep'). If this property is not set, but the affected parent and child tables were localizable,
      the mode 'select' is used by default.

      'keep'
        This is not a real localization, since the children are taken from the parent of the original language. But the
        children can be moved, deleted, modified etc. on the localized parent which - of course - also affects the
        original language.

      'select'
        This mode provides the possibility to have a selective localization and to compare localized data to the
        pendants of the original language. Furthermore this mode is extended by a 'localize all' feature, which works
        similar to the localization of content on pages, and a 'synchronize' feature which offers the possibility to
        synchronize a localization with its original language.

    localizeChildrenAtParentLocalization (boolean)
      Defines whether children should be localized when the localization of the parent gets created.

    disableMovingChildrenWithParent (boolean)
      Disables that child records get moved along with their parent records.

    enableCascadingDelete (boolean)
      Enables the deletion of child records along with their parent record. Defaults to TRUE.
