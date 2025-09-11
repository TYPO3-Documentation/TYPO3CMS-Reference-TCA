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

..  contents:: Table of contents:
    :local:
    :depth: 1

..  _columns-number-properties:

Properties of the TCA column type `number`
=========================================

..  confval-menu::
    :name: number
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_*.rst.txt
        :show-buttons:
