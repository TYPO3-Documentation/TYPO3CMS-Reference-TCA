.. include:: /Includes.rst.txt
.. _ctrl-reference-default-sortby:

===============
default\_sortby
===============

.. confval:: default_sortby

   :Path: $GLOBALS['TCA'][$table]['ctrl']
   :type: string
   :Scope: Display


   If a field name for :ref:`sortby <ctrl-reference-sortby>` is defined, then this is ignored.

   Otherwise this is used as the 'ORDER BY' statement to sort the records in the table when listed in the TYPO3 backend.
   It is possible to have multiple field names in here, and each can have an ASC or DESC keyword. Note that the value
   *should not* be prefixed with 'ORDER BY' in itself.

Examples
========

Sort by title::

   'ctrl' => [
      'default_sortby' => 'title',
      ...
   ],

Sort by title and then by bodytext::

   'ctrl' => [
      'default_sortby' => 'title ASC, bodytext ASC',
      ...
   ],

.. important::
   Do not confuse this property with :ref:`sortby <ctrl-reference-sortby>`: default_sortby should be set only if there
   is no :ref:`sortby <ctrl-reference-sortby>`. The sortby field (typically set to `sorting`) contains an integer
   for explicit sorting , the backend then shows "up" and "down" buttons to manage sorting of records relative
   to each other. The default\_sortby should only be set if that explicit sorting is not wanted or useful. For
   instance, the list of frontend users is sorted by username and has no other explicit sorting field in the database.
