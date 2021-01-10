.. include:: /Includes.rst.txt
.. _columns-text-renderType-t3editor:

========
t3editor
========

This page describes the :ref:`text <columns-text>` type with the renderType='t3editor'.

.. code-block:: php

   // ...
   'type' => 'text',
   'renderType' => 't3editor',
   // ...

The :code:`renderType = 't3editor'` triggers a code highlighter if extension `t3editor` is loaded, otherwise
falls back to "default" renderType.

System extension "t3editor" provides an enhanced textarea for TypoScript input, with not only syntax highlighting but
also auto-complete suggestions. Beyond that the "t3editor" extension makes it possible to add syntax highlighting
to textarea fields, for several languages.

.. toctree::

   Examples
   Properties
