:navigation-title: tt_content system fields

..  include:: /Includes.rst.txt

..  _types-content:

=================================================================
Automatically added system fields to content types (`tt_content`)
=================================================================

..  versionchanged:: 13.3
    Creating content elements has been simplified by removing the need to
    define the system fields for each element again and again. This shrinks
    down a content element's :confval:`t3tca/13.4:types-showitem` to just the element
    specific fields. See also :ref:`Migration <t3tca/13.4:types-content-migration>`.
    Added with :ref:`changelog:feature-104814-1725444916`.

The following tabs / palettes are added automatically to the :confval:`types-showitem`
property of table `tt_content`:

*   The :guilabel:`General` tab with the `general` palette at the very beginning
*   The :guilabel:`Language` tab with the `language` palette after custom fields
*   The :guilabel:`Access` tab with the `hidden` and `access` palettes
*   The :guilabel:`Notes` tab with the `rowDescription` field

..  figure:: /Images/ManualScreenshots/tt_content_automatic_tabs.png
    :alt: The edit form of a slider with its tabs. The above mentioned ones are underlined.

    The underlined tabs are added automatically.

See :ref:`types-content-examples-extended` for an example.

..  note::

    The fields are added to the :confval:`types-showitem` through their corresponding
    :ref:`palettes <palettes>`. In case such palette has been changed
    by extensions, the required system fields are added individually to corresponding tabs.

In case one of those palettes has been changed to no longer
include the corresponding system fields, those fields are added individually
depending on their definition in the :ref:`ctrl` section.

By default, all custom fields - the ones still defined in :confval:`types-showitem` - are
added after the `general` palette and are therefore added to the
:guilabel:`General` tab, unless a custom tab (for example :guilabel:`Plugin`,
or :guilabel:`Categories`) is defined in between. It's also possible to start
with a custom tab by defining a `--div--` as the first item in the
:confval:`types-showitem`. In this case, the :guilabel:`General` tab will be omitted.

All those system fields, which are added based on the :php:`ctrl` section are
also automatically removed from any custom palette and from the customized
type's :confval:`types-showitem` definition.

If the content element defines the :guilabel:`Extended` tab, it will be
inserted at the end, including all fields added to the type via API methods,
without specifying a position, via
:php:`\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTcaTypes()`. See
:ref:`types-content-examples-extended` for an example.

..  _types-content-examples:

Examples for the `showitems` TCA section in content elements
============================================================

..  _types-content-examples-basic:

Basic custom content element with header and bodytext
-----------------------------------------------------

..  literalinclude:: _CodeSnippets/_basic_content_element.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/tt_content.php

The following tabs are shown, the header palette and bodytext field are shown
in palette general:

..  figure:: /Images/ManualScreenshots/tt_content_basic.png
    :alt: Screenshot of the content element form created by the code

    Screenshot of the content element form created by the code

..  _types-content-examples-extended:

Extended content element with custom fields
-------------------------------------------

..  literalinclude:: _CodeSnippets/_extended_content_element.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/tt_content.php

The following tabs are shown:

..  figure:: /Images/ManualScreenshots/tt_content_extended.png
    :alt: Screenshot of the content element form created by the code

    Screenshot of the content element form created by the code

Additional fields that are subsequently added to the end of the table using
:php:`\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTcaTypes()`
will appear in the tab :guilabel:`Extended`.
