..  include:: /Includes.rst.txt

..  _columns-slug:

=================
Slugs / URL parts
=================

The main purpose of this type is to define parts of a URL path to generate and
resolve URLs. The :ref:`according database field <t3coreapi:auto-generated-db-structure>`
is generated automatically.

..  contents:: Table of contents:
    :local:
    :depth: 1

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
    :name: slug
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_*.rst.txt
        :show-buttons:
