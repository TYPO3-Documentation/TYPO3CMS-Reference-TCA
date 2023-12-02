..  include:: /Includes.rst.txt
..  _columns-text-renderType-codeEditor:
..  _columns-text-renderType-t3editor:

==================================
codeEditor (previously "t3editor")
==================================

..  versionchanged:: 13.0
    In previous TYPO3 versions, the code editor was available via the system
    extension "t3editor". The functionality was moved into the system extension
    "backend". The render type :php:`t3editor` was renamed to :php:`codeEditor`.
    A TCA migration from the old value to the new one is in place.


This page describes the :ref:`text <columns-text>` type with the
:php:`renderType='codeEditor'`.

..  code-block:: php

    // ...
    'type' => 'text',
    'renderType' => 'codeEditor',
    // ...

The :php:`renderType='codeEditor'` triggers a code highlighter.

The code editor provides an enhanced textarea for
:ref:`TypoScript <t3tsref:start>` input, with not only syntax highlighting, but
also autocomplete suggestions. Beyond that the code editor makes it possible to
add syntax highlighting to textarea fields for several languages.

..  toctree::

    Examples
    Properties
