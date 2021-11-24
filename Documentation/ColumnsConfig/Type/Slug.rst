.. include:: ../../Includes.txt

.. _columns-slug:

==============
type = 'slug'
==============

.. contents:: Table of contents:
   :local:
   :depth: 1

.. _columns-slug-introduction:

Introduction
============

The main purpose of this type is to define parts of a URL path to generate and resolve URLs.

With a URL like :samp:`https://www.typo3.org/ch/community/values/core-values/` a URL slug is typically a part like
`/community` or `/community/values/core-values`.

Within TYPO3, a slug is always part of the URL "path" - it does not contain scheme, host, HTTP verb, etc.

A slug is usually added to a TCA-based database table, containing some rules for evaluation and definition.
A slug is a segment of a URL, but it is not limited to be separated by slashes. Therefore, a slug can contain slashes.

If a TCA table contains a field called "slug", it needs to be filled for every existing record. It can
be shown and edited via regular Backend Forms, and is also evaluated during persistence via DataHandler.

The default behaviour of a slug is as follows:

* A slug only contains characters which are allowed within URLs. Spaces, commas and other special characters are
  converted to a fallback character.
* A slug is always lower-cased.
* A slug is unicode-aware.

It is possible to build a default value from the rootline (very helpful for pages, or categorized slugs),
but also to just generate a "speaking" segment from e.g. a news title.

Sanitation and Validation configuration options apply when persisting a record via DataHandler.

In the backend forms a validation happens by an AJAX call, which immediately checks any input and receives
a new proposal in case the slug is already used.


.. _columns-slug-examples:

Examples
========

.. code-block:: php

    'slug' => [
        'label' => '<path-to-locallang-file>.slug',
        'exclude' => 1,
        'config' => [
            'type' => 'slug',
            'generatorOptions' => [
                'fields' => ['title', 'nav_title'],
                'fieldSeparator' => '/',
                'prefixParentPageSlug' => true,
                'replacements' => [
                    '/' => '',
                ],
            ],
            'fallbackCharacter' => '-',
            'eval' => 'uniqueInSite',
        ],
    ],


.. _columns-slug-properties:
.. _columns-slug-properties-type:

Properties
==========

.. contents::
   :local:
   :depth: 1


.. _columns-slug-properties-eval:

eval
----

.. include:: ../Properties/SlugEval.rst.txt

.. _columns-slug-properties-fallbackCharacter:

fallbackCharacter
-----------------

.. include:: ../Properties/SlugFallbackCharacter.rst.txt

.. _columns-slug-properties-generatorOptions:

generatorOptions
----------------

.. include:: ../Properties/SlugGeneratorOptions.rst.txt

.. _columns-slug-properties-prependSlash:

prependSlash
------------

.. include:: ../Properties/SlugPrependSlash.rst.txt
