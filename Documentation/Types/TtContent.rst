:navigation-title: tt_content system fields

..  include:: /Includes.rst.txt

..  _types-content:

=================================================================
Automatically added system fields to content types (`tt_content`)
=================================================================

The following tabs / palettes are added automatically to the :confval:`types-showitem`
property of table `tt_content`:

*   The :guilabel:`General` tab with the `general` palette at the very beginning
*   The :guilabel:`Language` tab with the `language` palette after custom fields
*   The :guilabel:`Access` tab with the `hidden` and `access` palettes
*   The :guilabel:`Notes` tab with the `rowDescription` field

..  figure:: /Images/Conference/TypesContentExtended.png
    :alt: The edit form of a conference teaser with its tabs
    :class: with-shadow

    The tabs General, Language, Access, and Notes are added automatically.

See :ref:`an extended content element with custom fields <types-content-examples-extended>` for an example.

..  note::

    The fields are added to the :confval:`types-showitem` through their corresponding
    :ref:`palettes <palettes>`. In case such palette has been changed
    by extensions, the required system fields are added individually to corresponding tabs.

In case one of those palettes has been changed to no longer
include the corresponding system fields, those fields are added individually
depending on their definition in the :ref:`ctrl <ctrl>` section.

By default, all custom fields - the ones still defined in :confval:`types-showitem` - are
added after the `general` palette and are therefore added to the
:guilabel:`General` tab, unless a custom tab (for example :guilabel:`Plugin`,
or :guilabel:`Categories`) is defined in between. It's also possible to start
with a custom tab by defining a `--div--` as the first item in the
:confval:`types-showitem`. In this case, the :guilabel:`General` tab will be omitted.

All those system fields, which are added based on the `ctrl` section are
also automatically removed from any custom palette and from the customized
type's :confval:`types-showitem` definition.

If the content element defines the :guilabel:`Extended` tab, it will be
inserted at the end, including all fields added to the type via API methods,
without specifying a position, via
:php:`\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTcaTypes()`. See
:ref:`an extended content element with custom fields <types-content-examples-extended>` for an example.

..  _types-content-examples:

Examples for the `showitems` TCA section in content elements
============================================================

..  _types-content-examples-basic:

Basic custom content element with header and bodytext
-----------------------------------------------------

The content element "Call for papers" has a header and a text:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/610-tt_content-call_for_papers.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/610-tt_content-call_for_papers.php
    :emphasize-lines: 9-17

The following tabs are shown, the header palette and bodytext field are shown
on the tab :guilabel:`General`:

..  figure:: /Images/Conference/TypesContentBasic.png
    :alt: The edit form of a call for papers
    :class: with-shadow

    The edit form of a call for papers

..  _types-content-examples-extended:

Extended content element with custom fields
-------------------------------------------

The content element "Conference teaser" has fields of its own and a tab of
its own. :php:`ExtensionManagementUtility::addRecordType()` adds the tab
:guilabel:`Extended` at the end:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/615-tt_content-conference_teaser.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/615-tt_content-conference_teaser.php
    :emphasize-lines: 35-51, 54-58

The following tabs are shown:

..  figure:: /Images/Conference/TypesContentExtended.png
    :alt: The edit form of a conference teaser
    :class: with-shadow

    The edit form of a conference teaser

Additional fields that are subsequently added to the end of the table using
:php:`\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTcaTypes()`
will appear in the tab :guilabel:`Extended`.
