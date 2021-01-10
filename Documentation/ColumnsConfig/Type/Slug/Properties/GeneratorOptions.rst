.. include:: /Includes.rst.txt
.. _columns-slug-properties-generatorOptions:

================
generatorOptions
================

:aspect:`Datatype`
    array

:aspect:`Scope`
    Display

:aspect:`Description`
    Holds information about the record fields to be used for slug generation:

    fields (array)
      Insert several field names (of type string) that will be considered during slug construction.

      Can also be used as nested array to combine multiple fields :php:`[['nav_title', 'title'], 'other_field']`.

      .. admonition:: Info
         :class: attention

         Inserting multiple fields in a simple array would result in an concatenated slug.

         Nested array values would result in "take `nav_title` if not empty, otherwise take value from `title`".

      Examples:

      +-----------------------------------------------------------+--------------------------------------------------------------------------------------------------------------------------------------+--------------------------------------------+
      | Configuration value                                       | Values of an example page record                                                                                                     | Resulting slug                             |
      +===========================================================+======================================================================================================================================+============================================+
      |:php:`['nav_title', 'title']`                              | :php:`['title' => 'Products', 'nav_title' => '', 'subtitle' => '']`                                                                  | `/products`                                |
      +-----------------------------------------------------------+--------------------------------------------------------------------------------------------------------------------------------------+--------------------------------------------+
      |:php:`['nav_title', 'title']`                              | :php:`['title' => 'Products', 'nav_title' => 'Best products', 'subtitle' => '']`                                                     | `/best-products/products`                  |
      +-----------------------------------------------------------+--------------------------------------------------------------------------------------------------------------------------------------+--------------------------------------------+
      |:php:`[['nav_title', 'title']]`                            | :php:`['title' => 'Products', 'nav_title' => 'Best products', 'subtitle' => '']`                                                     | `/best-products`                           |
      +-----------------------------------------------------------+--------------------------------------------------------------------------------------------------------------------------------------+--------------------------------------------+
      |:php:`['subtitle', 'nav_title', 'title']`                  | :php:`['title' => 'Products', 'nav_title' => 'Best products', 'subtitle' => 'Product subtitle']`                                     | `/product-subtitle/best-products/products` |
      +-----------------------------------------------------------+--------------------------------------------------------------------------------------------------------------------------------------+--------------------------------------------+
      |:php:`[['nav_title', 'title'], 'subtitle']`                | :php:`['title' => 'Products', 'nav_title' => 'Best products', 'subtitle' => 'Product subtitle']`                                     | `/best-products/product-subtitle`          |
      +-----------------------------------------------------------+--------------------------------------------------------------------------------------------------------------------------------------+--------------------------------------------+
      |:php:`[['seo_title', 'title'], ['nav_title', 'subtitle']]` | :php:`['title' => 'Products', 'nav_title' => 'Best products', 'subtitle' => 'Product subtitle', 'seo_title' => 'SEO product title']` | `/seo-product-title/best-products`         |
      +-----------------------------------------------------------+--------------------------------------------------------------------------------------------------------------------------------------+--------------------------------------------+

    fieldSeparator (string)
      This value will divide the slug parts. If a section value contains this very value, it will be replaced by
      the value given in :ref:`fallbackCharacter <columns-slug-properties-fallbackCharacter>`.

    prefixParentPageSlug (boolean)
      The slugs of parent pages will be prefixed to the slug for the page itself. Disable it for shorter URLs, but
      take the higher chance of collision into consideration.

    replacements (array)
      It allows to replace strings of a slug part. Add one of more array items with the key being the string
      to replace and the value being the replacement string.

      Example::

         'config' => [
             'type' => 'slug',
             'generatorOptions' => [
                 'fields' => ['title'],
                 'replacements' => [
                     '(f/m)' => '',
                     '/' => '-'
                 ],
             ],
             'fallbackCharacter' => '-',
             'prependSlash' => true,
             'eval' => 'uniqueInPid',
         ],

      This will change the provided slug **'Some Job in city1/city2 (f/m)'** to **'some-job-in-city1-city2'**.

    postModifiers (array)
      The "slug" TCA type includes a possibility to hook into the generation of a slug via custom TCA generation options.
      Hooks can be registered via::

          $GLOBALS['TCA'][$tableName]['columns'][$fieldName]['config']['generatorOptions']['postModifiers'][] = My\Class::class . '->method';

      Consider :php:`$tableName = 'pages'` and :php:`$fieldName = 'slug'`
      inside :file:`EXT:myextension/Configuration/TCA/Overrides/table.php`::

          $GLOBALS['TCA']['pages']['columns']['slug']['config']['generatorOptions']['postModifiers'][] = \My\Class::class . '->modifySlug';

      The method then receives an parameter array with the following values::

          [
              'slug' // ... the slug to be used
              'workspaceId' // ... the workspace ID, "0" if in live workspace
              'configuration' // ... the configuration of the TCA field
              'record' // ... the full record to be used
              'pid' // ... the resolved parent page ID
              'prefix' // ... the prefix that was added
              'tableName' // ... the table of the slug field
              'fieldName' // ... the field name of the slug field
         ];

      All hooks need to return the modified slug value.
