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

..  _tca_example_rte_4:

RTE with minimal configuration
------------------------------

..  include:: /Images/Rst/Rte4.rst.txt

..  include:: /CodeSnippets/Rte4.rst.txt

..  _tca_example_rte_5:

RTE with full configuration
---------------------------

..  include:: /Images/Rst/Rte5.rst.txt

..  include:: /CodeSnippets/Rte5.rst.txt

..  _tca_example_rte_2-2:

RTE with default configuration
------------------------------

..  include:: /Images/Rst/Rte2.rst.txt

..  include:: /CodeSnippets/Rte2.rst.txt


..  _rich-text-editor-properties:

Properties of the TCA column type `text` with enabled rich text
===============================================================

Almost all :ref:`properties of field type text <columns-text-properties>`
are available.
