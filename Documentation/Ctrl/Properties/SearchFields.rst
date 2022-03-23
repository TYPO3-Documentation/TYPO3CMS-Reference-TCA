.. include:: /Includes.rst.txt
.. _ctrl-reference-searchfields:

============
searchFields
============

.. confval:: searchFields

   :Path: $GLOBALS['TCA'][$table]['ctrl']
   :type: string
   :Scope: Search


   Comma-separated list of fields from the table that will be included when searching for records in the TYPO3 backend.
   No record from a table will ever be found if that table does not have `searchFields` defined. Only fields of the
   following TCA types are searchable:

   *  :ref:`text <columns-text>`
   *  :ref:`flex <columns-flex>`
   *  :ref:`slug <columns-slug>`
   *  :ref:`input <columns-input>`

   Adding fields of different types to `searchFields` has no effect.

   There are more fine grained controls per column, see the documentation of the "search" key of any type in :ref:`columns-types`.

   .. note::

      Fields of type :ref:`input <columns-input>` may be excluded from search by default,
      especially when using ``date``, ``time`` or ``int`` in ``eval``.
      To include them, modify the search query with this hook:
      :doc:`t3core:Changelog/9.2/Feature-71911-AddConstraintHookInDatabaseRecordListMakeSearchString`.


   .. note::

      When searching as admin the fields `uid` and `pid` are automatically included.
      For editors, `uid` and/or `pid` have to be added manually to the searchFields list.


Examples
========

Example from "tt\_content" table::

   'ctrl' => [
      'searchFields' => 'header,header_link,subheader,bodytext,pi_flexform',
      ...
   ],
