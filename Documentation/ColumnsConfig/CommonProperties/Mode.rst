..  include:: /Includes.rst.txt
..  _tca_property_mode:

====
mode
====

..  confval:: mode
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: string (keywords)
    :Scope: Display
    :Types: :ref:`input <columns-input>`

    Possible keywords: :code:`useOrOverridePlaceholder`

    This property is related to the `placeholder` property. When defined, a
    checkbox will appear above the field. If that box is checked, the field can
    be used to enter whatever the user wants as usual. If the box is **not**
    checked, the field becomes read-only and the value saved to the database
    will be :code:`NULL`.

    For example, this is used for the :php:`sys_file_metadata` TCA
    configuration used for file references, so that fields like
    :php:`title` will fall back to the default title of a file instead
    of using an empty value defined for the reference.

    ..  warning::
        In order for this property to apply properly, the DB column must be allowed
        to be :sql:`NULL`, and property :php:`nullable` must be set to :php:`true`.

Examples
========

..  _tca_example_input_28:

An input field with placeholder that can be overridden
-------------------------------------------------------

..  include:: /Images/Rst/Input28.rst.txt

..  include:: /CodeSnippets/Input28.rst.txt

..  _tca_example_text_14:

A text field with placeholder that can be overridden
-----------------------------------------------------

..  include:: /Images/Rst/Text14.rst.txt

..  include:: /CodeSnippets/Text14.rst.txt

