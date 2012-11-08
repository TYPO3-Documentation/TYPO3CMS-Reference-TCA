.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../Includes.txt
.. include:: Images.txt


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

This array is highly extendable using extensions. As a matter of fact
– if you consider an absolutely bare bones installation of TYPO3 (that
would without even the required extensions) – only a few tables are
configured by default in TYPO3. They are to be found in the file
t3lib/stddb/tables.phpand are:

- the "pages" table containing the page tree of TYPO3

- the "be\_users" table containing backend users

- the "be\_groups" table containing backend user groups

- the "sys\_filemounts" table containing file mounts for backend users

- the "sys\_language" table containing the languages in which various
  elements can be translated

- the "sys\_news" table (since version 4.5) which is used to display
  information in the backend login screen.

All other tables are configured in extensions.

The file "t3lib/stddb/tables.php" contains not only the $TCA
definition. You can also find other global core variables defined
there, but they are not discussed in this document. Some of them are
explained in the "Core APIs" manual, those related to skinning in the
"Core Skinning Guidelines" manual.


.. toctree::
   :maxdepth: 5
   :titlesonly:
   :glob:

   Structure/Index
   Glossary/Index
   CtrlSection/Index

