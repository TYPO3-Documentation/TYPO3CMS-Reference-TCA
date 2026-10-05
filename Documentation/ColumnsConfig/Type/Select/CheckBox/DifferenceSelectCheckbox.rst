..  include:: /Includes.rst.txt

..  _selectcheckbox-check-compared:

=============================================
selectCheckBox and type check fields compared
=============================================

There is a subtle difference between select fields with the
**render type selectCheckBox** and fields of the **type check**:


..  _select-check-box-check-compared-select-values-checkbox:

Select values from a checkbox list
==================================

..  figure:: /Images/Conference/SelectCheckBox.png
    :alt: The topics of a speaker
    :class: with-shadow

    The topics of a speaker

The select checkbox stores the values as comma separated values.

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/332-tx_myextension_speaker-topics.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/332-tx_myextension_speaker-topics.php
    :emphasize-lines: 13

The field in the database is of type text or varchar.

..  code-block:: sql

    CREATE TABLE tx_myextension_speaker (
      topics text
    );


..  _select-check-box-check-compared-select-values-checkbox-2:

Select values from a checkbox list
==================================

..  figure:: /Images/Conference/CheckColumns.png
    :alt: The amenities of a conference
    :class: with-shadow

    The amenities of a conference

On the contrary the type :ref:`check <columns-check>` saves multiple values
as bits. Therefore if the first value is chosen it stores `1` (binary `00000001`),
if only the second is chosen it stores `2` (binary `00000010`) and if both are
chosen `3` (binary `00000011`).

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/136-tx_myextension_conference-amenities.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/136-tx_myextension_conference-amenities.php
    :emphasize-lines: 12

The field in the database is of type int.

..  code-block:: sql

    CREATE TABLE tx_myextension_conference (
      amenities int(11) DEFAULT '0' NOT NULL
    );
