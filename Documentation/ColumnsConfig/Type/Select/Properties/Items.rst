..  include:: /Includes.rst.txt
..  _columns-select-properties-items:

=====
items
=====

..  confval:: items (type => select)

    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: array
    :Scope: Display  / Proc.
    :RenderType: all

    Contains the elements for the selector box unless the property :php:`foreign_table` or :php:`special` has been set
    in which case automated values are set in addition to any values listed in this array.

    ..  deprecated:: 12.3

        Using the numerical indexes 0 - 4 is deprecated. Use the newly introduced
        keys.


    Each element in this array is in itself an associative array.

    label (string or LLL reference)
        The displayed title.

    value (integer or string)
        The value stored in the database.

        *  The special value `--div--` was used to insert a non-selectable
            value that appears as a divider label in the selector box. It is kept
            for backwards-compatible reasons. Use :ref:`item groups
            <columns-select-properties-item-groups>` for custom selects instead.
        *  Values must not contain `,` (comma) and `|` (vertical bar). If you want to use :php:`authMode`, you should
            also refrain from using `:` (colon).

    icon (EXT: path or icon identifier)
        Optional icon. For custom icons use a path prepended with `EXT:` to refer to an image
        file found inside an extension or use an registered icon identifier. If configured on the :php:`foreign_table`,
        :ref:`selicon-field<ctrl-reference-selicon-field>` is respected.

    group (string)
        The key of the :ref:`item group <columns-select-properties-item-groups>`.

    description (string or array)
        Fifth value is an optional description text. This is only shown when the list is shown
        with `renderType='selectCheckBox'`.

..  note::

        When having a zero as :php:`value` and the field is of type :code:`int(10)` in the database, make sure to define
        the :ref:`default value <columns-select-properties-default>` as well in TCA: :php:`'default' => 0`. Otherwise
        issues may arise, e.g. with MySQL strict mode.


Examples
========

..  _tca_example_select_single_1:

Simple items definition with label and value
--------------------------------------------

..  include:: /Images/Rst/SelectSingle1.rst.txt

..  include:: /CodeSnippets/SelectSingle1.rst.txt


..  _tca_example_select_single_4:

Items definition with label, value and icon
-------------------------------------------

A more complex example could be this (includes icons):

..  include:: /Images/Rst/SelectSingle4.rst.txt

..  include:: /CodeSnippets/SelectSingle4.rst.txt

..  _tca_example_sys_language_uid:

A typical sys_language_uid field
--------------------------------

The icons can also be referenced by their identifier in the
:ref:`Icon API<t3coreapi:icon>`

..  include:: /Images/Rst/SysLanguageUid.rst.txt

..  include:: /CodeSnippets/SysLanguageUid.rst.txt


Select checkbox field with icons and descriptions
-------------------------------------------------

Descriptions are only displayed in render type `selectCheckbox`.

..  include:: /Images/Rst/SelectCheckbox3.rst.txt

..  include:: /CodeSnippets/SelectCheckbox3.rst.txt


SelectSingle field with itemGroups
-----------------------------------

A select single field of size 6 with 3 item groups and one item without group.

..  include:: /Images/Rst/SelectSingle17.rst.txt

..  include:: /CodeSnippets/SelectSingle17.rst.txt
