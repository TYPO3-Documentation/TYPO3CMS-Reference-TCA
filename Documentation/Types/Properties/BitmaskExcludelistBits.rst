:orphan:

..  include:: /Includes.rst.txt
..  _types-properties-bitmask-excludelist-bits:

==========================
bitmask\_excludelist\_bits
==========================

..  versionchanged:: 13.0
    This setting has been removed, it is not considered anymore when rendering
    records in the backend record editing interface.

    In case, extensions still use this setting, they should switch to casual
    :php:`$GLOBALS['TCA']['someTable']['ctrl']['type']` fields instead, which
    can be powered by columns based on string values.
