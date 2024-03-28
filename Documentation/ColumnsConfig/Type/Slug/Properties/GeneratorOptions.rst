..  include:: /Includes.rst.txt
..  _columns-slug-properties-generatorOptions:

================
generatorOptions
================

..  confval:: generatorOptions
    :name: slug-generatorOptions
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: array
    :Scope: Proc. / Display

    Holds information about the record fields to be used for slug generation:

..  confval:: generatorOptions:fields

    :type: array
    :Scope: Proc. / Display

    Insert several field names (of type string) that will be considered during slug construction.

    Can also be used as nested array to combine multiple fields :php:`[['nav_title', 'title'], 'other_field']`.

    ..  admonition:: Info
        :class: attention

        Inserting multiple fields in a simple array would result in an
        concatenated slug.

        Nested array values would result in "take `nav_title` if not empty,
        otherwise take value from `title`".

    Examples:

    +-----------------------------------------------------------------+--------------------------------------------------------------------------------------------------------------------------------------+-----------------------------------+
    | Configuration value                                             | Values of an example page record                                                                                                     | Resulting slug                    |
    +=================================================================+======================================================================================================================================+===================================+
    |:php:`[['nav_title', 'title']]`                                  | :php:`['title' => 'Products', 'nav_title' => '']`                                                                                    | `/products`                       |
    +-----------------------------------------------------------------+--------------------------------------------------------------------------------------------------------------------------------------+-----------------------------------+
    |:php:`[['title', 'subtitle']]`                                   | :php:`['title' => 'Products', 'subtitle' => 'Product subtitle']`                                                                     | `/products`                       |
    +-----------------------------------------------------------------+--------------------------------------------------------------------------------------------------------------------------------------+-----------------------------------+
    |:php:`['title', 'subtitle']` or :php:`[['title'], ['subtitle']]` | :php:`['title' => 'Products', 'subtitle' => 'Product subtitle']`                                                                     | `/products/product-subtitle`      |
    +-----------------------------------------------------------------+--------------------------------------------------------------------------------------------------------------------------------------+-----------------------------------+
    |:php:`['nav_title', 'title'], 'subtitle'`                        | :php:`['title' => 'Products', 'nav_title' => 'Best products', 'subtitle' => 'Product subtitle']`                                     | `/best-products/product-subtitle` |
    +-----------------------------------------------------------------+--------------------------------------------------------------------------------------------------------------------------------------+-----------------------------------+
    |:php:`['seo_title', 'title'], ['nav_title', 'subtitle']`         | :php:`['title' => 'Products', 'nav_title' => 'Best products', 'subtitle' => 'Product subtitle', 'seo_title' => 'SEO product title']` | `/seo-product-title/best-products`|
    +-----------------------------------------------------------------+--------------------------------------------------------------------------------------------------------------------------------------+-----------------------------------+


..  confval:: generatorOptions:fieldSeparator

    :name: slug-generatorOptions-fieldSeparator
    :type: string
    :Scope: Proc. / Display
    :Default: "/"

    This value will divide the slug parts. If a section value contains this
    very value, it will be replaced by the value given in :ref:`fallbackCharacter
    <columns-slug-properties-fallbackCharacter>`.

..  confval:: generatorOptions:prefixParentPageSlug

    :type: boolean
    :Default: true
    :Scope: Proc. / Display

    The slugs of parent pages will be prefixed to the slug for the page itself.
    Disable it for shorter URLs, but take the higher chance of collision into
    consideration.

    ..  note::

        This option is exclusively for page records. It won't have an effect on any other records.

..  confval:: generatorOptions:replacements

    :type: array
    :Scope: Proc. / Display

    It allows to replace strings of a slug part. Add one of more array items
    with the key being the string to replace and the value being the replacement
    string.

..  confval:: generatorOptions:postModifiers

    :type: array
    :Scope: Proc. / Display

    The "slug" TCA type includes a possibility to hook into the generation of a
    slug via custom TCA generation options.

    Hooks can be registered via:

    ..  code-block:: php
        :caption: EXT:myextension/Configuration/TCA/Overrides/table.php

        $GLOBALS['TCA'][$tableName]['columns'][$fieldName]['config']['generatorOptions']['postModifiers'][]
            = MyClass::class . '->method';

    Consider :php:`$tableName = 'pages'` and :php:`$fieldName = 'slug'`
    inside :file:`EXT:my_extension/Configuration/TCA/Overrides/table.php`:

    ..  code-block:: php
        :caption: EXT:myextension/Configuration/TCA/Overrides/table.php

        $GLOBALS['TCA']['pages']['columns']['slug']['config']['generatorOptions']['postModifiers'][] =
            MyClass::class . '->modifySlug';

    The method then receives an parameter array with the following values

    .. todo: the syntax is strange here?

    ..  code-block:: plaintext

        [
            'slug', // ...  the slug to be used
            'workspaceId', // ...  the workspace ID, "0" if in live workspace
            'configuration', // ...  the configuration of the TCA field
            'record', // ...  the full record to be used
            'pid', // ...  the resolved parent page ID
            'prefix', // ...  the prefix that was added
            'tableName', // ...  the table of the slug field
            'fieldName', // ...  the field name of the slug field
      ];

    All hooks need to return the modified slug value.


Examples
========

..  _tca_example_slug_4:

Generate a concatenated slug
----------------------------

..  include:: /Images/Rst/Slug4.rst.txt

..  include:: /CodeSnippets/Slug4.rst.txt

..  _tca_example_slug_5:

Generate a slug from one field with a backup field if first is empty
--------------------------------------------------------------------

..  include:: /Images/Rst/Slug5.rst.txt

..  include:: /CodeSnippets/Slug5.rst.txt

..  _tca_example_slug_6:

Example: remove all strings "(f/m)" from Jobtitles
--------------------------------------------------

This will change the provided slug **'Some Job in city1/city2 (f/m)'**
to **'some-job-in-city1-city2'**.

..  include:: /Images/Rst/Slug3.rst.txt

..  include:: /CodeSnippets/Slug3.rst.txt


