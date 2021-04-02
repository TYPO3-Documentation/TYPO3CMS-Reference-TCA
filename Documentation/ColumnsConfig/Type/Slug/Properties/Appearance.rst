.. include:: /Includes.rst.txt
.. _columns-slug-properties-appearance:

==========
appearance
==========

.. confval:: appearance

   :type: array
   :Scope: Display

   Properties that only apply to how the field is displayed in the backend.

.. confval:: appearance:prefix

   :type: userFunction
   :Scope: Display

   Provides a string that is displayed in front of the input field.

   Assign a user function. It receives two arguments:

   * The first argument is the parameters array containing the site object,
     the language id, the current table and the current row.
   * The second argument is the reference object :php:`TcaSlug`.

   The user function should return the string which is then used for display
   purposes.


Example
=======


.. include:: /Includes/Images/Styleguide/RstIncludes/Slug1.rst.txt

.. include:: /Includes/Snippets/Styleguide/RstIncludes/Slug1.rst.txt

The user function can be implemented like this:

.. include:: /Includes/Snippets/Styleguide/RstIncludes/Manual/SlugPrefix.rst.txt
