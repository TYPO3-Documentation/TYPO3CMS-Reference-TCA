:navigation-title: Checkboxes
..  include:: /Includes.rst.txt

..  _columns-check:

=======================
TCA column type `check`
=======================

..  versionadded:: 13.0
    When using the `check` type, TYPO3 takes care of
    :ref:`generating the according database field <t3coreapi:auto-generated-db-structure>`.
    A developer does not need to define this field in an extension's
    :file:`ext_tables.sql` file.

The TCA type :php:`check` can be used to render checkboxes.

The :ref:`according database field <t3coreapi:auto-generated-db-structure>`
is generated automatically.

..  contents:: Table of contents:
    :local:
    :depth: 1

..  toctree::
    :titlesonly:

    Default
    Toggle
    LabeledToggle
    Examples

..  _columns-check-introduction:

Introduction
============

There can be between 1 and 31 checkboxes. The corresponding database field must be of type integer.
Each checkbox corresponds to a single bit of the integer value, even if there is only one checkbox.

..  tip::
    This means that you should check the bits of values from single-checkbox
    fields and not just whether it is true or false.

There is a subtle difference between fields of the type `check` and select
fields with the render type
:ref:`selectCheckBox <columns-select-rendertype-selectCheckBox>`. For the
details please see: :ref:`selectCheckBox-check-compared`.


..  include:: /Images/Rst/Checkbox2.rst.txt
..  include:: /Images/Rst/Checkbox16.rst.txt
..  include:: /Images/Rst/Checkbox19.rst.txt
..  include:: /Images/Rst/Checkbox17.rst.txt

..  warning::
    Resorting the 'items' of a type='check' config results in single items moving to different bit positions.
    It might be required to migrate existing field data if doing so.

The following renderTypes are available:

*   :ref:`default <columns-check-default>`: One or more checkboxes are displayed.
*   :ref:`checkboxToggle <columns-check-checkboxToggle>`: Instead of checkboxes,
    a toggle item is displayed.
*   :ref:`checkboxLabeledToggle <columns-check-checkboxLabeledToggle>`: A toggle
    switch where both states can be labelled (ON/OFF, Visible / Hidden or alike).
    Its state can be inverted via :code:`invertStateDisplay`

..  _columns-check-properties:

Properties of the TCA column type `check`
=========================================

..  confval-menu::
    :name: check
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_*.rst.txt
        :show-buttons:
