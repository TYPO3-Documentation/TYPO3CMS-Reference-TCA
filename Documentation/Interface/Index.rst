.. include:: /Includes.rst.txt
.. _interface:

===========================
Backend display (interface)
===========================

The `interface` section contains configuration for display and listing in
various parts of the backend. It is optional to use.

..  contents:: Table of Contents
    :depth: 1

..  _interface-examples:

Examples: Limit items in record list
====================================

Limit items in backend list to 30 in overview, 50 in single table view:

..  literalinclude:: _CodeSnippets/_interface.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/tx_myextension_mytable.php

..  _interface-properties:
..  _interface-properties-maxdblistitems:

Properties of TCA section `interface`
=====================================

..  confval-menu::
    :name: interface
    :display: table
    :type:
    :Default:

    ..  confval:: maxDBListItems
        :Path: $GLOBALS['TCA'][$table]['interface']
        :type: integer
        :Default: 20

        Maximum number of items shown in the List module.

    ..  _interface-properties-maxsingledblistitems:

    ..  confval:: maxSingleDBListItems
        :Path: $GLOBALS['TCA'][$table]['interface']
        :type: integer
        :Default: 100

        Maximum number of items shown in the List module, if this table is listed
        in extended mode (listing only a single table).
