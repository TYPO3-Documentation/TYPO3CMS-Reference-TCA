..  include:: /Includes.rst.txt
..  _columns-flex-ds-pointer:

===============
Using FlexForms
===============

Basically the configuration of a FlexForm field is all about pointing
to a data structure which contains the form rendering information.

For general information about the backbone of a Data Structure, please
refer to the "<T3DataStructure>" chapter in the
:ref:`Core API manual <t3coreapi:t3ds>`.

..  _columns-flex-ds-plug:

Using FlexForms to configure plugins
====================================

FlexForms are commonly used in the `tt_content` table to register plugins.

..  deprecated:: 14.0
    Using `ExtensionManagementUtility::addPiFlexFormValue()` has been deprecated,
    use the 7th parameter of `ExtensionUtility::registerPlugin()` instead.

..  versionadded:: 14.0

FlexForm definitions can be passed as the 7th parameter to
`ExtensionUtility::registerPlugin()` when registering Extbase.

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/600-tt_content-conference_list.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/600-tt_content-conference_list.php
    :emphasize-lines: 24

..  _columns-flex-ds-one:

Configuring a table with a FlexForm
===================================

..  versionchanged:: 14.0
    :changelog: breaking-107047-1751982363

    The changelog entry describes the migration.

Use configuration option `ds  <https://docs.typo3.org/permalink/t3tca:confval-flex-ds>`_
to either pass a file reference to the XML file containing the FlexForm or
a string containing the FlexForm's XML. The live stream player of a
conference has its two settings as a string:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/122-tx_myextension_conference-livestream_player.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/122-tx_myextension_conference-livestream_player.php
    :emphasize-lines: 12-36

When a record with this field is edited, the backend parses the data
structure and shows the form that it defines.

..  _columns-flex-ds-by-type:

Individual FlexForms by type
============================

..  versionchanged:: 14.0
    :changelog: breaking-107047-1751982363

    The changelog entry describes the migration.

If the table has `$GLOBALS['TCA'][$table]['ctrl']['type']  <https://docs.typo3.org/permalink/t3tca:confval-ctrl-type>`_
set, you can use `columnsOverrides  <https://docs.typo3.org/permalink/t3tca:confval-types-columnsoverrides>`_
to set different FlexForms by type.

The room setup of a talk uses the FlexForm file :file:`RoomSetup.xml` for
all record types. A workshop overrides it with
:file:`WorkshopRoomSetup.xml`:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/296-tx_myextension_talk-room_setup.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/296-tx_myextension_talk-room_setup.php
    :emphasize-lines: 13,19

The talks of the types `talk` and `keynote` show the seating and the
lectern:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/FlexForms/RoomSetup.xml
    :caption: EXT:my_extension/Configuration/FlexForms/RoomSetup.xml

A workshop shows the size of the groups and the power outlets instead:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/FlexForms/WorkshopRoomSetup.xml
    :caption: EXT:my_extension/Configuration/FlexForms/WorkshopRoomSetup.xml
