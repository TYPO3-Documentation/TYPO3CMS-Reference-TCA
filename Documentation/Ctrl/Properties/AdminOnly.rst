.. include:: /Includes.rst.txt
.. _ctrl-reference-adminonly:

=========
adminOnly
=========

.. confval:: adminOnly

   :type: boolean
   :Scope: Proc. / Display

   Records can be changed  *only* by "admin"-users (having the "admin" flag set).

Examples
========

   Table "sys\_template" is only editable only by admin users::

   .. code-block:: php

      'ctrl' => [
         'adminOnly' => 1,
         ...
      ],

