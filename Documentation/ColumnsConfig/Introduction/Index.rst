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
   :ref:`One or multiple check boxes <columns-check>`

   .. include:: /Includes/Images/Styleguide/RstIncludes/Checkbox2.rst.txt
   .. include:: /Includes/Images/Styleguide/RstIncludes/Checkbox16.rst.txt
   .. include:: /Includes/Images/Styleguide/RstIncludes/Checkbox19.rst.txt
   .. include:: /Includes/Images/Styleguide/RstIncludes/Checkbox17.rst.txt

flex
   :ref:`Form elements stored in an XML structure in one field <columns-flex>`.

group
   :ref:`Relations to other table rows or files <columns-group>`.

   .. include:: /Includes/Images/Styleguide/RstIncludes/GroupDb1.rst.txt

imageManipulation
   :ref:`Json array with cut / cropping information
   <columns-imageManipulation>`. Special field for images in FAL
   / Resource handling.

inline
   :ref:`Relations to other table rows that can be edited in the same form
   <columns-inline>`. Also used for file resources via `sys_file_reference`
   table.

   .. include:: /Includes/Images/Styleguide/RstIncludes/Inline1nInline1.rst.txt

input
   :ref:`Single line text input <columns-input>`. Used for a various different
   single line outputs like head lines, links, color pickers.

   .. include:: /Includes/Images/Styleguide/RstIncludes/Input1.rst.txt
   .. include:: /Includes/Images/Styleguide/RstIncludes/Input28.rst.txt
   .. include:: /Includes/Images/Styleguide/RstIncludes/Input30.rst.txt
   .. include:: /Includes/Images/Styleguide/RstIncludes/Input33.rst.txt
   .. include:: /Includes/Images/Styleguide/RstIncludes/Input34.rst.txt
   .. include:: /Includes/Images/Styleguide/RstIncludes/Inputdatetime3.rst.txt
   .. include:: /Includes/Images/Styleguide/RstIncludes/Input29.rst.txt

none
   :ref:`Read only, virtual field <columns-none>`. No DataHandler processing.

   .. include:: /Includes/Images/Styleguide/RstIncludes/None1.rst.txt

passthrough
   :ref:`Not displayed, only send as hidden field to DataHandler
   <columns-passthrough>`.

radio
   :ref:`One or multiple radio buttons <columns-radio>`.

   .. include:: /Includes/Images/Styleguide/RstIncludes/Radio1.rst.txt

select
   :ref:`Select one or more items from a list <columns-select>`.

   .. include:: /Includes/Images/Styleguide/RstIncludes/SelectSingle12.rst.txt
   .. include:: /Includes/Images/Styleguide/RstIncludes/SelectMultiplesidebyside1.rst.txt
   .. include:: /Includes/Images/Styleguide/RstIncludes/SelectSinglebox1.rst.txt
   .. include:: /Includes/Images/Styleguide/RstIncludes/SelectTree1.rst.txt

slug
   :ref:`Define parts of a URL path<columns-slug>`

text
   :ref:`A multiline text field <columns-text>`. Used for RTE display,
   t3editor and some more.

   .. include:: /Includes/Images/Styleguide/RstIncludes/Text4.rst.txt
   .. include:: /Includes/Images/Styleguide/RstIncludes/Rte1.rst.txt

user
   :ref:`Special rendering and evaluation defined by an additional
   node in the form engine<columns-user>`
