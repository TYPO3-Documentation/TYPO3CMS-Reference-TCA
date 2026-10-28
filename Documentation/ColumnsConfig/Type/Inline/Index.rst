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
It can handle `1:n`,
nested `1:n-1:n` and  `m:n` relations and the
different views and localizations. When used with
'ctrl' and 'types' properties, many different backend views are possible.

The inline type is mainly used to handle `1:n` relations (1 to many),
where one parent record has many children and each child has only one
parent. A child record cannot be moved between parents.

However, the inline type can also be used for `m:n` relations (many to many).
An `m:n` relation is where a child has many parents. The relation is set up
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

    The inline type does not have `fieldInformation`,
    `fieldControl` or `fieldWizard` properties like other types
    because it is a container rather than an element. You can
    still add fieldInformation or fieldWizard, but they must be configured
    in the `ctrl`. See
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

..  _columns-inline-language-and-ownership:

Inline relations, language and ownership
========================================

An inline field manages its child records through the
`DataHandler <https://docs.typo3.org/permalink/t3coreapi:datahandler-basics>`_.
It is more than a view of related records: saving the parent can update the
children, even if their own fields were not edited.

..  versionchanged:: 14.3.10
    :changelog: important-103970-1792102654

    DataHandler aligns the language of inline children with their parent.

For language-aware parent and child tables, DataHandler aligns the language
of children in relations without `MM` when the parent is created, its
language changes, or new inline children are submitted. Adding one child
also aligns its existing siblings. Nested children follow their aligned
parent. Alignment to the default language (`0`) or "All languages" (`-1`)
also resets a child's translation parent and translation source.

Relations stored in an `MM` table are excluded from this alignment. They can
be shared by parents in different languages and can be edited from both
sides using
`MM_opposite_field <https://docs.typo3.org/permalink/t3tca:confval-inline-mm-opposite-field>`_.

..  warning::
    Check secondary inline relations that use `foreign_field` on a
    translatable child table. If the child column named by `foreign_field`
    has
    `l10n_mode = exclude <https://docs.typo3.org/permalink/t3tca:confval-columns-l10n-mode>`_,
    translations retain the reference to the default-language parent.
    Its inline list can therefore contain children in different languages.

    Creating that parent or adding a child to its list can align the
    translations to the default language and clear their translation
    pointers. This case is tracked in `TYPO3 issue 111248
    <https://forge.typo3.org/issues/111248>`_.

For a read-only reverse view of a relation managed elsewhere, use a virtual
`none field <https://docs.typo3.org/permalink/t3tca:columns-none>`_ with a
custom
`renderType <https://docs.typo3.org/permalink/t3coreapi:formengine-rendering-nodeexpansion>`_
to query and display the related records. DataHandler discards submitted
values of type `none`. Hiding inline editing controls or using `readOnly`
only changes the form display; it does not remove the relation from
DataHandler's processing.

Do not add a fixed `sys_language_uid = 0` constraint to all inline
definitions as a translation safeguard.
`foreign_match_fields <https://docs.typo3.org/permalink/t3tca:confval-inline-foreign-match-fields>`_
affects writes as well as reads. A fixed match is only suitable for a list
deliberately restricted to the default language; it must not be used for
the relation through which a parent localizes its children.

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

The conferences are workspace-aware:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/tx_myextension_conference.php
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_conference.php
    :visible-lines: 4-29
    :emphasize-lines: 23

If the parent table is workspace-aware, `versioningWS  <https://docs.typo3.org/permalink/t3tca:confval-ctrl-versioningws>`_
set to `true`, the child table must also be made workspace-aware. The hotels
are inline children of the conferences:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/tx_myextension_hotel.php
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_hotel.php
    :visible-lines: 4-16
    :emphasize-lines: 14

The same applies if an inline field is used inside a
`FlexForm field <https://docs.typo3.org/permalink/t3tca:columns-flex>`_.

..  _columns-inline-page-type-restrictions:

Inline fields in content `tt_content` or on regular pages
=========================================================

If a parent table can be created on regular pages, most commonly when the inline field is
created in table `tt_content`, the child table must also be allowed on regular pages.

Otherwise you will see the following error on saving:

..  warning::
    Attempt to insert record on pages:42 where table "tx_myextension_registration" is not allowed.

To allow the child table on regular pages, set
`$GLOBALS['TCA'][$table]['ctrl']['security']['ignorePageTypeRestriction'] <https://docs.typo3.org/permalink/t3tca:confval-ctrl-security>`_
to true:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/tx_myextension_conference.php
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_conference.php
    :visible-lines: 4-29
    :emphasize-lines: 26-28

..  _columns-inline-rootlevel-restrictions:

Inline fields on root level tables
==================================

If a parent table can be or is always created on root level, the child table has
to also be allowed on root level.

An example of this is if you add an inline field to system tables like `sys_file_metadata` or `be_users`.

Set `$GLOBALS['TCA'][$table]['ctrl']['rootLevel'] <https://docs.typo3.org/permalink/t3tca:confval-ctrl-rootlevel>`_
to `-1` to allow on both root level and regular pages or set to `1` to allow only on root level.

If regular non-admin backend users need to be able to edit the table, add
`$GLOBALS['TCA'][$table]['ctrl']['security']['ignoreRootLevelRestriction'] <https://docs.typo3.org/permalink/t3tca:confval-ctrl-security>`_

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/tx_myextension_location.php
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_location.php
    :visible-lines: 4-19
    :emphasize-lines: 11-14
