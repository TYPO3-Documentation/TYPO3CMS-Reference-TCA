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

Table :sql:`sys_template` is only editable only by admin users:

.. code-block:: php

   'ctrl' => [
      'adminOnly' => 1,
      ...
   ],
