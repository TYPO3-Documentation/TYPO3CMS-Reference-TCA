..  include:: /Includes.rst.txt

..  _palettes:

==========================
Grouping fields (palettes)
==========================

If editing records in the backend, all fields are usually displayed after each
other in single rows. Palettes provide a way to display multiple fields next
to each other if the browser window size allows this. They can be used to
group multiple related fields in one combined section.

Each palette has a name and can be referenced by name from within the
:ref:`['types'] section <types>`.

To modify existing palettes you can use the utility functions
:php:`\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette` and
:php:`ExtensionManagementUtility::addFieldsToAllPalettesOfField`.


..  toctree::

    Examples
    Properties/Index
