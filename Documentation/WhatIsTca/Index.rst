.. include:: ../Includes.txt


.. _tca-what-is:

What is $GLOBALS['TCA']?
-------------

The Table Configuration Array (or :code:`$GLOBALS['TCA']`) is a global array in TYPO3
which extends the definition of tables beyond what can be done
strictly with SQL. First and foremost $GLOBALS['TCA'] defines which tables are
editable in the TYPO3 backend. Database tables with no corresponding
entry in :code:`$GLOBALS['TCA']` are "invisible" to the TYPO3 backend. The :code:`$GLOBALS['TCA']`
definition of a table also covers the following:

- the relations between that table and other tables

- what fields should be displayed in the backend and with which layout

- how should a field be validated (e.g. required, integer, etc.)

- how a field is used in the frontend by Extbase and any extension
  that may refer to this information

This array is highly extendable using extensions. Extensions can add fields
to existing tables and add new tables. Several required extensions that are
always loaded, already deliver some TCA files in their
:file:`Configuration/TCA` directories.

Most importantly, the extension "core" comes with a definition of pages,
be_users and further tables needed by the whole system.
The extension "frontend" comes with the tables tt_content, fe_users, sys_template and more.
See the directories :file:`typo3/sysext/core/Configuration/TCA/` and
:file:`typo3/sysext/frontend/Configuration/TCA/` for the complete list of the TYPO3 CMS tables.

Since TYPO3 CMS 6.1, the TCA definition of a new table with the name "database-table-name" must be done in the
extension directory :file:`Configuration/TCA/` with :file:`database-table-name.php` as filename.
An example is :file:`EXT:sys_note/Configuration/TCA/sys_note.php` for table "sys_note". This file will be
found by the bootstrap code (if starting a TYPO3 request). It must return an
array with the content of the TCA setting or :code:`NULL` if the table
should not be defined (depending on the extension's internal logic).
The return value of any loaded file will be cached.
So there must either be no dynamic PHP code in it or
care must be taken to clear the system cache after each change in such files.


.. toctree::
   :maxdepth: 5
   :titlesonly:
   :glob:

   Structure/Index
   Glossary/Index

