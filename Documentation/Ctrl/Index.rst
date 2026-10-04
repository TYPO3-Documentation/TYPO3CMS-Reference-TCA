..  include:: /Includes.rst.txt
..  _ctrl:

=======================
Table properties (ctrl)
=======================

The `ctrl` section contains properties for a database table in general.

These properties are basically divided into two main categories:

-   Properties which affect how a table is *displayed* and handled in
    the backend. This includes which icon is shown and which name is given for a record. It defines which
    column contains the title value, which column contains the type value etc.

-   Properties which determine how entries in the backend interface are processed by the system
    (TCE). This includes the publishing control, the "deleted" flag, whether a table
    can only be edited by admin-users, whether a table may only exist in the tree root etc.

..  contents::

..  toctree::
    :titlesonly:
    :glob:

    *

..  _tca-example-ctrl-common:

Example: Common table control configuration
===========================================

For advanced examples see :ref:`ctrl examples <ctrl-examples>`.

..  figure:: /Images/Conference/CtrlRecordList.png
    :alt: The conferences in the Records module, with a German translation
    :class: with-shadow

    The conferences in the Records module, with a German translation

The `ctrl` section of the conference table:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/tx_myextension_conference.php
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_conference.php
    :visible-lines: 4-29

..  _ctrl-reference:

Properties of the TCA ctrl section
==================================

..  confval-menu::
    :name: ctrl
    :display: table
    :type:
    :Scope:

    ..  include:: _Properties/_*.rst.txt
        :show-buttons:
