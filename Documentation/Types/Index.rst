..  include:: /Includes.rst.txt
..  _types:
..  _types-introduction:

============
Record types
============

..  seealso::
    `Field types (config > type) <https://docs.typo3.org/permalink/t3tca:columns-types>`_
    are a different concept to record types.

A `types` section is mandatory in all table definitions.

The `types` section is an array of types `$GLOBALS['TCA'][$table]['types']` each
containing a `showitem` key which determines which fields will be displayed in
the backend form for the record. Most TCA tables will only contain one type.

However, it is possible to have many types in the same table with different fields
being displayed depending on the type. Then a new database field needs to be created
to save the type with the data. This field is set in
`$GLOBALS['TCA'][$table]['ctrl']['type'] <https://docs.typo3.org/permalink/t3tca:confval-ctrl-type>`_.

Defining multiple types in one table is similar to
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

A table record supporting only one type defines
which fields should be displayed in the backend form for the default type.

As an example, a comment on a blog post can be stored in a table as follows:

..  literalinclude:: _CodeSnippets/_tx_blogexample_comment.php
    :caption: EXT:blog_example/Configuration/TCA/tx_blogexample_comment.php

The `types` section is mandatory.

..  _types-optional:

Supporting multiple record types in the same table
==================================================

If a table supports multiple record types, the type of the record must be
saved in a dedicated database field, commonly named `record_type` or just `type`.
Usually a select field is used for that purpose.

The name of this field is registered in the `ctrl` section via property
`type <https://docs.typo3.org/permalink/t3tca:confval-ctrl-type>`_.

As an example, a blog post might have several types where the fields
displayed in the backend differ:

..  literalinclude:: _CodeSnippets/_tx_blogexample_post.php
    :caption: EXT:blog_example/Configuration/TCA/tx_blogexample_post.php

For each record type you can define additional
`creationOptions  <https://docs.typo3.org/permalink/t3tca:confval-types-creationoptions>`_
and change field display definitions via
`columnsOverrides  <https://docs.typo3.org/permalink/t3tca:confval-types-columnsoverrides>`_.

It is also possible to define `previewRenderers <https://docs.typo3.org/permalink/t3tca:confval-types-previewrenderer>`_.

You can also define icons for each type using the property
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
    have been removed, it is not considered anymore when rendering
    records in the backend record editing interface.

    Extensions still using this setting should switch to casual
    :php:`$GLOBALS['TCA']['someTable']['ctrl']['type']` fields instead, which
    can be powered by columns based on string values.

..  _types-example:

Extended examples for using the `types` section of TCA
======================================================

..  contents::
    :local:

..  include:: _Examples/_*.rst.txt
    :show-buttons:
