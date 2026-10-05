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

The TCA type `check` can be used to render checkboxes.

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
:ref:`selectCheckBox <columns-select-rendertype-selectcheckbox>`. For the
details please see: :ref:`selectCheckBox and type check compared <selectcheckbox-check-compared>`.


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

..  warning::
    Resorting the 'items' of a type='check' config results in single items moving to different bit positions.
    It might be required to migrate existing field data if doing so.

The following renderTypes are available:

*   :ref:`default <columns-check-default>`: One or more checkboxes are displayed.
*   :ref:`checkboxToggle <columns-check-checkboxtoggle>`: Instead of checkboxes,
    a toggle item is displayed.
*   :ref:`checkboxLabeledToggle <columns-check-checkboxlabeledtoggle>`: A toggle
    switch where both states can be labelled (ON/OFF, Visible / Hidden or alike).
    Its state can be inverted via `invertStateDisplay`

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
