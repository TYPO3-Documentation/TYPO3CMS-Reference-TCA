..  include:: /Includes.rst.txt
..  _columns:

===========================
Field definitions (columns)
===========================

The ['columns'] section contains configuration for each table  *field* (also called "column") which can
be edited or shown in the backend. This is typically the biggest part of a TCA definition.

The configuration includes both properties for the display in the backend as well as the processing of the
submitted data.

Each field can be configured as a certain "type" (**required!**), for instance a checkbox, an input field, or a
database relation selector box. Each type allows a set of additional "renderType"s (**sometimes required!**). Each "type" and "renderType" combination comes with a set of additional properties.

..  contents:: Content on this page

..  toctree::
    :caption: Subpages
    :titlesonly:
    :glob:

    *

..  _columns-example-basic:

Example: A basic input field
============================

The basic structure of a field definition in TCA looks like this:

..  include:: /Images/Rst/Input1.rst.txt

..  include:: /CodeSnippets/Input1.rst.txt

You can find this example in the :ref:`extension styleguide <styleguide>`.

Properties on the level parallel to :confval:`label <t3tca:columns-label>`
are valid for all "type" and "renderType" combinations.
They are listed below. The list of properties within the "config" section depend on the specific "type" and "renderType"
combination and are explained in detail in the :ref:`['columns']['config'] <columns-types>` section.

..  _columns-properties:

Properties of `columns` section of TCA
======================================

..  confval-menu::
    :name: columns
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_*.rst.txt
        :show-buttons:
