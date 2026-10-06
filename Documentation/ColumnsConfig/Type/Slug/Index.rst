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

..  _columns-slug-introduction:

Introduction
============

The main purpose of this type is to define parts of a URL path to generate and resolve URLs.

With a URL like :samp:`https://www.typo3.org/ch/community/values/core-values/` a URL slug is typically a part like
`/community` or `/community/values/core-values`.

Within TYPO3, a slug is always part of the URL "path" - it does not contain scheme, host, HTTP verb, etc.

A slug is usually added to a TCA-based database table, for example pages.  The TCA then contains rules for
evaluation and definition.

When applied to pages a hierarchy of pages is often represented by a combined slug: From each page the
characteristic last part of its slug is used as path segment. The segments are combined into one slug,
separated by slashes. The resulting URL's path is therefore similar to the file paths in common operating
systems.

However, slugs in TYPO3 are not limited to be separated by slashes. It is possible to use other separators.
Furthermore, a single path segment may contain any sign allowed in URLs, including slashes.

It is not required to build hierarchical paths. It is possible to assign a single, unique path segment to
each page in a deep page hierarchy. In TYPO3 the only requirement is that the slug for each
page in a domain must be unique.

If a TCA table contains a field called "slug", it needs to be filled for every existing record. It can
be shown and edited via regular backend forms, and is also evaluated during persistence via DataHandler.

The default behaviour of a slug is as follows:

*   A slug only contains characters which are allowed within URLs. Spaces, commas and other special characters are
    converted to a fallback character.
*   A slug is always lower-cased.
*   A slug is unicode-aware.

It is possible to build a default value from the rootline (very helpful for pages, or categorized slugs),
but also to just generate a "speaking" segment from e.g. a news title.

Sanitation and Validation configuration options apply when persisting a record via DataHandler.

In the backend forms a validation happens by an AJAX call, which immediately checks any input and receives
a new proposal in case the slug is already used.

..  _tca-example-slug-2:
..  _tca-example-pages-slug:

Example: A basic slug field
===========================

The slug of a talk is generated from its type and its title:

..  figure:: /Images/Conference/SlugTalk.png
    :alt: The slug of a workshop
    :class: with-shadow

    The slug of a workshop

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/205-tx_myextension_talk-slug.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/205-tx_myextension_talk-slug.php
    :emphasize-lines: 12-16

..  _tca-example-slug-1:

Example: A slug field with prefix hook
======================================

This example uses a custom slug prefix hook via
:php:`config['appearance']['prefix']` to show the path of the program in
front of the slug of a talk:

..  figure:: /Images/Conference/SlugTalk.png
    :alt: The slug of a workshop with the path of the program in front
    :class: with-shadow

    The slug of a workshop with the path of the program in front

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/205-tx_myextension_talk-slug.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/205-tx_myextension_talk-slug.php
    :emphasize-lines: 17-19

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
