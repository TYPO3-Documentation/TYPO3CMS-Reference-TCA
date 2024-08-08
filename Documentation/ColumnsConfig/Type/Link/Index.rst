..  include:: /Includes.rst.txt

..  _columns-input-renderType-inputLink:
..  _columns-link:

====
Link
====

..  versionadded:: 13.0
    When using the :php:`link` type, TYPO3 takes care of
    :ref:`generating the according database field <t3coreapi:auto-generated-db-structure>`.
    A developer does not need to define this field in an extension's
    :file:`ext_tables.sql` file.

The TCA type :php:`link` should be used to input values representing typolinks.

The :ref:`according database field <t3coreapi:auto-generated-db-structure>`
is generated automatically.

..  contents::

..  _columns-link-example:

Example: A basic link field
===========================

..  literalinclude:: _Snippets/_basic.php

..  _columns-link-properties:

Properties of the TCA column type `link`
========================================

..  confval-menu::
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_AllowedTypes.rst.txt
        :show-buttons:

    ..  include:: _Properties/_AllowLanguageSynchronization.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Appearance.rst.txt
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

    ..  include:: _Properties/_Mode.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Nullable.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Placeholder.rst.txt
        :show-buttons:

    ..  include:: _Properties/_ReadOnly.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Required.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Search.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Size.rst.txt
        :show-buttons:

    ..  include:: _Properties/_ValuePicker.rst.txt
        :show-buttons:


..  note::

    The softref definition :php:`softref=typolink` is automatically applied
    to all TCA type :php:`link` columns.

..  _columns-link-create-url:

Create an URL
=============

To create a URL from such a link field in a Fluid template, use the
:html:`<f:link.typolink>` or :html:`<f:uri.typolink>` view helper.

In PHP code, use :php:`LinkFactory::create()` or :php:`LinkFactory::createUri()`:

..  literalinclude:: _Snippets/_SomeService.php
    :caption: EXT:my_extension/Classes/Service/MyService.php
