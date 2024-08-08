..  include:: /Includes.rst.txt

..  _columns-number:

======
Number
======

..  versionadded:: 13.0
    When using the `number` type, TYPO3 takes care of
    :ref:`generating the according database field <t3coreapi:auto-generated-db-structure>`.
    A developer does not need to define this field in an extension's
    :file:`ext_tables.sql` file.

The TCA type :php:`number` should be used to input values representing numbers.

The :ref:`according database field <t3coreapi:auto-generated-db-structure>`
is generated automatically.

..  note::

    The :ref:`slider <columns-number-properties-slider>` option allows to define
    a visual slider element, next to the input field. The steps can be
    defined with the :ref:`slider[step] <columns-number-properties-slider>`
    option. The minimum and maximum value can be configured with the
    :ref:`range[lower] <columns-number-properties-range>` and
    :ref:`range[upper] <columns-number-properties-range>` options.

..  _columns-number-properties:

Properties of the TCA column type `number`
=========================================

..  confval-menu::
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_AllowLanguageSynchronization.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Autocomplete.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Default.rst.txt
        :show-buttons:

    ..  include:: _Properties/_FieldControl.rst.txt
        :show-buttons:

    ..  include:: _Properties/_FieldInformation.rst.txt
        :show-buttons:

    ..  include:: _Properties/_FieldWizard.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Format.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Mode.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Nullable.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Range.rst.txt
        :show-buttons:

    ..  include:: _Properties/_ReadOnly.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Required.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Size.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Slider.rst.txt
        :show-buttons:

    ..  include:: _Properties/_ValuePicker.rst.txt
        :show-buttons:
