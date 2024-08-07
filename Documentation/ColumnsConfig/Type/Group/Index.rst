..  include:: /Includes.rst.txt
..  _columns-group:
..  _columns-group-introduction:

============
Group fields
============

..  versionchanged:: 12.0
    The newly introduced column type :ref:`folder <columns-folder>` replaces
    the old combination of :php:`type => 'group'` together with
    :php:`internal_type => 'folder'`.

..  versionadded:: 13.0
     When using the `group` type, TYPO3 takes care of
     :ref:`generating the according database field <t3coreapi:auto-generated-db-structure>`.
     A developer does not need to define this field in an extension's
     :file:`ext_tables.sql` file.


The group element (:php:`type' => 'group'`) in TYPO3 makes it possible to create references from a record of one table to many records from multiple tables in the system. The foreign tables can be the table itself (thus a self-reference) or any other table.
This is especially useful (compared to the "select" type) when records are scattered over the page tree and require
the Element Browser to select records for adding them to the group field.

For database relations however, the group field is the right and powerful choice, especially if dealing
with lots of re-usable child records, and if :ref:`type='inline' <columns-inline>` is not suitable.

This type is very flexible in its display options with all its different
:ref:`fieldControl <columns-group-properties-fieldControl>` and
:ref:`fieldWizard <tca_property_fieldWizard>` options. A lot of them are available by default, however they must be enabled: :php:`'disabled' => 'false'`

Most common usage is to model database relations (n:1 or n:m).
The property :ref:`allowed <columns-group-properties-allowed>` is required, to
define allowed relation tables.

The group field uses either the CSV format to store uids of related records or an intermediate mm table
(in this case :ref:`MM <columns-group-properties-mm>` property is required).

You can read more on how data is structured in :ref:`columns-group-data` chapter.

..  contents::

..  toctree::
    :titlesonly:

    Examples
    StoredDataValues

..  _columns-group-properties:
..  _columns-group-properties-type:
..  _columns-group-properties-autosizemax:
..  _columns-group-properties-behaviour:
..  _columns-group-properties-default:
..  _columns-group-properties-dontremaptablesoncopy:
..  _columns-group-properties-fieldInformation:
..  _columns-group-properties-localizereferencesatparentlocalization:
..  _columns-group-properties-max-size:
..  _columns-group-properties-maxitems:
..  _columns-group-properties-minitems:
..  _columns-group-properties-multiple:
..  _columns-group-properties-readOnly:
..  _columns-group-properties-internal-type:

Properties of the TCA column type `group`
==========================================

..  confval-menu::
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_Allowed.rst.txt
        :show-buttons:

    ..  include:: _Properties/_AllowLanguageSynchronization.rst.txt
        :show-buttons:

    ..  include:: _Properties/_AutoSizeMax.rst.txt
        :show-buttons:

    ..  include:: _Properties/_DontRemapTablesOnCopy.rst.txt
        :show-buttons:

    ..  include:: _Properties/_ElementBrowserEntryPoints.rst.txt
        :show-buttons:

    ..  include:: _Properties/_FieldControl.rst.txt
        :show-buttons:

    ..  include:: _Properties/_FieldInformation.rst.txt
        :show-buttons:

    ..  include:: _Properties/_FieldWizard.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Filter.rst.txt
        :show-buttons:

    ..  include:: _Properties/_ForeignTable.rst.txt
        :show-buttons:

    ..  include:: _Properties/_HideMoveIcons.rst.txt
        :show-buttons:

    ..  include:: _Properties/_HideSuggest.rst.txt
        :show-buttons:

    ..  include:: _Properties/_LocalizeReferencesAtParentLocalization.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Maxitems.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Minitems.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Mm.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Multiple.rst.txt
        :show-buttons:

    ..  include:: _Properties/_PrependTname.rst.txt
        :show-buttons:

    ..  include:: _Properties/_ReadOnly.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Size.rst.txt
        :show-buttons:

    ..  include:: _Properties/_SuggestOptions.rst.txt
        :show-buttons:

