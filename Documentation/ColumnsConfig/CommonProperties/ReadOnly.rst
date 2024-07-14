..  include:: /Includes.rst.txt
..  _tca_property_readOnly:

========
readOnly
========

..  confval:: readOnly
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: boolean
    :Scope: Display
    :Types:
        :ref:`category <columns-category>`,
        :ref:`check <columns-check>`,
        :ref:`color <columns-color>`,
        :ref:`datetime <columns-datetime>`,
        :ref:`email <columns-email>`,
        :ref:`file <columns-file>`,
        :ref:`folder <columns-folder>`,
        :ref:`group <columns-group>`,
        :ref:`imageManipulation <columns-imageManipulation>`,
        :ref:`inline <columns-inline>`,
        :ref:`input <columns-input>`,
        :ref:`language <columns-language>`,
        :ref:`link <columns-link>`,
        :ref:`number <columns-number>`,
        :ref:`radio <columns-radio>`,
        :ref:`select <columns-select>`,
        :ref:`slug <columns-slug>`,
        :ref:`text <columns-text>`

    Renders the field in a way that the user can see the values but cannot edit them. The rendering is as similar
    as possible to the normal rendering but may differ in layout and size.

    ..  warning::
        This property affects only the display. It is still possible to write to those fields when using
        the :ref:`DataHandler <t3coreapi:tce>`.
