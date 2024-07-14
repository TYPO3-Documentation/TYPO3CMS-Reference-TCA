..  include:: /Includes.rst.txt
..  _ctrl-reference-enablecolumns:

=============
enablecolumns
=============

..  confval:: enablecolumns
    :name: ctrl-enablecolumns
    :Path: $GLOBALS['TCA'][$table]['ctrl']
    :type: array
    :Scope: Proc. / Display

    ..  versionchanged:: 13.3
        The column definitions for these settings are :ref:`auto-created <ctrl-auto-created-columns>`.

    Specifies which *publishing control features* are automatically implemented for the table.

    This includes that records can be "disabled" or "hidden", have a starting and/or ending time and be access
    controlled so only a certain front end user group can access them. This property is used by the
    :ref:`RestrictionBuilder <t3coreapi:database-restriction-builder>` to create SQL fragments.

    These are the keys in the array you can use. Each of the values must be a field name in the table which
    should be used for the feature:

    `disabled`
        Defines which field serves as hidden/disabled flag.

    `starttime`
        Defines which field contains the starting time.

    `endtime`
        Defines which field contains the ending time.

    `fe_group`
        Defines which field is used for access control via a selection of FE user groups.

    .. note::
        In general these fields do *not* affect the access or display in the backend! They are primarily
        related to the frontend. However the icon of records having these features enabled will
        normally change as these examples show:

    ..  include:: /Images/Rst/CtrlEnableFields.rst.txt

    ..  include:: _AutoCreateWarning.rst.txt

    See also the :ref:`delete <ctrl-reference-delete>` and
    :ref:`ctrl-reference-editlock` features which are related,
    but are active for both frontend and backend.

..  _ctrl-reference-enablecolumns-migration:

Migration: Remove enable column definitions (hidden, starttime, endtime, fe_groups) from TCA
============================================================================================

On dropping TYPO3 v12.4 support extensions authors can drop the column
definitions of the enable fields. They need to keep the :ref:`palettes` and
:ref:`type` definitions, however:

..  literalinclude:: _CodeSnippets/_Enablecolumns.diff
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_domain_model_something.php

..  _ctrl-reference-enablecolumns-examples:

Examples of column enable configurations
========================================

..  _ctrl-reference-enablecolumns-examples-all:

..  literalinclude:: _CodeSnippets/_Enablecolumns.php
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_domain_model_something.php

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
