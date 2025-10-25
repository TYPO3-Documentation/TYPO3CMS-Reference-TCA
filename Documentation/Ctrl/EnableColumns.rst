:navigation-title: Enabling columns

..  include:: /Includes.rst.txt
..  _ctrl-enablecolumns:

=======================================================
How to use `enablecolumns` in the `ctrl` section of TCA
=======================================================

All enable column definitions (hidden, starttime, endtime, fe_groups) are
automatically created if they are registered in the `ctrl` section in the main
TCA (not in the overrides) of a table.

:ref:`palettes` as known from Core TCA definitions have to be defined in the
TCA of a custom table however. If the fields should be editable by backend users,
the also have to be added to the :ref:`types` definitions.

..  _ctrl-reference-enablecolumns-examples:

Examples of column enable configurations
========================================

..  literalinclude:: _CodeSnippets/_Enablecolumns.php
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_domain_model_something.php

..  _ctrl-reference-enablecolumns-examples-all:

Define all enablecolumn fields
==============================

..  _ctrl-reference-enablecolumns-examples-hidden:

Make table hideable
===================

..  literalinclude:: _CodeSnippets/_Hidden.php
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_domain_model_something.php

..  _ctrl-reference-enablecolumns-examples-common:

Common enable fields
====================

.. include:: /Images/Rst/CtrlEnableFields.rst.txt

.. include:: /CodeSnippets/TxStyleguideCtrlCommon.rst.txt

.. _enablefields_usage:

Enablecolumns / enablefields usage
==================================

Most ways of retrieving records in the frontend automatically respect the
:php:`ctrl->enablecolumns` settings:

..  _enablefields_usage-typoscript:

Enablecolumns in TypoScript
---------------------------

Records retrieved in TypoScript via the objects
:ref:`RECORDS <t3tsref:cobj-records>`, :ref:`CONTENT <t3tsref:cobj-content>`
automatically respect the settings in section
:ref:`ctrl->enablecolumns <ctrl-reference-enablecolumns>`.

..  _enablefields_usage-extbase:

Enablecolumns / enablefields in Extbase
----------------------------------------

In Extbase repositories the records are hidden in the frontend by default,
however this behaviour can be disabled by setting
:php:`$querySettings->setIgnoreEnableFields(true)` in the
:ref:`repository <t3coreapi:extbase-repository>`.

..  _enablefields_usage-queries:

Enablecolumns in queries
-------------------------

Using the QueryBuilder
:ref:`enable columns restrictions are automatically applied <t3coreapi:database-select>`.

The same is true when
:ref:`select() is called on the connection <t3coreapi:database-connection-select>`.

See the :ref:`t3coreapi:database-restriction-builder` for details.
