..  include:: /Includes.rst.txt

..  _fields_common:

=============
Common fields
=============

Mandatory fields
================

If the table has a TCA definition, TYPO3 will automatically create the following fields:

:sql:`uid`
    An auto-incrementing unique identifier. This field is used as table key
    and as a reference in relationships between records.

:sql:`pid`
    The `uid` property of the parent page. The record is situated on this page. This value is 0 if the record is not connected to any page.

There is no separate TCA definition of these fields in the TCA configuration. It is
not possible to use other names for these fields.

Fields used by convention
=========================

..  warning::
    It is possible to change the names of the following fields, however this is
    strongly discouraged as it breaks convention and may lead to compatibility
    issues with third party extensions.

    All fields mentioned below get added to the database automatically. It is
    not recommended to define them in the :file:`ext_tables.sql`. Doing so
    with incompatible SQL settings can lead to problems later on.


..  _field_deleted:

Soft delete
===========

:sql:`deleted`
    This field is used to enable soft delete in records. In can be configured
    by setting :ref:`ctrl->delete <ctrl-reference-delete>`:

    ..  literalinclude:: /Ctrl/Properties/_CodeSnippets/_Delete.php
        :caption: EXT:my_extension/Configuration/TCA/tx_myextension_domain_model_something.php


    ..  warning::
        If no :sql:`deleted` field is configured, records will be hard deleted.
        The DataHandler in the backend and Extbase will automatically execute
        :sql:`DELETE` statements.

    The :sql:`deleted` field is never directly visible in backend forms. It is
    handled separately by the DataHandler. Therefore it
    needs no definition in the :php:`columns` section.

Enablecolumns
=============

..  _field_hidden:

:sql:`hidden`
    This field is used to enable soft hiding of records. In can be configured
    by setting :ref:`ctrl->enablecolumns->disabled <ctrl-reference-enablecolumns>`:

    ..  literalinclude:: /Ctrl/Properties/_CodeSnippets/_Hidden.php
        :caption: EXT:my_extension/Configuration/TCA/tx_myextension_domain_model_something.php

..  _field_starttime:
..  _field_endtime:

:sql:`starttime` and :sql:`endtime`
    This field is used to enable records by a starttime and or disable them with
    an endtime. In can be configured
    by :ref:`ctrl->enablecolumns->starttime or endtime <ctrl-reference-enablecolumns>`:

    ..  literalinclude:: /Ctrl/Properties/_CodeSnippets/_StarttimeEndtime.php
        :caption: EXT:my_extension/Configuration/TCA/tx_myextension_domain_model_something.php

..  _field_fe_group:

:sql:`fe_group`
    This field is used to enable soft delete of records. In can be configured
    by :ref:`ctrl->enablecolumns->fe_group <ctrl-reference-enablecolumns>`:

    ..  literalinclude:: /Ctrl/Properties/_CodeSnippets/_FeGroup.php
        :caption: EXT:my_extension/Configuration/TCA/tx_myextension_domain_model_something.php

..  warning::
    These enable fields are only respected in the frontend if you
    use proper queries or Extbase repository settings in your extensions code.
    See :ref:`enablefields_usage` for more information.


..  _field_sorting:

Manual sorting in the backend
=============================

:sql:`sorting`
    This field is used to manually sort records in the backend. In can be configured
    by :ref:`ctrl->sortby <ctrl-reference-sortby>`:

    ..  literalinclude:: /Ctrl/Properties/_CodeSnippets/_Sorting.php
        :caption: EXT:my_extension/Configuration/TCA/tx_myextension_domain_model_something.php

..  attention::
    The sortby field contains an integer and is managed by the DataHandler. It
    therefore should have no definition in the columns section. Any value in this
    field can be changed at any time by the DataHandler.

    Use :ref:`default_sortby <ctrl-reference-default-sortby>` if you want to
    sort by an existing field of the domain instead.

..  _fields_for_datahandler:

Fields managed by the DataHandler
=================================

The following fields are automatically set when a record is written by the
:ref:`DataHandler <t3coreapi:datahandler-basics>`. They should never be
displayed in backend forms or explicitly set, therefore they need no entry in
the `columns` section of the TCA.

..  literalinclude:: /Ctrl/Properties/_CodeSnippets/_DataHandlerFields.php
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_domain_model_something.php

..  _field_tstamp:

:sql:`tstamp`
    This field is automatically updated to the current timestamp
    each time the record is updated or saved in the DataHandler.

    It can be configured by setting :ref:`ctrl->tstamp <ctrl-reference-tstamp>`.

..  _field_crdate:

:sql:`crdate`
    This field is automatically set to the current timestamp
    if the record is created by the DataHandler.

    It can be configured by setting :ref:`ctrl->crdate <ctrl-reference-crdate>`.

..  _field_t3_origuid:

:sql:`t3_origuid`
    Field name, which contains the uid of the original record in case a
    record is created as a copy or new version of another record.

    It can be configured by setting :ref:`ctrl->origUid <ctrl-reference-origuid>`.
