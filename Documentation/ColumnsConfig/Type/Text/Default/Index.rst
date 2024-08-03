..  include:: /Includes.rst.txt

..  _columns-text-renderType-default:

================
text (multiline)
================

This page describes the :ref:`text <columns-text>` type with no renderType (default).

`type='text'` without a given specific renderType either renders a simple
`<textarea>` or a :ref:`Rich Text field <rich-text-editor-examples>` if
:confval:`text-enableRichtext` is enabled in TCA and
:ref:`page TSconfig <t3tsconfig:pageTsRte>`.

..  contents:: Table of contents:

..  _columns-text-examples:

Examples for multiline text fields
==================================

..  _tca_example_text_4:

Multiline plain text area
-------------------------

..  include:: /Images/Rst/Text4.rst.txt

..  include:: /CodeSnippets/Text4.rst.txt

..  _tca_example_rte_1:

Rich text editor field
----------------------

..  include:: /Images/Rst/Rte1.rst.txt

..  include:: /CodeSnippets/Rte1.rst.txt

..  _columns-text-properties:
..  _columns-text-properties-default:

Properties of the TCA column type `text` with or without enabled rich text
==========================================================================

..  confval-menu::
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_AllowLanguageSynchronization.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Cols.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Default.rst.txt
        :show-buttons:

    ..  include:: _Properties/_EnableRichtext.rst.txt
        :show-buttons:

    ..  include:: _Properties/_EnableTabulator.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Eval.rst.txt
        :show-buttons:

    ..  include:: _Properties/_FieldControl.rst.txt
        :show-buttons:

    ..  include:: _Properties/_FieldInformation.rst.txt
        :show-buttons:

    ..  include:: _Properties/_FieldWizard.rst.txt
        :show-buttons:

    ..  include:: _Properties/_FixedFont.rst.txt
        :show-buttons:

    ..  include:: _Properties/_IsIn.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Max.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Min.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Nullable.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Placeholder.rst.txt
        :show-buttons:

    ..  include:: _Properties/_ReadOnly.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Required.rst.txt
        :show-buttons:

    ..  include:: _Properties/_RichtextConfiguration.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Rows.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Search.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Softref.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Wrap.rst.txt
        :show-buttons:
