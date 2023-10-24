..  include:: /Includes.rst.txt
..  _tca_property_multiple:

========
multiple
========

..  confval:: multiple

    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: boolean
    :Scope: Display / Proc.
    :Types: :ref:`group <columns-group>`, :ref:`select <columns-select>`

    Allows the *same item* more than once in a list.

    If used with bidirectional MM relations it must be set for both the native
    and foreign field configuration.

    ..  versionchanged:: 13.0
        The property :ref:`MM_hasUidField <tca_property_MM_hasUidField>` is
        obsolete. It had to be defined previously when using `multiple`.
