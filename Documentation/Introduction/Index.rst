.. include:: ../Includes.txt


.. _introduction:

============
Introduction
============


.. _introduction-about:

About this document
-------------------

This document describes the global array called :php:`$GLOBALS['TCA']`. This
array is a layer on top of the database tables that TYPO3 can operate on. It is a
very central element of the TYPO3 architecture.

Almost all code examples used in this manual come either from the TYPO3
source code itself, from the extension  `example <https://github.com/TYPO3-Documentation/TYPO3CMS-Code-Examples>`__,
or from extension `styleguide <https://github.com/TYPO3/styleguide>`__. Extension `styleguide` comes with
a huge list of TCA examples and field combinations. Installing it locally in some test environment is a good
idea since the extension is great as a "show-off" on what can be done with TCA. Even experienced developers
will find things they did not know before.


.. _tca-what-is:

What is $GLOBALS['TCA']?
------------------------

The Table Configuration Array (or `$GLOBALS['TCA']`, `TCA`) is a global array in TYPO3
which extends the definition of database tables beyond what can be done strictly with SQL.
First and foremost :php:`$GLOBALS['TCA']` defines which tables are editable in the TYPO3 backend.
Database tables with no corresponding entry in :php:`$GLOBALS['TCA']` are "invisible" to the TYPO3 backend.
The :php:`$GLOBALS['TCA']` definition of a table also covers the following:

- Relations between that table and other tables

- What fields should be displayed in the backend and with which layout

- How should a field be validated (e.g. required, integer, etc.)

- How a field is used in the frontend by Extbase and any extension that may refer to this information

TCA can be seen as the glue between the :ref:`DataHandler <t3coreapi:tce>` which takes care of persisting data into
the database, and the :ref:`FormEngine <t3coreapi:FormEngine>` which renders table rows in the Backend. TCA tells both of
these main core constructs how they should behave for specific tables, fields and relations. Additionally, some
parts of the Frontend rendering process also utilize TCA information, for instance the extbase MVC relies on it.

This array is highly extendable using extensions. Extensions can add fields
to existing tables and add new tables. Several required extensions that are
always loaded, already deliver some TCA files in their
:file:`Configuration/TCA` directories.

Most importantly, the extension "core" comes with a definition of pages,
be_users and further tables needed by the whole system.
The extension "frontend" comes with the tables tt_content, fe_users, sys_template and more.
See the directories :file:`typo3/sysext/core/Configuration/TCA/` and
:file:`typo3/sysext/frontend/Configuration/TCA/` for the complete list of the TYPO3 CMS tables.

The TCA definition of a new table with the name "database-table-name" must be done in the
extension directory :file:`Configuration/TCA/` with :file:`database-table-name.php` as filename.
An example is :file:`EXT:sys_note/Configuration/TCA/sys_note.php` for table "sys_note". This file will be
found by the bootstrap code (if starting a TYPO3 request). It must return an
array with the content of the TCA setting or :code:`NULL` if the table
should not be defined (depending on the extension's internal logic).
The return value of any loaded file will be cached, so there must either be no dynamic PHP code in it or
care must be taken to clear the system cache after each change in such files.
See the :ref:`t3api docs <t3coreapi:extending>` for more information on how extensions can add and change TCA.

The :ref:`TYPO3 core bootstrap <t3coreapi:bootstrapping>` compiles the final TCA on first call by loading all files from the
different locations, and caches the result. On subsequent calls this relatively huge array is then rather quickly loaded
from cache and is made available as :php:`$GLOBALS['TCA']` in almost all normal access patterns like Frontend, Backend and CLI requests.


.. _tca-overrides:

TCA overrides
------------------------

In addition to the base TCA definition one can easily add overrides to add, change or remove TCA definitions in custom extensions.

See :ref:`Extending the $TCA array <t3coreapi:extending>` for details.

.. _tca-structure:

TCA main array structure
------------------------


.. _tca-structure-level1:

Table entries (first level)
===========================

The "first level" of the :php:`$GLOBALS['TCA']` array is made of the table names (as
they appear in the database)::

   $GLOBALS['TCA']['pages'] = [
       ...
   ];
   $GLOBALS['TCA']['tt_content'] = [
       ...
   ];
   $GLOBALS['TCA']['tx_examples_haiku'] = [
       ...
   ];

Here three tables, `pages`, `tt_content` and `tx_examples_haiku` are shown as examples.


.. _tca-structure-level2:

Inside tables (second level)
============================

Each table is further defined by an array which configures how the
system handles the table, both for the display and the processing in the
backend. The various parts on this second level are called "sections".

The general structure (looking at a single table) is as follows::

   $GLOBALS['TCA']['tx_examples_haiku'] = [
       'ctrl' => [
           ....
       ],
       'interface' => [
           ....
       ],
       'columns' => [
           ....
       ],
       'types' => [
           ....
       ],
       'palettes' => [
           ....
       ],
   ];

The following table provides a brief description of the various
sections of :php:`$GLOBALS['TCA']['some_table']`. Each section is covered in more details in its own
chapter.


**['ctrl'] The table**

  The "ctrl" section contains properties for the table in general.

  These are basically divided in two main categories:

  - properties which affect how the table is  *displayed* and handled in
    the backend  *interface* . This includes which icon, what name, which
    columns contains the title value, which column defines the type value
    etc.

  - properties which determine how it is processed by the system
    (TCE). This includes publishing control, "deleted" flag, whether the table
    can only be edited by admin-users, may only exist in the tree root
    etc.

  - For all tables configured in :php:`$GLOBALS['TCA']` this section must exist.

  :ref:`Full reference <ctrl>`


**['interface'] Backend interface handling**

  The "interface" section contains properties related to the tables
  display in the backend, mostly the Web > List module.

  :ref:`Full reference <interface>`


**['columns'] Individual fields**

  The "columns" section contains configuration for each table *field*
  (also called "column") which can be edited in the backend.

  The configuration includes both properties for the display in the
  backend as well as the processing of the submitted data.

  Each field can be configured as a certain "type" (e.g. checkbox,
  selector, input field, text area, file or db-relation field, user
  defined etc.) and for each type a separate set of additional
  properties applies. These properties are clearly explained for each
  type.

  :ref:`Full reference <columns>` and :ref:`['config'] section <columns-types>`.


**['types'] Form layout for editing**

  The "types" section defines how the fields in the table (configured in
  the "columns" section) should be arranged inside the editing form; in
  which order, with which "palettes" (see below) and with which possible
  additional features applied.

  :ref:`Full reference <types>`


**['palettes'] Palette fields order**

  A palette is just a list of fields which will be arranged horizontally
  side-by-side.

  :ref:`Full reference <palettes>`


.. _tca-structure-deeper:

Deeper levels
=============

All properties on the second level either have their own properties or
contain a further hierarchy.

In the case of the :ref:`[columns]<columns>` section, this will be the fields
themselves. For the :ref:`[types]<types>` and :ref:`[palettes]<palettes>` section this will be the list
of all possible types and palettes.


.. _tca-structure-scope:

Properties scope
----------------

In the detail reference one or more scopes are given for each
property. They indicate which area is affected by a given
property. The various scopes are explained below:

Display
  A "display" property will only affect the backend forms themselves.
  They have no impact on the values, nor on the database.

Proc.
  This stands for "processing". Such properties have an impact
  on the values entered (for example, filtering them) or how they
  are written to the database (for example, dates transformed to
  time stamps).

Database
  Such a property influences only the data type with regards
  to the database structure (for example, dates kept as
  datetime fields).

Search
  Search properties are related to the general search feature
  provided by the TYPO3 backend.

Because some things never fit in precise categories, there may be
properties with a special scope. The meaning will be explained in
the description of the property itself.


.. _tca-glossary:

Glossary
--------

Before you read on, let's just refresh the meaning of a few concepts
mentioned on the next pages:

TCE
  Short for :ref:`TYPO3 Core Engine <t3coreapi:tce>`. Also referred to as "DataHandler".
  The corresponding class
  :php:`TYPO3\CMS\Core\DataHandling\DataHandler`
  should ideally handle all updates to records made in the backend of TYPO3. The class will handle all the
  rules which may be applied to each table correctly. It will also handle logging, versioning, history and undo features,
  and copying, moving, deleting etc.

"list of"
  Typically used like "list of field names". Whenever
  "list of" is used it means *a list of strings separated by comma and
  with NO space between the values*.

field name
  The name of a field from a database table. Another
  word for the same is "column" but it is used more rarely, however the
  meaning is exactly the same.

record type
  A record can have different types, determined by the
  value of a certain field in the record. This field is defined by the
  :ref:`type property <ctrl-reference-type>` of the [ctrl] section.
  It affects which fields are displayed in backend form
  (see the :ref:`"types" configuration <types>`).
  The record type can be considered as a switch in the interpretation
  of the whole record.

LLL reference
  A localized string fetched from a locallang file
  by prefixing the string with :code:`LLL:`.
