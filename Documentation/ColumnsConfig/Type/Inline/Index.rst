..  include:: /Includes.rst.txt
..  _columns-inline:
..  _columns-inline-introduction:

=============
IRRE / inline
=============

..  versionchanged:: 12.0
    Inline fields should not be used anymore to handle files.  Use the TCA
    column type :ref:`file <columns-file>` instead.

..  versionadded:: 13.0
    When using the `inline` type, TYPO3
    :ref:`generates the correct database fields <t3coreapi:auto-generated-db-structure>`.
    Developers do not need to define this field in an extension's
    :file:`ext_tables.sql` file.

Inline Relational Record Editing (IRRE) is a way of editing parent-child-relations in the backend view.
Instead of child records already having to exist, new child records are created
using AJAX calls (to prevent reloading the complete backend view).

The type='inline' is a powerful element that can handle many types of relation,
including simple :code:`1:n` and nested :code:`1:n-1:n` relations, aswell as :code:`m:n`
relations with different view aspects and localization setups. When combined with
'ctrl' and 'types' properties in the TCA a huge amount of different views are possible.

The inline type was mainly designed to handle :code:`1:n` relations,
where one parent record has many children and each child has only one
parent. Children can not be transferred from one parent to another.

However, :code:`m:n` relations can be setup using intermediate tables. An :code:`m:n`
relation is where a child has many parents. In addition to the main parent-child
relation fields in the intermediate table, fields can be added to attach
additional information to the parent-child relation. One example of this is
"FAL" / resource handling in the Core. A parent record
(for instance table "tt_content") is connected via table "sys_file_reference" to
a media resource in "sys_file". A sys_file record has table "sys_file_metadata"
as a child record which holds meta information about the file (for instance a
description). This information can be overwritten for the specific file resource used in
"tt_content" by adding a new description in "sys_file_reference". There are inline
and field properties in the TCA such as "placeholder" to set this up.

..  hint::

    The inline type does not have :code:`fieldInformation`,
    :code:`fieldControl` or :code:`fieldWizard` properties like other types. This is
    due to the fact that it is a container and not an element. You can
    still add fieldInformation or fieldWizard, but they must be configured
    in the :code:`ctrl`. Please see the
    :ref:`example <inline-example-field-information>`.

..  contents::

..  toctree::
    :titlesonly:

    Examples

..  _columns-inline-properties:
..  _columns-inline-properties-type:
..  _columns-inline-properties-behaviour:
..  _columns-inline-properties-maxitems:
..  _columns-inline-properties-minitems:
..  _columns-inline-properties-mm-match-fields:

Properties of the TCA column type `inline`
==========================================


..  confval-menu::
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_Appearance.rst.txt
        :show-buttons:

    ..  include:: _Properties/_AutoSizeMax.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Behaviour.rst.txt
        :show-buttons:

    ..  include:: _Properties/_CustomControls.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Filter.rst.txt
        :show-buttons:

    ..  include:: _Properties/_ForeignDefaultSortby.rst.txt
        :show-buttons:

    ..  include:: _Properties/_ForeignField.rst.txt
        :show-buttons:

    ..  include:: _Properties/_ForeignLabel.rst.txt
        :show-buttons:

    ..  include:: _Properties/_ForeignMatchFields.rst.txt
        :show-buttons:

    ..  include:: _Properties/_ForeignSelector.rst.txt
        :show-buttons:

    ..  include:: _Properties/_ForeignSortby.rst.txt
        :show-buttons:

    ..  include:: _Properties/_ForeignTable.rst.txt
        :show-buttons:

    ..  include:: _Properties/_ForeignTableField.rst.txt
        :show-buttons:

    ..  include:: _Properties/_ForeignUnique.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Maxitems.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Minitems.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Mm.rst.txt
        :show-buttons:

    ..  include:: _Properties/_OverrideChildTCa.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Size.rst.txt
        :show-buttons:

    ..  include:: _Properties/_SymmetricField.rst.txt
        :show-buttons:

    ..  include:: _Properties/_SymmetricLabel.rst.txt
        :show-buttons:

    ..  include:: _Properties/_SymmetricSortby.rst.txt
        :show-buttons:
