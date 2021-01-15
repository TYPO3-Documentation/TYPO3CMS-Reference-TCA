.. include:: /Includes.rst.txt
.. _columns-slug-properties-appearance:

==========
appearance
==========

.. confval:: appearance

   :type: array
   :Scope: Display

   Provides a custom base url that is displayed in front of the input field.

   prefix
      Assign a user function. It receives two arguments:

      * The first argument is the parameters array containing the site object,
        the language id, the current table and the current row.
      * The second argument is the reference object :php:`TcaSlug`.

      The user function should return the string which is then used as the base
      url.


Example
=======

::

   <?php
   declare(strict_types = 1);

   namespace Vendor\Extension\UserFunctions\FormEngine

   use TYPO3\CMS\Backend\Form\FormDataProvider\TcaSlug;

   class SlugPrefix
   {
       public function getPrefix(array $parameters, TcaSlug $reference): string
       {
           return 'custom base url';
       }
   }
