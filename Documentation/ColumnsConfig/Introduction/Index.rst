Introduction
------------

Section :code:`['columns'][*]['config']` (where :code:`*` stands for a table column) is the main workhorse when it comes to single field configuration.
The main property is :code:`type`, it specifies the DataHandler processing and database value. Additionally,
property :code:`renderType` specifies how a field is rendered. The renderType is sometimes optional. Both properties
together specify the set of properties that are valid for one field.

This section of the documentation is first split by type to give an overview of what can be done
with a type, then lists all possible renderType's with all possible properties. Since some type's
can do useful stuff without a specific renderType too, those properties are listed below renderType "default",
which equals to "not set".

An overview of available types:

check
   :ref:`One or multiple check boxes <columns-check>`.

flex
   :ref:`Form elements stored in an XML structure in one field <columns-flex>`.

group
   :ref:`Relations to other table rows or files <columns-group>`.

imageManipulation
   :ref:`Json array with cut / cropping information <columns-imageManipulation>`. Special field for images in FAL / Resource handling.

inline
   :ref:`Relations to other table rows that can be edited in the same form <columns-inline>`. Also used for file resources via `sys_file_reference` table.

input
   :ref:`Single line text input <columns-input>`. Used for a various different single line outputs like head lines, links, color pickers.

none
   :ref:`Read only, virtual field <columns-none>`. No DataHandler processing.

passthrough
   :ref:`Not displayed, only send as hidden field to DataHandler <columns-passthrough>`.

radio
   :ref:`One or multiple radio buttons <columns-radio>`.

select
   :ref:`Select one or more items from a list <columns-select>`.

text
   :ref:`A multiline text field <columns-text>`. Used for RTE display, t3editor and some more.

user
   :ref:`Rendered by a user function <columns-user>`. Hook-in place for extensions before renderType concept evolved.
