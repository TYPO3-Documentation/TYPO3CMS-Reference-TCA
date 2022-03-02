.. include:: /Includes.rst.txt
.. _columns-group-properties-internal-type:

==============
internal\_type
==============

.. versionchanged:: 12.0
   The newly introduced column type :ref:`folder <columns-folder>` replaces
   the combination of :php:`type => 'group'` together with
   :php:`internal_type => 'folder'`.

.. confval:: internal_type

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :Required: false
   :type: string
   :Scope: Display / Proc.
   :Default: db

   Configures the internal type of the group type of the element.
   There are two possible options to choose from:

   folder
      For backward compatibility reasons this option can be used instead
      of the column type :ref:`folder <columns-folder>`.

   db
      This will create a field where database records can be attached
      as references. As it is the default it can be omitted.



Examples
========

Internal type `db`- group relation to a single page
---------------------------------------------------

.. include:: /Images/Rst/GroupDb10.rst.txt

.. include:: /CodeSnippets/GroupDb10.rst.txt
