..  include:: /Includes.rst.txt

..  _columns-slug:

=================
Slugs / URL parts
=================

..  versionadded:: 12.0
    When using the `slug` type, TYPO3 takes care of
    :ref:`generating the according database field <t3coreapi:auto-generated-db-structure>`.
    A developer does not need to define this field in an extension's
    :file:`ext_tables.sql` file.

The main purpose of this type is to define parts of a URL path to generate and
resolve URLs.

..  include:: /Images/Rst/Slug2.rst.txt

..  toctree::
    :titlesonly:

    Introduction
    Examples
    Properties/Index
