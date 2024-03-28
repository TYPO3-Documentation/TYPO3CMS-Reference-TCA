..  include:: /Includes.rst.txt
..  _columns-none-properties-size:

====
size
====

..  confval:: size
    :name: none-size
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: integer
    :Scope: Display

    The :ref:`cols <columns-none-properties-cols>` value is used to set the width of the field,
    and if :code:`cols` is not found, then this value is used.

    Value for the width of the :code:`<input>` field. To set the input field to the full width of
    the form area, use the value 50. Default is 30.

