.. include:: /Includes.rst.txt
.. _columns-text-renderType-t3editor:

========
t3editor
========

This page describes the :ref:`text <columns-text>` type with the renderType='t3editor'.

The :php:`renderType='t3editor'` triggers a code highlighter.

System extension "t3editor" provides an enhanced textarea for TypoScript input, with not only syntax highlighting but
also auto-complete suggestions. Beyond that the "t3editor" extension makes it possible to add syntax highlighting
to textarea fields, for several languages.

..  contents:: Table of contents

..  _tca_example_t3editor_1:

Example: Code highlighting with code editor
===========================================

..  figure:: /Images/ManualScreenshots/Codeeditor.png
    :alt: Code editor with highlighting HTML
    :class: with-shadow

    Code editor with highlighting HTML

..  literalinclude:: _Snippets/_Format.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/tx_myextension_domain_model_mytable.php

..  _columns-text-renderType-codeEditor-properties:

Properties of the TCA column type `text`, render type `t3editor`
================================================================

..  confval-menu::
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_AllowLanguageSynchronization.rst.txt
        :show-buttons:

    ..  include:: _Properties/_FieldControl.rst.txt
        :show-buttons:

    ..  include:: _Properties/_FieldInformation.rst.txt
        :show-buttons:

    ..  include:: _Properties/_FieldWizard.rst.txt
        :show-buttons:

    ..  include:: _Properties/_ReadOnly.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Search.rst.txt
        :show-buttons:

    ..  include:: _Properties/_Softref.rst.txt
        :show-buttons:
