..  include:: /Includes.rst.txt
..  _types:
..  _types-introduction:

============
Record types
============

..  seealso::
    The `Field types (config > type) <https://docs.typo3.org/permalink/t3tca:columns-types>`_
    are a concept different from the record types.

The `types` section is mandatory for all table definitions.

Basic tables with only one type use this section to define which fields should
be displayed in the backend form in the property `showitem`.

If the table should provide multiple record types, the field containing the type
must be defined in
`$GLOBALS['TCA'][$table]['ctrl']['type'] <https://docs.typo3.org/permalink/t3tca:confval-ctrl-type>`_
and all supported types must be array entries in `$GLOBALS['TCA'][$table]['types']`.

Each entry in the `types` array is an array with at least the property `showitem`
defined.

Defining multiple types in one table is similar to what is often done with
`Single Table Inheritance <https://en.wikipedia.org/wiki/Single_Table_Inheritance>`_
in Object-orientated programming.

..  contents:: Table of Contents
    :depth: 1

..  toctree::
    :caption: Subpages
    :glob:
    :titlesonly:

    *

..  versionchanged:: 13.3
    Creating content elements has been simplified by removing the need to
    define the system fields for each element again and again. This shrinks
    down a content element's :confval:`types-showitem` to just the element
    specific fields. See also :ref:`types-content`.

..  _types-required:
..  _types-examples-required-minimal:

A basic table without distinct types
====================================

When the table record does not support multiple types it still needs to define
one type in order to define which fields should be displayed in the backend
form for the default type.

For example the comment of a blog post can be stored in a table that supports
no additional types:

..  literalinclude:: _CodeSnippets/_tx_blogexample_comment.php
    :caption: EXT:blog_example/Configuration/TCA/tx_blogexample_comment.php

Omitting the `types` section is not supported by TYPO3.

..  _types-optional:

Supporting multiple record types in the same table
==================================================

When a table supports multiple record types, the type of a record must be
saved in a dedicated column, commonly named `record_type` or just `type`.
Commonly a select field is used for that purpose.

The name of this table is registered in the `ctrl` section via property
`type <https://docs.typo3.org/permalink/t3tca:confval-ctrl-type>`_.

For example a blog post might have one of several types where the fields
displayed in the backend differ

..  literalinclude:: _CodeSnippets/_tx_blogexample_post.php
    :caption: EXT:blog_example/Configuration/TCA/tx_blogexample_post.php

For each record type you can define additional
`creationOptions  <https://docs.typo3.org/permalink/t3tca:confval-types-creationoptions>`_
and change field display definitions via
`columnsOverrides  <https://docs.typo3.org/permalink/t3tca:confval-types-columnsoverrides>`_.

It is also possible to define distinct `previewRenderers <https://docs.typo3.org/permalink/t3tca:confval-types-previewrenderer>`_.

You can also define individual icons per type, using property
`ctrl -> typeicon_classes <https://docs.typo3.org/permalink/t3tca:confval-ctrl-typeicon-classes>`_.

..  _types-properties:

Properties of `types` section of TCA
====================================

..  confval-menu::
    :name: types
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_*.rst.txt
        :show-buttons:

..  versionchanged:: 13.0
    The properties `bitmask_excludelist_bits` and `bitmask_excludelist_bits`
    been removed, it is not considered anymore when rendering
    records in the backend record editing interface.

    In case, extensions still use this setting, they should switch to casual
    :php:`$GLOBALS['TCA']['someTable']['ctrl']['type']` fields instead, which
    can be powered by columns based on string values.

..  _types-example:

Extended examples for using the `types` section of TCA
======================================================

..  contents::
    :local:

..  include:: _Examples/_*.rst.txt
    :show-buttons:
