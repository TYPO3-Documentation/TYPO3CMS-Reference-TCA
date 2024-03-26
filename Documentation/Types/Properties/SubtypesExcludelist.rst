..  include:: /Includes.rst.txt
..  _types-properties-subtypes-excludelist:

=====================
subtypes\_excludelist
=====================

..  confval:: subtypes_excludelist
    :name: types-subtypes-excludelist
    :Path: $GLOBALS['TCA'][$table]['types'][$type]
    :type: array

    See :ref:`property subtype_value_field <types-properties-subtype-value-field>`.


    ..  code-block:: plaintext
        :caption: Syntax

        "[field value]" => "[comma-separated list of fields (from the main types-config) which are removed]"

Examples
========

Remove fields for a certain subtype
-----------------------------------

Remove fields `recursive` and `pages` from the subtype `example_registration`:


..  code-block:: php
    :capition: EXT:my_extension/Configuration/TCA/Overrides/tt_content.php (Excerpt)

    $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']
        ['example_registration'] = 'recursive,pages';
