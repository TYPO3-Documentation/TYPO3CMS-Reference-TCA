.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../Includes.txt


.. _tca-what-is:

What is $TCA?
-------------

The Table Configuration Array (or $TCA) is a global array in TYPO3
which extends the definition of tables beyond what can be done
strictly with SQL. First and foremost $TCA defines which tables are
editable in the TYPO3 backend. Database tables with no corresponding
entry in $TCA are "invisible" to the TYPO3 backend. The $TCA
definition of a table also covers the following:

- the relations between that table and other tables

- what fields should be displayed in the backend and with which layout

- how should a field be validated (e.g. required, integer, etc.)

This array is highly extendable using extensions. Extensions can add fields
to existing tables and add new tables. Several required extions that are
always loaded already deliver some TCA in their Configuration/TCA directories.
Most importandly, extension 'core' comes with a definition of pages,
be_users and further tables needed by the whole system.

Since TYPO3 CMS 6.1, TCA definition of a new table must be done in the
extension directory "Configuration/TCA/" with database-table-name.php as filename.
An example is EXT:sys_note/Configration/TCA/sys_note.php. This file will be
found by the bootstrap code (if starting a TYPO3 request) and must return an
array with the content of the TCA setting. The return value of any loaded
file will be cached, so there must be no dynamic PHP code in it.

.. toctree::
   :maxdepth: 5
   :titlesonly:
   :glob:

   Structure/Index
   Glossary/Index

