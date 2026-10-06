..  include:: /Includes.rst.txt
..  _columns-group-examples:

========
Examples
========

..  _tca-example-group-db-10:

Relation to pages and content elements
======================================

A conference refers to pages and content elements with more information:

..  figure:: /Images/Conference/GroupRelatedContent.png
    :alt: The related pages and content of a conference
    :class: with-shadow

    The related pages and content of a conference

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/157-tx_myextension_conference-related_content.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/157-tx_myextension_conference-related_content.php
    :emphasize-lines: 12

..  _tca-example-group-db-1:

Relation to the speaker of a talk
=================================

A talk has one speaker. The field controls edit the speaker, add a new
speaker, or open the speakers in the :guilabel:`Content > Records` module:

..  figure:: /Images/Conference/GroupSpeaker.png
    :alt: The speaker of a talk with field controls
    :class: with-shadow

    The speaker of a talk with field controls

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/210-tx_myextension_talk-speaker.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/210-tx_myextension_talk-speaker.php
    :emphasize-lines: 12-14,19-29
