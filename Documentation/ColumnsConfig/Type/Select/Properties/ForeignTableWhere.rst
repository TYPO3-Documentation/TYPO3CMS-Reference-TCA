..  include:: /Includes.rst.txt
..  _columns-select-properties-foreign-table-where:

=====================
foreign_table_where
=====================

..  confval:: foreign_table_where
    :name: select-foreign-table-where
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: string (SQL WHERE)
    :Scope: Proc. / Display
    :RenderType: all

    The items from :ref:`foreign_table <columns-select-properties-foreign-table>`
    are selected with this :sql:`WHERE` clause. The :sql:`WHERE` clause is effectively
    appended to the existing :sql:`WHERE` clause (which contains default constraints,
    such as :sql:`NOT deleted`) and must begin with :sql:`AND`.

Field quoting
=============

The example below uses the special field quoting syntax :php:`{#...}`
around identifiers of the
QueryHelper
to be as DBAL compatible as possible. Note that :php:`ORDER BY` and :php:`GROUP BY`
should NOT be quoted, since they always receive proper quoting automatically
through the API.

Markers inside the WHERE statement

It is possible to use markers in the WHERE clause:

###REC\_FIELD\_[*field name*]###
    Any field of the current record.

    ..  note::
        The field name part of the marker is not in upper case letters.
        It must match the exact case used in the database.

        So for example :sql:`sys_language_uid` must be referenced using
        `###REC_FIELD_sys_language_uid###`

###THIS\_UID###
    Current element uid (zero if new).

###CURRENT\_PID###
    The current page id (pid of the record).

###SITEROOT###

:ref:`###PAGE\_TSCONFIG\_ID### <t3tsconfig:tceform-page_tsconfig_id>`
    A value you can set from Page TSconfig dynamically.

:ref:`###PAGE\_TSCONFIG\_IDLIST### <t3tsconfig:tceform-page_tsconfig_idlist>`
    A value you can set from Page TSconfig dynamically.

:ref:`###PAGE\_TSCONFIG\_STR### <t3tsconfig:tceform-page_tsconfig_str>`
    A value you can set from Page TSconfig dynamically.

###SITE:<KEY>.<SUBKEY>###
    A value from the site configuration, for example: `###SITE:mySetting.categoryPid###` or `###SITE:rootPageId###`.

The markers are preprocessed so that the value of CURRENT\_PID and PAGE\_TSCONFIG\_ID are always integers
(default is zero), PAGE\_TSCONFIG\_IDLIST will always be a comma-separated list of integers (default is zero)
and PAGE\_TSCONFIG\_STR will be quoted before substitution (default is blank string).

More information about markers set by Page TSconfig can be found in
the :ref:`TSconfig reference <t3tsconfig:pagetceformconfobj>`.


Examples
========

Select single field with foreign_prefix and foreign_where
---------------------------------------------------------

..  include:: /Images/Rst/SelectSingle3.rst.txt

..  include:: /CodeSnippets/SelectSingle3.rst.txt


..  _tca_example_select_tree_6:

Tree field with foreign_table_where
===================================

..  include:: /Images/Rst/SelectTree6.rst.txt

..  include:: /CodeSnippets/SelectTree6.rst.txt
