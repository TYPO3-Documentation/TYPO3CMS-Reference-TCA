..  include:: /Includes.rst.txt
..  _tca_property_required:

========
required
========

..  versionadded:: 12.0
    This option should be used instead of an `eval` property with the
    deprecated keyword `required`.

..  confval:: required
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: boolean
    :Scope: Display / Proc.
    :Default: false
    :Types:
        :ref:`input <columns-input>`,
        :ref:`text <columns-text>`

    If set to true a non-empty value is required in the field. Otherwise the
    form cannot be saved.
