.. include:: /Includes.rst.txt


.. _tca-structure:

Structure of the $TCA array
^^^^^^^^^^^^^^^^^^^^^^^^^^^


.. _tca-structure-level1:

The table entries (first level)
"""""""""""""""""""""""""""""""

The "first level" of the $TCA array is made of the table names (as
they appear in the database)::

   $TCA['pages'] = array(
       ...
   );
   $TCA['tt_content'] = array(
       ...
   );
   $TCA['tx_examples_haiku'] = array(
       ...
   );

Here three tables, "pages", "tt\_content" and "tx\_examples\_haiku" are shown as
examples.


.. _tca-structure-level2:

Inside the table entries (second level)
"""""""""""""""""""""""""""""""""""""""

Each table is further defined by an array which configures how the
system handles the table, both for the display and the processing in the
backend. The various parts on this second level are called "sections".

The general structure (looking at a single table) is as follows::

   $TCA['tx_examples_haiku'] = array(
       'ctrl' => array(
           ....
       ),
       'interface' => array(
           ....
       ),
       'columns' => array(
           ....
       ),
       'types' => array(
           ....
       ),
       'palettes' => array(
           ....
       ),
   );

The following table provides a brief description of each the various
sections of $TCA. Each section is covered in more details in its own
chapter.


.. container:: table-row

   Section
         ctrl

   Description
         **The table**

         The "ctrl" section contains properties for the table in general.

         These are basically divided in two main categories:

         - properties which affect how the table is  *displayed* and handled in
           the backend  *interface* .This includes which icon, what name, which
           columns contains the title value, which column defines the type value
           etc.

         - properties which determine how it is processed by the system
           (TCE).This includes publishing control, "deleted" flag, whether the table
           can only be edited by admin-users, may only exist in the tree root
           etc.

         -  For all tables configured in $TCA this section must exist.

         :ref:`Full reference <ctrl>`


.. container:: table-row

   Section
         interface

   Description
         **The backend interface handling**

         The "interface" section contains properties related to the tables
         display in the backend, mostly the Web > List module.

         :ref:`Full reference <interface>`


.. container:: table-row

   Section
         columns

   Description
         **The individual fields**

         The "columns" section contains configuration for each table  *field*
         (also called "column") which can be edited in the backend.

         The configuration includes both properties for the display in the
         backend as well as the processing of the submitted data.

         Each field can be configured as a certain "type" (e.g. checkbox,
         selector, input field, text area, file or db-relation field, user
         defined etc.) and for each type a separate set of additional
         properties applies. These properties are clearly explained for each
         type.

         :ref:`Full reference <columns>`


.. container:: table-row

   Section
         types

   Description
         **The form layout for editing**

         The "types" section defines how the fields in the table (configured in
         the "columns" section) should be arranged inside the editing form; in
         which order, with which "palettes" (see below) and with which possible
         additional features applied.

         :ref:`Full reference <types>`


.. container:: table-row

   Section
         palettes

   Description
         **The palette fields order**

         A palette is just a list of fields which will be arranged horizontally
         side-by-side. But the main idea is that these fields can be displayed
         in the top-frame of the backend interface on request so they don't
         display inside the main form. In this way they are kind of hidden
         fields which are brought forth either by clicking an icon in the main
         form or (more usual) when you place the cursor in a form field of
         the main form).

         :ref:`Full reference <palettes>`


.. _tca-structure-deeper:

Deeper levels
"""""""""""""

All properties on the second level either have their own properties or
contain a further hierarchy.

In the case of the :ref:`[columns]<columns>` section, this will be the fields
themselves. For the :ref:`[types]<types>` and :ref:`[palettes]<palettes>` section this will be the list
of all possible types and palettes.


.. _tca-structure-scope:

Properties scope
""""""""""""""""

In the detail reference one or more scopes are given for each
property. They indicate which area is affected by a given
property. The various scopes are explained below:

Display
  A "display" property will only affect the backend forms themselves.
  They have no impact on the values, nor on the database.

Proc.
  This stands for "processing". Such properties have an impact
  on the values entered (for example, filtering them) or how they
  how written to the database (for example, dates transformed to
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
