.. include:: /Includes.rst.txt
.. _ctrl-reference-adminonly:

=========
adminOnly
=========

.. confval:: adminOnly

   :Path: $GLOBALS['TCA'][$table]['ctrl']
   :type: boolean
   :Scope: Proc. / Display

   Records can be changed  *only* by "admin"-users (having the "admin" flag set).

Examples
========

Table :sql:`my_table` is only editable by admin users:

.. code-block:: php
   :caption: EXT:my_sitepackage/Configuration/TCA/my_table.php

   'ctrl' => [
      'adminOnly' => 1,
      ...
   ],
