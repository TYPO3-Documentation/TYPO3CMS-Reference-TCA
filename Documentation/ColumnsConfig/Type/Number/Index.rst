..  include:: /Includes.rst.txt

..  _columns-number:

======
Number
======

..  versionadded:: 12.0
    The TCA type :php:`number` has been introduced. It replaces the
    :php:`eval=int` and :php:`eval=double2` options of TCA type :php:`input`.


The TCA type :php:`number` should be used to input values representing numbers.


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

..  _columns-number-migration:

Migration: from type=input to type=number
=========================================

..  _columns-number-migration-int:

Migration from eval='int'
-------------------------

The migration from :php:`eval='int'` to :php:`type=number`
is done like following:

..  literalinclude:: _Snippets/_migration_int.diff

..  _columns-number-migration-double:

Migration from eval='double2'
-----------------------------

The migration from :php:`eval=double2` to :php:`type=number`
is done like following:


..  literalinclude:: _Snippets/_migration_double.diff

An automatic TCA migration is performed on the fly, migrating all occurrences
to the new TCA type and triggering a PHP :php:`E_USER_DEPRECATED` error
where code adoption has to take place.
