..  include:: /Includes.rst.txt
..  _columns-number-properties-format:

======
format
======

..  confval:: format
    :name: number-format
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: string (keyword)
    :Scope: Display

    Keywords: :php:`integer`, :php:`decimal`

    The format property defines, which type of number should be handled. The
    :php:`integer` format is a simple number, whereas the :php:`decimal` format
    is a float value with two decimal places.
