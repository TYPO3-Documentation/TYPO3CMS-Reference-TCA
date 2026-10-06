.. include:: /Includes.rst.txt

..  _columns-types:

===========================
Field types (config > type)
===========================

The field types get defined in the TCA of a field in `['config']['type']`.
The field type influences the rendering of the form field in the backend. It
also influences the processing of data on saving the values. Those behaviour can
be influenced by further properties.

Section `['columns'][*]['config']` (where `*` stands for a table column) is the main workhorse when it comes to single field configuration.
The main property is `type`, it specifies the DataHandler processing and database value. Additionally,
property `renderType` specifies how a field is rendered. The renderType is sometimes optional. Both properties
together specify the set of properties that are valid for one field.

This section of the documentation is first split by type to give an overview of what can be done
with a type, then lists all possible renderType's with all possible properties. Since some type's
can do useful stuff without a specific renderType too, those properties are listed below renderType "default",
which equals to "not set".

An overview of available types:

check
    :ref:`One or multiple check boxes <columns-check>`

    ..  figure:: /Images/Conference/CheckSingle.png
        :alt: A single checkbox with a label
        :class: with-shadow

        A single checkbox with a label

    ..  figure:: /Images/Conference/CheckInline.png
        :alt: The weekdays of a location, Monday to Friday checked by default
        :class: with-shadow

        The weekdays of a location, Monday to Friday checked by default

    ..  figure:: /Images/Conference/CheckLabeledToggle.png
        :alt: A toggle with the labels Open and Closed
        :class: with-shadow

        A toggle with the labels Open and Closed

    ..  figure:: /Images/Conference/CheckToggle.png
        :alt: A toggle
        :class: with-shadow

        A toggle

flex
    :ref:`Form elements stored in an XML structure in one field <columns-flex>`.

group
    :ref:`Relations to other table rows or files <columns-group>`.

    ..  figure:: /Images/Conference/GroupSpeaker.png
        :alt: The speaker of a talk
        :class: with-shadow

        The speaker of a talk

imageManipulation
    :ref:`Json array with cut / cropping information
    <columns-imagemanipulation>`. Special field for images in FAL
    / Resource handling.

inline
    :ref:`Relations to other table rows that can be edited in the same form
    <columns-inline>`. Also used for file resources via `sys_file_reference`
    table.

    ..  figure:: /Images/Conference/InlineTalks.png
        :alt: The talks of a conference
        :class: with-shadow

        The talks of a conference

input
    :ref:`Single line text input <columns-input>`. Used for a various different
    single line outputs like head lines, links, color pickers.

    ..  figure:: /Images/Conference/ColumnsBasicField.png
        :alt: The title of a conference
        :class: with-shadow

        The title of a conference

    ..  figure:: /Images/Conference/InputPlaceholder.png
        :alt: A short title with the title as placeholder
        :class: with-shadow

        A short title with the title as placeholder

    ..  figure:: /Images/Conference/InputValuePicker.png
        :alt: A room with value picker
        :class: with-shadow

        A room with value picker

none
    :ref:`Read only, virtual field <columns-none>`. No DataHandler processing.

    ..  figure:: /Images/Conference/NoneComment.png
        :alt: The time a comment was written
        :class: with-shadow

        The time a comment was written

passthrough
    :ref:`Not displayed, only send as hidden field to DataHandler
    <columns-passthrough>`.

radio
    :ref:`One or multiple radio buttons <columns-radio>`.

    ..  figure:: /Images/Conference/RadioLevel.png
        :alt: The level of a talk
        :class: with-shadow

        The level of a talk

select
    :ref:`Select one or more items from a list <columns-select>`.

    ..  figure:: /Images/Conference/CtrlSeliconField.png
        :alt: The location of a conference, with the images of the locations
        :class: with-shadow

        The location of a conference, with the images of the locations

    ..  figure:: /Images/Conference/SelectMultipleSideBySide.png
        :alt: The equipment of a talk
        :class: with-shadow

        The equipment of a talk

    ..  figure:: /Images/Conference/SelectSingleBox.png
        :alt: The audience of a talk
        :class: with-shadow

        The audience of a talk

    ..  figure:: /Images/Conference/SelectTree.png
        :alt: The location a hall is part of
        :class: with-shadow

        The location a hall is part of

slug
    :ref:`Define parts of a URL path<columns-slug>`

text
    :ref:`A multiline text field <columns-text>`. Used for RTE display,
    code editor and some more.

    ..  figure:: /Images/Conference/TextAbstract.png
        :alt: The abstract of a talk
        :class: with-shadow

        The abstract of a talk

    ..  figure:: /Images/Conference/TextRichtext.png
        :alt: A rich text field
        :class: with-shadow

        A rich text field

user
    :ref:`Special rendering and evaluation defined by an additional
    node in the form engine<columns-user>`

..  toctree::
    :maxdepth: 1
    :titlesonly:
    :glob:
    :hidden:

    Type/*/Index
    CommonProperties/Index
