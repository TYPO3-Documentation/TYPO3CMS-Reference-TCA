..  include:: /Includes.rst.txt
..  _columns-file:

====
File
====

..  versionadded:: 13.0
    When using the `file` type, TYPO3 takes care of
    :ref:`generating the according database field <t3coreapi:auto-generated-db-structure>`.
    A developer does not need to define this field in an extension's
    :file:`ext_tables.sql` file.

The TCA type :php:`file` creates a field where files can be attached to
the record. The :ref:`according database field <t3coreapi:auto-generated-db-structure>`
is generated automatically.


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
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_Allowed.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Appearance.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Behaviour.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Disallowed.rst.txt
        :show-buttons:

    ..  include:: _Properties/_FieldInformation.rst.txt
        :show-buttons:

    ..  include:: _Properties/_FieldWizard.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Maxitems.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Minitems.rst.txt
        :show-buttons:

    ..  include:: _Properties/_OverrideChildTCa.rst.txt
        :show-buttons:

    ..  include:: _Properties/_ReadOnly.rst.txt
        :show-buttons:
