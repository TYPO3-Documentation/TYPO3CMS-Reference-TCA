..  include:: /Includes.rst.txt

..  _columns-uuid-properties-size:

====
size
====

..  confval:: size
    :name: uuid-size
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: integer
    :Scope: Display

    Abstract value for the width of the :html:`<input>` field. To set the field
    to the full width of the form area, use the value 50. Minimum is 10.
    Default is 30.

    This column configuration can be overwritten by
    :ref:`page TSconfig <t3tsconfig:tceform>`.
