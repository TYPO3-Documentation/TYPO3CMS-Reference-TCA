..  include:: /Includes.rst.txt

..  _columns-slug:

=================
Slugs / URL parts
=================

..  versionadded:: 12.0
    When using the `slug` type, TYPO3 takes care of
    :ref:`generating the according database field <t3coreapi:auto-generated-db-structure>`.
    A developer does not need to define this field in an extension's
    :file:`ext_tables.sql` file.

The main purpose of this type is to define parts of a URL path to generate and
resolve URLs.

..  contents:: table of contents

..  toctree::
    :titlesonly:

    Introduction

..  _tca_example_slug_2:
..  _tca_example_pages_slug:

Example: A basic slug field
===========================

This example limits the length of the slug to 50 characters. It takes only the
field :php:`input_1` into account for generating the slug.

..  include:: /Images/Rst/Slug2.rst.txt

..  include:: /CodeSnippets/Slug2.rst.txt

..  _tca_example_slug_1:

Example: A slug field with prefix hook
======================================

This example uses a custom slug prefix hook via
:php:`config['appearance']['prefix']` to adapt the displayed prefix. It takes
the two fields :php:`input_1` and :php:`input_2` into account for generating
the slug.

..  include:: /Images/Rst/Slug1.rst.txt

..  include:: /CodeSnippets/Slug1.rst.txt

..  _columns-slug-properties:
..  _columns-slug-properties-type:

Properties of the TCA column type `slug`
========================================

..  confval-menu::
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_Appearance.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Eval.rst.txt
        :show-buttons:

    ..  include:: _Properties/_FallbackCharacter.rst.txt
        :show-buttons:

    ..  include:: _Properties/_GeneratorOptions.rst.txt
        :show-buttons:

    ..  include:: _Properties/_PrependSlash.rst.txt
        :show-buttons:
