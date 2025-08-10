..  include:: /Includes.rst.txt
..  _columns-flex-ds-pointer:

===============
Using FlexForms
===============

Basically, the configuration for a FlexForm field is all about pointing
to the data structure which contains form rendering information.

For general information about the backbone of a Data Structure, please
refer to the "<T3DataStructure>" chapter in the
:ref:`Core API manual <t3coreapi:t3ds>`.

..  _columns-flex-ds-plug:

Using FlexForms to configure plugins
====================================

FlexForms are commonly used in table `tt_content` to register plugins.

..  deprecated:: 14.0
    Using `ExtensionManagementUtility::addPiFlexFormValue()` has been deprecated,
    use the 7th parameter of `ExtensionUtility::registerPlugin()` instead.

..  versionadded:: 14.0

FlexForm definitions can be passed as 7th parameter to
`ExtensionUtility::registerPlugin()` while registering Extbase.

..  literalinclude:: _CodeSnippets/_plugin.php
    :caption: packages/my_extension/Configuration/TCA/Overrides/tt_content.php

..  _columns-flex-ds-one:

Configuring a table with a FlexForm
===================================

..  versionchanged:: 14.0
    See `Breaking: #107047 - Remove pointer field functionality of TCA flex <https://docs.typo3.org/permalink/changelog:breaking-107047-1751982363>`_
    for migration.

Use configuration option `ds  <https://docs.typo3.org/permalink/t3tca:confval-flex-ds>`_
to either pass a file reference to the XML file containing the FlexForm or
a string containing the FlexForms XML:

..  include:: /CodeSnippets/FlexFile1.rst.txt
    :caption: packages/my_extension/Configuration/TCA/tx_my_table.php

Straight and simple: Whenever a record is handled that has a column field
definition with this TCA, the data structure defined in
:file:`FILE:EXT:styleguide/Configuration/FlexForms/Simple.xml`
is parsed and the flex form defined in there is displayed.

..  _columns-flex-ds-by-type:

Individual FlexForms by type
============================

..  versionchanged:: 14.0
    See `Breaking: #107047 - Remove pointer field functionality of TCA flex <https://docs.typo3.org/permalink/changelog:breaking-107047-1751982363>`_
    for migration.

If the table has the `$GLOBALS['TCA'][$table]['ctrl']['type']  <https://docs.typo3.org/permalink/t3tca:confval-ctrl-type>`_
set, you can use `columnsOverrides  <https://docs.typo3.org/permalink/t3tca:confval-types-columnsoverrides>`_
to set different FlexForms per type.

..  literalinclude:: _CodeSnippets/_column_overrides.php
    :caption: packages/my_extension/Configuration/TCA/tx_my_table.php

In the above example type 0 and type 3 display the default FlexForm defined in
file `'FILE:EXT:news/Configuration/FlexFormDefault.xml'`, while type 1 and 2
each display their individual FlexForms.
