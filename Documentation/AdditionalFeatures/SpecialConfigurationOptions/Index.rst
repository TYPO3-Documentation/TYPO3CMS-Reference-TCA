.. include:: Images.txt

.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. ==================================================
.. DEFINE SOME TEXTROLES
.. --------------------------------------------------
.. role::   underline
.. role::   typoscript(code)
.. role::   ts(typoscript)
   :class:  typoscript
.. role::   php(code)


Special Configuration options
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^


Keywords
""""""""

This table lists the options for keywords in special configuration.
Each keyword is followed by a  *value* wrapped in [] (square
brackets).

It is possible to use several keywords. Each must be separated by a
colon (:). See examples below.


.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Keyword
         Keyword
   
   Description
         Description
   
   Value syntax
         Value syntax
   
   Examples
         Examples


.. container:: table-row

   Keyword
         nowrap
   
   Description
         Disables line wrapping in "text" type fields.
   
   Value syntax
         [no options]
   
   Examples


.. container:: table-row

   Keyword
         richtext
   
   Description
         Enables the RTE for the field and allows you to set which toolbar
         buttons must be shown on top of the existing configuration.
   
   Value syntax
         Blank, \* or
         
         keywords separated by "\|"
   
   Examples
         richtext[\*] = all RTE options
         
         richtext[] = inherit default configuration
         
         richtext[cut\|copy\|paste] = ensures that cut, copy and paste options
         are shown regardless of RTE configuration
         
         See RTE API definition later for more details.


.. container:: table-row

   Keyword
         rte\_transform
   
   Description
         Configuration of RTE transformations and other options.
         
         *See table below for a list of the key values possible.*
   
   Value syntax
         key1=value2\|key2=value2\|key3=value3\|...
   
   Examples
         rte\_transform[key1=value1\|key2=value2\|key3=value3]


.. container:: table-row

   Keyword
         fixed-font
   
   Description
         Use a monospace font in “textarea” type fields.
   
   Value syntax
         [no options]
   
   Examples


.. container:: table-row

   Keyword
         enable-tab
   
   Description
         Enable tabulator inside “textarea” type fields.
   
   Value syntax
         [no options]
   
   Examples


.. container:: table-row

   Keyword
         rte\_only
   
   Description
         If set, the field can  *only* be edited with a Rich Text Editor -
         otherwise it will not show up.
   
   Value syntax
         boolean (0/1)
   
   Examples


.. container:: table-row

   Keyword
         static\_write
   
   Description
         This allows to configure a field value to be written to a file.
         
         *See table below for value of f1-f5*
   
   Value syntax
         f1\|f2\|f3\|f4\|f5
   
   Examples


.. container:: table-row

   Keyword
         wizards
   
   Description
         Used to specifically enable wizards configured for a field. See option
         "enableByTypeConfig" in the wizard configuration.
   
   Value syntax
         wizard-key1\|wizard-key2\|...
   
   Examples
         wizards[table]


.. ###### END~OF~TABLE ######


rte\_transform[] key/value pairs
""""""""""""""""""""""""""""""""


.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Keyword
         Keyword
   
   Description
         Description
   
   Value syntax
         Value syntax
   
   Examples
         Examples


.. container:: table-row

   Keyword
         flag
   
   Description
         This points to a field in the row which determines whether or not the
         RTE is disabled. If the value of the field is set, then the RTE is
         disabled.
   
   Value syntax
         Field name
   
   Examples
         rte\_transform[flag=rte\_disable]


.. container:: table-row

   Keyword
         mode
   
   Description
         Configures which transformations the content will pass through between
         the database and the RTE application.
   
   Value syntax
         Transformation keywords separated by dashes ("-").
         
         The order is calling order when direction is "db".
         
         *See* ` *RTE API*  <#Transformation%20overview%7Coutline>`_  *section
         for list of transformations available.*
   
   Examples
         rte\_transform[mode=ts\_css-images]


.. container:: table-row

   Keyword
         imgpath
   
   Description
         This sets an alternative path for Rich Text Editor images. Default is
         configured by the value
         TYPO3\_CONF\_VARS["BE"]["RTE\_imageStorageDir"] (default is
         “uploads/”)
   
   Value syntax
         path relative to PATH\_site, e.g. “uploads/rte\_test/”
   
   Examples


.. ###### END~OF~TABLE ######


Example - Setting up Rich Text Editors
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

Let's take another table from the “examples” extension to look at how
to set up a text will with a RTE. The table is called
“tx\_examples\_haiku” and it contains a column called “poem” on which
we want to have the RTE. Its configuration looks like this:

::

   'poem' => array(
           'exclude' => 0,
           'label' => 'LLL:EXT:examples/locallang_db.xml:tx_examples_haiku.poem',
           'config' => array(
                   'type' => 'text',
                   'cols' => 40,
                   'rows' => 6
           ),
           'defaultExtras' => 'richtext[]:static_write[filename|poem]'
   )
   |img-61| 
   

Concentrate on just the part in bold. This example contains no
additional configuration (notice the empty square brackets), meaning
the RTE will inherit from the TYPO3-wide configuration (as defined by
Page and User TSconfig). This may look like this (depending on your
local RTE configuration):


static\_write[] parameters
""""""""""""""""""""""""""


.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Keyword
         Keyword
   
   Description
         Description


.. container:: table-row

   Keyword
         f1
   
   Description
         The field name which contains the name of the file being edited. This
         filename should be relative to the path configured in
         $TYPO3\_CONF\_VARS[“BE”][“staticFileEditPath”] (which is
         "fileadmin/static/" by default).
         
         The file  **must** exist and be writable.


.. container:: table-row

   Keyword
         f2
   
   Description
         The field name which will also receive a copy of the content (in the
         database).
         
         This should probably be the field name that carries this
         configuration.


.. container:: table-row

   Keyword
         f3
   
   Description
         The field name containing the alternative subpart marker used to
         identify the editable section in the file.
         
         The default marker is ###TYPO3\_STATICFILE\_EDIT### and may be
         encapsulated in HTML comments. There must be two markers, one to
         identify the beginning and one for the end of the editable section.
         
         Optional.


.. container:: table-row

   Keyword
         f4
   
   Description
         The field name of the record which - if true - indicates that the
         content should always be loaded into the form from the file and not
         from the duplicate field in the database.


.. container:: table-row

   Keyword
         f5
   
   Description
         The field name which will receive a status message as a short text
         string.
         
         Optional.


.. ###### END~OF~TABLE ######


Example - Write to static file
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

Let's go back to the above example and look at the second part of the
“defaultExtras” configuration (in bold):

::

   'poem' => array(
           'exclude' => 0,
           'label' => 'LLL:EXT:examples/locallang_db.xml:tx_examples_haiku.poem',
           'config' => array(
                   'type' => 'text',
                   'cols' => 40,
                   'rows' => 6
           ),
           'defaultExtras' => 'richtext[]:static_write[filename|poem]'
   )

This configuration means that the content of the “poem” field will be
written to the file given in “filename”. It looks like this in the BE:

|img-62| Before saving the content of "fileadmin/static/myhaiku.txt" must be:

::

   ###TYPO3_STATICFILE_EDIT###
   ###TYPO3_STATICFILE_EDIT###

After saving the content of "fileadmin/static/myhaiku.txt" looks like
this:

::

   ###TYPO3_STATICFILE_EDIT###
   <p>Documentation</p><p>Community is happy</p><p>If kept up to date</p>
   ###TYPO3_STATICFILE_EDIT###

