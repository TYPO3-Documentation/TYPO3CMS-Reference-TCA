..  include:: /Includes.rst.txt
..  _types-properties-subtypes-addlist:

=================
subtypes\_addlist
=================

..  confval:: subtypes_addlist
    :name: types-subtypes-addlist
    :Path: $GLOBALS['TCA'][$table]['types'][$type]
    :type: array

    A list of fields to add when the :ref:`subtype_value_field <types-properties-subtype-value-field>`
    matches a key in this array.

    ..  code-block:: plaintext
        :caption: Syntax

        "[value]" => "[comma-separated list of fields which are added]"
