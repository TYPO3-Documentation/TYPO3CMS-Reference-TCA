.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt
.. include:: Images.txt


Soft References
^^^^^^^^^^^^^^^

"Soft References" are references to database elements, files, email
addresses, URls etc. which are found in-text in content. The <link
[page\_id]> tag from typical bodytext fields are an example of this.

The Soft Reference parsers are used by the system to find these
references and process them accordingly in import/export actions and
copy operations. Also, the soft references are utilized by integrity
checking functions.


Default soft reference parsers
""""""""""""""""""""""""""""""

The class “t3lib\_softrefproc” contains generic parsers for the most
well-known types which are default for most TYPO3 installations. This
is the list of the possible keys:


.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   softref key
         “softref” key

   Description
         Description


.. container:: table-row

   softref key
         substitute

   Description
         A full field value targeted for manual substitution (for import
         /export features)


.. container:: table-row

   softref key
         notify

   Description
         Just report if a value is found, nothing more.


.. container:: table-row

   softref key
         images

   Description
         HTML <img> tags for RTE images / images from fileadmin/


.. container:: table-row

   softref key
         typolink

   Description
         References to page id or file, possibly with anchor/target, possibly
         comma-separated list.


.. container:: table-row

   softref key
         typolink\_tag

   Description
         As typolink, but searching for <link> tag to encapsulate it.


.. container:: table-row

   softref key
         TSconfig

   Description
         Processing (filerefs? Domains? what do we know...)


.. container:: table-row

   softref key
         TStemplate

   Description
         Free text references to "fileadmin/" files. HTML resource links like
         <a>, <img>, <form>


.. container:: table-row

   softref key
         ext\_fileref

   Description
         Relative file reference, prefixed "EXT:[extkey]/" - for finding
         extension dependencies


.. container:: table-row

   softref key
         email

   Description
         Email highlight


.. container:: table-row

   softref key
         url

   Description
         URL highlights (with a scheme)


.. ###### END~OF~TABLE ######


These are by default set up in the config\_default.php file::

      'SC_OPTIONS' => array(
                   'GLOBAL' => array(
                           'softRefParser' => array(
                                   'substitute' => 't3lib/class.t3lib_softrefproc.php:&t3lib_softrefproc',
                                   'notify' => 't3lib/class.t3lib_softrefproc.php:&t3lib_softrefproc',
                                   'images' => 't3lib/class.t3lib_softrefproc.php:&t3lib_softrefproc',
                                   'typolink' => 't3lib/class.t3lib_softrefproc.php:&t3lib_softrefproc',
                                   'typolink_tag' => 't3lib/class.t3lib_softrefproc.php:&t3lib_softrefproc',
                                   'TSconfig' => 't3lib/class.t3lib_softrefproc.php:&t3lib_softrefproc',
                                   'TStemplate' => 't3lib/class.t3lib_softrefproc.php:&t3lib_softrefproc',
                                   'ext_fileref' => 't3lib/class.t3lib_softrefproc.php:&t3lib_softrefproc',
                                   'email' => 't3lib/class.t3lib_softrefproc.php:&t3lib_softrefproc',
                                   'url' => 't3lib/class.t3lib_softrefproc.php:&t3lib_softrefproc',
                           )
                   )
           ),


User-defined soft reference parsers
"""""""""""""""""""""""""""""""""""

Soft References can also be user-defined. It is easy to set them up by
simply adding new keys in
$TYPO3\_CONF\_VARS['SC\_OPTIONS']['GLOBAL']['softRefParser']. Use key
names based on the extension you put it in, e.g. “tx\_myextensionkey”.

The class containing the soft reference parser must have a function
named “findRef”. Please refer to the class “t3lib\_softrefproc” from
t3lib/ for the API to use and return.

