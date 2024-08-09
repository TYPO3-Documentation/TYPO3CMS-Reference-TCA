..  include:: /Includes.rst.txt
..  _columns-file:

====
File
====

..  versionadded:: 12.0
    The type `file` supersedes the usage of TCA type :php:`inline`
    with :php:`foreign_table` set to :php:`sys_file_reference`.

..  versionadded:: 13.0
    When using the `file` type, TYPO3 takes care of
    :ref:`generating the according database field <t3coreapi:auto-generated-db-structure>`.
    A developer does not need to define this field in an extension's
    :file:`ext_tables.sql` file.

The TCA type :php:`file` creates a field where files can be attached to
the record.

..  seealso::
    :ref:`t3coreapi:fal-using-fal-examples-file-folder-get-references`

..  contents:: Table of contents

..  _columns-file-examples:
..  _tca_example_group_file_1:

Examples
========

..  literalinclude:: _Snippets/_file-field.php
    :caption: EXT:my_extension/Configuration/TCA/some_table.php

..  _columns-file-properties:

Properties of the TCA column type `file`
========================================

..  confval-menu::
    :name: file
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_*.rst.txt
        :show-buttons:

..  _columns-file-migration:

Migration
=========

..  literalinclude:: _Snippets/_migration.diff

Another example without usage of the API method would therefore look like this:

..  literalinclude:: _Snippets/_migration2.diff
