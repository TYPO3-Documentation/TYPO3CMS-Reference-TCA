..  include:: /Includes.rst.txt
..  _interface-properties:
..  _interface-properties-maxdblistitems:

==========
Properties
==========

maxDBListItems
==============

..  confval:: maxDBListItems
    :Path: $GLOBALS['TCA'][$table]['interface']
    :type: integer
    :Default: 20

    Max number of items shown in the List module.

..  _interface-properties-maxsingledblistitems:

maxSingleDBListItems
====================

..  confval:: maxSingleDBListItems
    :Path: $GLOBALS['TCA'][$table]['interface']
    :type: integer
    :Default: 100

    Maximum number of items shown in the List module, if this table is listed
    in extended mode (listing only a single table).
