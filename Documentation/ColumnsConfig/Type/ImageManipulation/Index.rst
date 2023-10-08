.. include:: /Includes.rst.txt
.. _columns-imageManipulation:
.. _columns-imageManipulation-introduction:

==================
Image manipulation
==================

..  versionadded:: 13.0
    When using the `imageManipulation` type, TYPO3 takes care of
    :ref:`generating the according database field <t3coreapi:auto-generated-db-structure>`.
    A developer does not need to define this field in an extension's
    :file:`ext_tables.sql` file.

The type "imageManipulation" generates a button showing an image cropper in the backend for image files.
It is typically only used in FAL relations. The crop information is stored as an JSON array into the field.

.. toctree::
   :titlesonly:

   Examples
   Properties/Index
