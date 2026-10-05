..  include:: /Includes.rst.txt

..  _rich-text-editor:

======================
Rich text editor (RTE)
======================

The :abbr:`RTE (rich ext editor)` is by default supplied by the system extension
:composer:`typo3/cms-rte-ckeditor`. See also the according chapter in
:ref:`TYPO3 explained <t3coreapi:rte>`.

In TCA a :abbr:`RTE (rich ext editor)` is a normal `text` field with the
option :confval:`text-enableRichtext` enabled.

..  contents:: Table of contents:
    :local:
    :depth: 1

..  _rich-text-editor-examples:

Examples for Rich text editor fields in the TYPO3 Backend
=========================================================

..  _tca-example-rte-4:

RTE with minimal configuration
------------------------------

..  figure:: /Images/Conference/TextRichtextMinimal.png
    :alt: The biography of a speaker with the minimal configuration
    :class: with-shadow

    The biography of a speaker with the minimal configuration

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/330-tx_myextension_speaker-bio.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/330-tx_myextension_speaker-bio.php
    :emphasize-lines: 13

..  _tca-example-rte-5:

RTE with full configuration
---------------------------


..  code-block:: diff
    :caption: EXT:my_extension/Configuration/TCA/Overrides/130-tx_myextension_conference-description.php

           'enableRichtext' => true,
    +      'richtextConfiguration' => 'full',

..  _tca-example-rte-2-2:

RTE with default configuration
------------------------------

..  figure:: /Images/Conference/TextRichtext.png
    :alt: The description of a conference
    :class: with-shadow

    The description of a conference

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/130-tx_myextension_conference-description.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/130-tx_myextension_conference-description.php


..  _rich-text-editor-properties:

Properties of the TCA column type `text` with enabled rich text
===============================================================

Almost all :ref:`properties of field type text <columns-text-properties>`
are available.
