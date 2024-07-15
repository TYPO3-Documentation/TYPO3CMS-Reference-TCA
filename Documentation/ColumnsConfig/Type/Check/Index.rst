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


Introduction
============

This type creates checkbox(es).

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

..  _columns-check-introduction:

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
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_AllowLanguageSynchronization.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Cols.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Default.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Eval.rst.txt
        :show-buttons:

    ..  include:: _Properties/_FieldInformation.rst.txt
        :show-buttons:

    ..  include:: _Properties/_FieldWizard.rst.txt
        :show-buttons:

    ..  include:: _Properties/_InvertStateDisplay.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Items.rst.txt
        :show-buttons:

    ..  include:: _Properties/_ItemsProcFunc.rst.txt
        :show-buttons:

    ..  include:: _Properties/_ReadOnly.rst.txt
        :show-buttons:

    ..  include:: _Properties/_RenderType.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Validation.rst.txt
        :show-buttons:

..  toctree::
    :hidden:

    Default
    Toggle
    LabeledToggle
    Examples
