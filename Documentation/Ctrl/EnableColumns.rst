:navigation-title: Enabling columns

..  include:: /Includes.rst.txt
..  _ctrl-enablecolumns:

=======================================================
How to use `enablecolumns` in the `ctrl` section of TCA
=======================================================

All enable column definitions (hidden, starttime, endtime, fe_groups) are
automatically created if they are registered in the `ctrl` section in the main
TCA (not in the overrides) of a table.

:ref:`palettes <palettes>` as known from Core TCA definitions have to be defined in the
TCA of a custom table however. If the fields should be editable by backend users,
the also have to be added to the :ref:`types <types>` definitions.

..  _ctrl-reference-enablecolumns-examples:

Examples of column enable configurations
========================================

..  _ctrl-reference-enablecolumns-examples-all:

Define all enablecolumn fields
------------------------------

The conference table uses all enable columns:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/tx_myextension_conference.php
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_conference.php
    :visible-lines: 4-29
    :emphasize-lines: 13

The `access` tab of its form shows the fields, `starttime` and `endtime`
in a palette:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/tx_myextension_conference.php
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_conference.php
    :visible-lines: 57-82
    :emphasize-lines: 65,77

..  _ctrl-reference-enablecolumns-examples-hidden:

Make table hideable
-------------------

A talk can only be hidden:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/tx_myextension_talk.php
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_talk.php
    :visible-lines: 4-26
    :emphasize-lines: 21

Each type of talk shows the field in the `access` tab:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/tx_myextension_talk.php
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_talk.php
    :visible-lines: 71-90
    :emphasize-lines: 75,81,87

..  _ctrl-reference-enablecolumns-examples-common:

Common enable fields
--------------------

Most tables use the fields `hidden`, `starttime` and `endtime`. The backend
shows them in the record information:

..  figure:: /Images/Conference/CtrlEnableColumns.png
    :alt: The enable columns of a conference in the Access tab
    :class: with-shadow

    The enable columns of a conference in the Access tab

..  _enablefields-usage:

Enablecolumns / enablefields usage
==================================

Most ways of retrieving records in the frontend automatically respect the
:php:`ctrl->enablecolumns` settings:

..  _enablefields-usage-typoscript:

Enablecolumns in TypoScript
---------------------------

Records retrieved in TypoScript via the objects
:ref:`RECORDS <t3tsref:cobj-records>`, :ref:`CONTENT <t3tsref:cobj-content>`
automatically respect the settings in section
:ref:`ctrl->enablecolumns <ctrl-reference-enablecolumns>`.

..  _enablefields-usage-extbase:

Enablecolumns / enablefields in Extbase
----------------------------------------

In Extbase repositories the records are hidden in the frontend by default,
however this behaviour can be disabled by setting
:php:`$querySettings->setIgnoreEnableFields(true)` in the
:ref:`repository <t3coreapi:extbase-repository>`.

..  _enablefields-usage-queries:

Enablecolumns in queries
-------------------------

Using the QueryBuilder
:ref:`enable columns restrictions are automatically applied <t3coreapi:database-select>`.

The same is true when
:ref:`select() is called on the connection <t3coreapi:database-connection-select>`.

See the :ref:`restriction builder <t3coreapi:database-restriction-builder>` for details.
