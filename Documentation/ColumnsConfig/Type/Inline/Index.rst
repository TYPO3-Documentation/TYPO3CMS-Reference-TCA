..  include:: /Includes.rst.txt
..  _columns-inline:
..  _columns-inline-introduction:

=============
IRRE / inline
=============

..  versionadded:: 13.0
    TYPO3 :ref:`generates the correct database fields <t3coreapi:auto-generated-db-structure>`
    for the `inline` type. Developers do not need to define this field in an extension
    :file:`ext_tables.sql` file.

Inline Relational Record Editing (IRRE) is a convenient way of editing
parent-child relations in the backend.
New child records can be created directly in the backend view
(by AJAX call, so that the backend view is not reloaded).

The :ref:`database field <t3coreapi:auto-generated-db-structure>`
is generated automatically.

..  note::
    Inline fields should not be used to handle files. Use TCA
    column type :ref:`file <columns-file>`.

The 'inline' TCA type is a powerful element that handles links between records.
It can handle :code:`1:n`,
nested :code:`1:n-1:n` and  :code:`m:n` relations and the
different views and localizations. When used with
'ctrl' and 'types' properties, many different backend views are possible.

The inline type is mainly used to handle :code:`1:n` relations (1 to many),
where one parent record has many children and each child has only one
parent. A child record cannot be moved between parents.

However, the inline type can also be used for :code:`m:n` relations (many to many).
An :code:`m:n` relation is where a child has many parents. The relation is set up
using an intermediate table.
The intermediate table contains the parent and child relation fields as well as any extra fields
providing additional information about the relation. One example of this is
"FAL" / resource handling in the Core. A parent record
(in table "tt_content") is linked to
a media resource in "sys_file" via the intermediate table "sys_file_reference".
The sys_file child record has itself table "sys_file_metadata"
as a child record holding meta information about the file (for example, a
description). This information can be overwritten for a file resource used by
"tt_content" by adding a new description in "sys_file_reference". TCA properties
such as "placeholders" can be used to set this up.

..  hint::

    The inline type does not have :code:`fieldInformation`,
    :code:`fieldControl` or :code:`fieldWizard` properties like other types
    because it is a container rather than an element. You can
    still add fieldInformation or fieldWizard, but they must be configured
    in the :code:`ctrl`. See
    :ref:`example <inline-example-field-information>`.

..  contents:: Table of contents:
    :local:
    :depth: 1

..  toctree::
    :titlesonly:

    Examples

..  _columns-inline-properties:
..  _columns-inline-properties-type:

Properties of the TCA column type `inline`
==========================================

..  confval-menu::
    :name: inline
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_*.rst.txt
        :show-buttons:

..  _columns-inline-workspaces:

Inline fields and workspaces
============================

..  deprecated:: 14.0
    Using a workspace-aware parent table with a child table that is not workspace-aware
    is deprecated in TYPO3 v14. The automatic TCA migration functionality scans for this
    and adds :php:`versioningWS = true;` to affected child tables.

TCA tables that are used as `inline` child tables in a standard
`foreign_table  <https://docs.typo3.org/permalink/t3tca:confval-inline-properties-foreign-table>`_
relationship must be declared workspace-aware if the parent table is workspace-aware.
A typical scenario is inline child tables attached to the
`tt_content` table as `tt_content` is workspace-aware by default.

Example of a workspace-aware parent table:

..  literalinclude:: _Snippets/_workspace_parent.php
    :caption: packages/my_extension/Configuration/TCA/tx_myextension_myparent.php

If the parent table is workspace-aware, `versioningWS  <https://docs.typo3.org/permalink/t3tca:confval-ctrl-versioningws>`_
set to `true`, the child table must also be made parent-aware:

..  literalinclude:: _Snippets/_workspace_child.php
    :caption: packages/my_extension/Configuration/TCA/tx_myextension_mychild.php

The same applies if an inline field is used inside a
`FlexForm field <https://docs.typo3.org/permalink/t3tca:columns-flex>`_.
