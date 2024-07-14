..  include:: /Includes.rst.txt
..  _tca_property_size:

====
size
====

..  confval:: size
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: integer
    :Scope: Display
    :Types: :ref:`group <columns-group>`

    Height of the box in FormEngine.

    With `type='select'` and `renderType='selectSingle'`, the default is `1`, but if set to a number greater than 1,
    the select drop down will be displayed as box where only one item can be selected.

    With `type='select'` and `renderType='selectSingleBox'`, this value should not be set to a number smaller than 2.

    With `type='group'` or `type='folder'`, the "box" collapses to a single element input and should then be combined with a
    :ref:`maxitems=1 <columns-group-properties-maxitems>`, the default is `5`.
