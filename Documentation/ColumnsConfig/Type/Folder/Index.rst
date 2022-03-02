.. include:: /Includes.rst.txt
.. _columns-folder:

======
Folder
======

.. versionadded:: 12.0
   A new TCA type :php:`folder` has been introduced, which replaces the old
   combination of :php:`type => 'group'`.


The TCA type :php:`folder` creates a field where folders can be attached to
the record.


Example usage:

.. code-block:: php

    'columns' => [
        'aColumn' => [
            'config' => [
                'type' => 'folder',
            ],
        ],
    ],


.. toctree::
   :titlesonly:

   Properties/Index

