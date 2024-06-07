..  include:: /Includes.rst.txt
..  _columns-slug-properties-appearance:

==========
appearance
==========

..  confval:: appearance
    :name: slug-appearance
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: array
    :Scope: Display

    Properties that only apply to how the field is displayed in the backend.

..  confval:: prefix

    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['appearance']
    :type: userFunction
    :Scope: Display

    Provides a string that is displayed in front of the input field.
    The URL of the site is set by default if nothing has been defined.

    Assign a user function. It receives two arguments:

    *  The first argument is the parameters array containing the site object,
       the language id, the current table and the current row.
    *  The second argument is the reference object :php:`TcaSlug`.

    The user function should return the string which is then used for display
    purposes.


Example
=======


..  include:: /Images/Rst/Slug1.rst.txt

..  include:: /CodeSnippets/Slug1.rst.txt

The user function can be implemented like this:

..  include:: /CodeSnippets/SlugPrefix.rst.txt
