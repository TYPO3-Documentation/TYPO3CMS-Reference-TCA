..  include:: /Includes.rst.txt

..  _columns-uuid:

====
Uuid
====

..  versionadded:: 12.3

The main purpose of the TCA type :php:`uuid` is to simplify the TCA
configuration when working with fields containing a `UUID`_.

..  _UUID: https://en.wikipedia.org/wiki/Universally_unique_identifier

..  note::
    When this type of TCA is used, the corresponding database columns are
    automatically added.

Example
=======

An example configuration looks like the following:

..  code-block:: php

    'my_identifier' => [
        'label' => 'My record identifier',
        'config' => [
            'type' => 'uuid',
            'version' => 6,
        ],
    ],

.. toctree::
   :titlesonly:

   Properties/Index
