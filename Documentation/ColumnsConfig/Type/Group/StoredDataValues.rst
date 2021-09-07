.. include:: /Includes.rst.txt
.. _columns-group-data:

==================
Stored data values
==================

.. note::
    This structural in-depth study should probably be moved elsewhere and cleaned up since it contains some
    invalid information.

Since the "group" element allows to store references to multiple elements we might want to look at how these
references are stored internally.

.. _columns-group-data-storage:

Storage methods
---------------

There are two main methods for this:

-  Stored in a :ref:`comma list <columns-group-data-commalist>`
-  Stored with a join table (:ref:`MM relation<columns-group-data-mm>`)

The default and most wide spread method is the comma list.

.. _columns-group-data-reserved:

Reserved tokens
---------------

In the comma list the token "," is used to separate the values. In addition the pipe sign "\|" is used to separate
value from label value when delivered to the interface. Therefore these tokens are not allowed in reference
values, not even if the MM method is used.

.. _columns-group-data-commalist:

The "Comma list" method (default)
---------------------------------

When storing references as a comma list the values are simply stored one after another, separated by a comma in between
(with no space around!). The database field type is normally a varchar, text or blob field in order to handle this.

From the examples above the four Content Elements will be stored as "26,45,49,1" which is the UID values of the records.

Since "db" references can be stored for multiple tables the rule is that uid numbers *without* a table name prefixed
are implicitly from the first table in the allowed table list! Thus the list "26,45,49,1" is implicitly understood as
"tt\_content\_26,tt\_content\_45,tt\_content\_49,tt\_content\_1". That would be equally good for storage, but by default
the "default" table name is not prefixed in the stored string. As an example, lets say you wanted a relation to a
Content Element and a Page in the same list. That would look like "tt\_content\_26,pages\_123" or alternatively
"26,pages\_123" where "26" implicitly points to a "tt\_content" record given that the list of allowed tables
were "tt\_content,pages".

.. _columns-group-data-mm:

The "MM" method
---------------

.. versionadded:: 11.4
   Starting with v11.4 intermediate mm tables defined in :php:`['config']['MM']`
   are created automatically and do not have to be defined in
   file:`ext_tables.sql` anymore.

Using the MM method the Database Analyzer creates an intermediate MM table to
store the relation data. The database fields in the affected tables only contain
the number of records in the relation. You can read more about it here:
`Auto creation of intermediate MM tables from TCA
<tca_property_MM_auto_creation_mm_table>`

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

.. _columns-group-data-api:

API for getting the reference list
----------------------------------

Class :php:`TYPO3\CMS\Core\Database\RelationHandler` is designed to transform the stored reference list
values into an array where all uids are paired with the right table name. Also, this class will automatically
retrieve the list of MM relations. In other words, it provides an API for getting the references
from "group" elements into a PHP array regardless of storage method.
