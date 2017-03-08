.. include:: ../../Includes.txt

.. _columns-group:

type = 'group'
--------------

.. _columns-group-introduction:

Introduction
============

The group element in TYPO3 makes it possible to create references to records from multiple tables in the system.
This is especially useful (compared to the "select" type) when records are scattered over the page tree and require
the Element Browser to be selected.

Next to database relations, the group type is also able to handle files. Using type='group' for file handling
however is considered outdated and should be based on the :ref:`FAL API<t3fal:start>` instead, and it can be
assumed that `internal_type='file'` and `internal_type='file\_reference'` will be removed sooner or later.

For database relations however, the type='group' field is the right and a powerful choice especially if dealing
with lots of re-usable child records, and if :ref:`type='inline' <columns-inline>` is not suitable.

This type comes with various additional wizards and field controls which can be turned on or off if needed.


.. _columns-group-examples:

Examples
========

.. figure:: ../../Images/TypeGroupDbStyleguide1.png
   :alt: Group relation to be_groups and be_users with some selected records (group_db_1)

   Group relation to be_groups and be_users with some selected records (group_db_1)

.. figure:: ../../Images/TypeGroupFileStyleguide1.png
   :alt: Group file relation with some selected files (group_file_1)

   Group file relation with some selected files (group_file_1)

.. code-block:: php

    'group_db_1' => [
        'label' => 'group_db_1 allowed=be_users,be_groups',
        'config' => [
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'be_users,be_groups',
            'fieldControl' => [
                'editPopup' => [
                    'disabled' => false,
                ],
                'addRecord' => [
                    'disabled' => false,
                ],
                'listModule' => [
                    'disabled' => false,
                ],
            ],
        ],
    ],

.. code-block:: php

    'group_file_1' => [
        'exclude' => 1,
        'label' => 'group_file_1',
        'config' => [
            'type' => 'group',
            'internal_type' => 'file',
            'allowed' => 'jpg, jpeg, png, gif',
            'disallowed' => 'ai',
            'size' => 3,
            'uploadfolder' => 'uploads/tx_styleguide/',
            'max_size' => 2000,
        ],
    ],


.. _columns-group-renderType-default:

renderType default
==================

type='group' has (currently) only one render definition, no special renderType must be set.

.. _columns-group-properties:

.. _columns-group-properties-type:

.. _columns-group-properties-allowed:
.. include:: ../Properties/GroupAllowed.rst

.. _columns-group-properties-appearance:
.. include:: ../Properties/GroupAppearance.rst

.. _columns-group-properties-autosizemax:
.. include:: ../Properties/CommonAutoSizeMax.rst

.. _columns-group-properties-default:
.. include:: ../Properties/CommonDefault.rst

.. _columns-group-properties-disallowed:
.. include:: ../Properties/GroupDisallowed.rst

.. _columns-group-properties-dontremaptablesoncopy:
.. include:: ../Properties/CommonDontRemapTablesOnCopy.rst

.. _columns-group-properties-fieldControl:
.. include:: ../Properties/CommonFieldControl.rst
.. _columns-group-properties-elementBrowser:
.. include:: ../FieldControl/AddRecord.rst
.. include:: ../FieldControl/EditPopup.rst
.. include:: ../FieldControl/ElementBrowser.rst
.. include:: ../FieldControl/InsertClipboard.rst
.. include:: ../FieldControl/ListModule.rst

.. _columns-group-properties-fieldInformation:
.. include:: ../Properties/CommonFieldInformation.rst

.. _columns-group-properties-fieldWizard:
.. include:: ../Properties/CommonFieldWizard.rst
.. include:: ../FieldWizard/DefaultLanguageDifferences.rst
.. include:: ../FieldWizard/LocalizationStateSelector.rst
.. include:: ../FieldWizard/OtherLanguageContent.rst

.. _columns-group-properties-filter:
.. include:: ../Properties/GroupFilter.rst

.. _columns-group-properties-foreign-table:
.. include:: ../Properties/GroupForeignTable.rst

.. _columns-group-properties-hideMoveIcons:
.. include:: ../Properties/GroupHideMoveIcons.rst

.. _columns-group-properties-hideSuggest:
.. include:: ../Properties/GroupHideSuggest.rst

.. _columns-group-properties-internal-type:
.. include:: ../Properties/GroupInternalType.rst

.. _columns-group-properties-max-size:
.. include:: ../Properties/GroupMaxSize.rst

.. _columns-group-properties-maxitems:
.. include:: ../Properties/CommonMaxitems.rst

.. _columns-group-properties-minitems:
.. include:: ../Properties/CommonMinitems.rst

.. _columns-group-properties-mm:
.. include:: ../Properties/CommonMm.rst

.. _columns-group-properties-mm-insert-fields:
.. include:: ../Properties/CommonMmInsertFields.rst

.. _columns-group-properties-mm-hasuidfield:
.. include:: ../Properties/CommonMmHasUidField.rst

.. _columns-group-properties-mm-match-fields:
.. include:: ../Properties/CommonMmMatchFields.rst

.. _columns-group-properties-mm-opposite-field:
.. include:: ../Properties/CommonOppositeField.rst

.. _columns-group-properties-mm-opposite-usage:
.. include:: ../Properties/CommonMmOppositeUsage.rst

.. _columns-group-properties-mm-table-where:
.. include:: ../Properties/CommonMmTableWhere.rst

.. _columns-group-properties-multiple:
.. include:: ../Properties/CommonMultiple.rst

.. _columns-group-properties-prepend-tname:
.. include:: ../Properties/GroupPrependTname.rst

.. _columns-group-properties-readOnly:
.. include:: ../Properties/CommonReadOnly.rst

.. _columns-group-properties-size:
.. include:: ../Properties/CommonSize.rst

.. _columns-group-properties-suggestOptions:
.. include:: ../Properties/GroupSuggestOptions.rst

.. _columns-group-properties-uploadfolder:
.. include:: ../Properties/GroupUploadfolder.rst


.. _columns-group-data:

Stored data values
==================

.. note::
    This structural in-depth study should probably be moved elsewhere and cleaned up since it contains some
    invalid information.

Since the "group" element allows to store references to multiple elements we might want to look at how these
references are stored internally.

.. _columns-group-data-storage:

Storage methods
~~~~~~~~~~~~~~~

There are two main methods for this:

- Stored in a comma list

- Stored with a join table (MM relation)

The default and most wide spread method is the comma list.

.. _columns-group-data-reserved:

Reserved tokens
~~~~~~~~~~~~~~~

In the comma list the token "," is used to separate the values. In addition the pipe sign "\|" is used to separate
value from label value when delivered to the interface. Therefore these tokens are not allowed in reference
values, not even if the MM method is used.

.. _columns-group-data-commalist:

The "Comma list" method (default)
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

When storing references as a comma list the values are simply stored one after another, separated by a comma in between
(with no space around!). The database field type is normally a varchar, text or blob field in order to handle this.

From the examples above the four Content Elements will be stored as "26,45,49,1" which is the UID values of the records.
The images will be stored as their filenames in a list
like "DSC\_7102\_background.jpg ,DSC\_7181.jpg,DSC\_7102\_background\_01.jpg".

Since "db" references can be stored for multiple tables the rule is that uid numbers *without* a table name prefixed
are implicitly from the first table in the allowed table list! Thus the list "26,45,49,1" is implicitly understood as
"tt\_content\_26,tt\_content\_45,tt\_content\_49,tt\_content\_1". That would be equally good for storage, but by default
the "default" table name is not prefixed in the stored string. As an example, lets say you wanted a relation to a
Content Element and a Page in the same list. That would look like "tt\_content\_26,pages\_123" or alternatively
"26,pages\_123" where "26" implicitly points to a "tt\_content" record given that the list of allowed tables
were "tt\_content,pages".

.. _columns-group-data-mm:

The "MM" method
~~~~~~~~~~~~~~~

Using the MM method you have to create a new database table which you configure with the key "MM". The table must
contain a field, "uid\_local" which contains the reference to the uid of the record that contains the list of elements
(the one you are editing). The "uid\_foreign" field contains the uid of the reference record you are referring to.
In addition a "tablename" and "sorting" field exists if there are references to more than one table.

Lets take the examples from before and see how they would be stored in an MM table:

+-------------------------------------+--------------+-------------+---------+
| uid\_local                          | uid\_foreign | tablename   | sorting |
+=====================================+==============+=============+=========+
| [uid of the record you are editing] | 26           | tt\_content | 1       |
+-------------------------------------+--------------+-------------+---------+
| [uid of the record you are editing] | 45           | tt\_content | 2       |
+-------------------------------------+--------------+-------------+---------+
| [uid of the record you are editing] | 49           | tt\_content | 3       |
+-------------------------------------+--------------+-------------+---------+
| [uid of the record you are editing] | 1            | tt\_content | 4       |
+-------------------------------------+--------------+-------------+---------+

Or for "tt\_content\_26,pages\_123":

+-------------------------------------+--------------+-------------+---------+
| uid\_local                          | uid\_foreign | tablename   | sorting |
+=====================================+==============+=============+=========+
| [uid of the record you are editing] | 26           | tt\_content | 1       |
+-------------------------------------+--------------+-------------+---------+
| [uid of the record you are editing] | 123          | pages       | 2       |
+-------------------------------------+--------------+-------------+---------+

Or for "DSC\_7102\_background.jpg,DSC\_7181.jpg,DSC\_7102\_background\_01.jpg":

+-------------------------------------+-------------------------------+-------------+---------+
| uid\_local                          | uid\_foreign                  | tablename   | sorting |
+=====================================+===============================+=============+=========+
| [uid of the record you are editing] | DSC\_7102\_background.jpg     | N/A         | 1       |
+-------------------------------------+-------------------------------+-------------+---------+
| [uid of the record you are editing] | DSC\_7181.jpg                 | N/A         | 2       |
+-------------------------------------+-------------------------------+-------------+---------+
| [uid of the record you are editing] | DSC\_7102\_background\_01.jpg | N/A         | 3       |
+-------------------------------------+-------------------------------+-------------+---------+

.. _columns-group-data-api:

API for getting the reference list
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

Class :ref:`TYPO3\\CMS\\Core\\Database\\RelationHandler <t3api:TYPO3\\CMS\\Core\\Database\\RelationHandler>`
is designed to transform the stored reference list values into an array where all uids are paired with the right table
name. Also, this class will automatically retrieve the list of MM relations. In other words, it provides an API for
getting the references from "group" elements into a PHP array regardless of storage method.

.. _columns-group-data-files:

Managing file references
~~~~~~~~~~~~~~~~~~~~~~~~

When a new file is attached to a record the TCE will detect the new file based on whether it has a path prefixed or not.
New files are copied into the upload folder that has been configured and the final value list going into the database
will contain the new filename of the copy.

If images are removed from the list that is detected by simply comparing the original file list with the one submitted.
Any files not listed anymore are deleted.

Examples:

+----------------------+------------------------------+-------------------------------------+--------------------------------------+
| Current DB value     | Data from FormEngine         | New DB value                        | Processing done                      |
+======================+==============================+=====================================+======================================+
| first.jpg,second.jpg | first.jpg,/www/typo3/fileadm | first.jpg,newfile_01.jpg,second.jpg | /www/typo3/fileadmin/newfile.jpg     |
|                      | in/newfile.jpg,second.jpg    |                                     | was copied to "uploads/[some-        |
|                      |                              |                                     | dir]/newfile_01.jpg". The filename   |
|                      |                              |                                     | was appended with "_01" because      |
|                      |                              |                                     | another file with the name           |
|                      |                              |                                     | "newfile.jpg" already existed in the |
|                      |                              |                                     | location.                            |
+----------------------+------------------------------+-------------------------------------+--------------------------------------+
| first.jpg,second.jpg | first.jpg                    | first.jpg                           | "uploads/[some-dir]/second.jpg" was  |
|                      |                              |                                     | deleted from the location.           |
+----------------------+------------------------------+-------------------------------------+--------------------------------------+
