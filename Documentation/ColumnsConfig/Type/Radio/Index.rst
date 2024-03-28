..  include:: /Includes.rst.txt
..  _columns-radio:

=============
Radio buttons
=============

..  versionadded:: 13.0
    When using the `radio` type, TYPO3 takes care of
    :ref:`generating the according database field <t3coreapi:auto-generated-db-structure>`.
    A developer does not need to define this field in an extension's
    :file:`ext_tables.sql` file.

This type creates a set of radio buttons. The value is typically stored as integer value, each radio
item has one assigned number, but it can be a string, too.

..  include:: /Images/Rst/Radio1.rst.txt

..  toctree::
    :titlesonly:

    Examples
    Properties/Index
