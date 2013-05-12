.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt


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

Here three tables, "pages", "tt\_content" and "tt\_myext", are shown as
examples.


.. _tca-structure-level2:

Inside the table entries (second level)
"""""""""""""""""""""""""""""""""""""""

Each table is further defined by an array which configures how the
system handles the table, both for display and processing in the
backend. The various parts on this second level are called "sections".

The general structure (looking at a single table) is as follows::

   $TCA['tx_examples_haiku'] = array(
       'ctrl' => array(
           ....
       ),
       'interface' => array(
           ....
       ),
       'feInterface' => array(
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


.. ### BEGIN~OF~TABLE ###

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


.. container:: table-row

   Section
         interface

   Description
         **The backend interface handling**

         The "interface" section contains properties related to the tables
         display in the backend, mostly the Web > List module.


.. container:: table-row

   Section
         feInterface

   Description
         **Frontend Editing**

         The "feInterface" section contains properties related to Front End
         editing of the table, mostly related to the feAdmin\_lib.

         It is deprecated in the sense that it will still exist, but will not be
         (and should not be) extended further.


.. container:: table-row

   Section
         columns

   Description
         **The individual fields**

         The "columns" section contains configuration for each table  *field*
         (also called "column") which can be edited by the backend.

         The configuration includes both properties for the display in the
         backend as well as the processing of the submitted data.

         Each field can be configured as a certain "type" (e.g. checkbox,
         selector, input field, text area, file or db-relation field, user
         defined etc.) and for each type a separate set of additional
         properties applies. These properties are clearly explained for each
         type.


.. container:: table-row

   Section
         types

   Description
         **The form layout for editing**

         The "types" section defines how the fields in the table (configured in
         the "columns" section) should be arranged inside the editing form; in
         which order, with which "palettes" (see below) and with which possible
         additional features applied.


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


.. ###### END~OF~TABLE ######


.. _tca-structure-deeper:

Deeper levels
"""""""""""""

All properties on the second level either have their own properties or
contain a further hierarchy.

In the case of the :ref:`[columns]<columns>` section, this will be the fields
themselves. For the :ref:`[types]<types>` and :ref:`[palettes]<palettes>` section this will be the list
of all possible types and palettes.

