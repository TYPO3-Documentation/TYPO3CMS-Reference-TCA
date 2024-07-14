..  include:: /Includes.rst.txt
..  _tca_property_autoSizeMax:
..  _columns-inline-properties-autosizemax:

===========
autoSizeMax
===========

..  confval:: autoSizeMax
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: integer
    :Scope: Display
    :Types: :ref:`select <columns-select>`, :ref:`group <columns-group>`, :ref:`inline <columns-inline>`

    The maximum size (height) of the select field.

    The size of the select field will be automatically adjusted based on the number of selected items. The select field
    will never be smaller than the specified :ref:`size <tca_property_size>` and never larger than the value of `autoSizeMax`.

    ..  note::

        Only has an effect if :ref:`maxitems <tca_property_maxitems>` is greater than 1.

    ..  note::

        For fields of type `select` this option is only available with renderType
        :ref:`selectSingleBox <columns-select-rendertype-selectSingleBox>` or
        :ref:`selectMultipleSideBySide <columns-select-rendertype-selectMultipleSideBySide>`. When using `selectSingleBox`
        the number of **selectable** items is taken into account rather than the number of selected items.

    ..  note::

        For fields of type `inline` this option is only useful in combination with the
        :ref:`foreign\_selector <columns-inline-properties-foreign-selector>`. The field that `foreign_selector` is pointing
        to has to be of type `select`.
