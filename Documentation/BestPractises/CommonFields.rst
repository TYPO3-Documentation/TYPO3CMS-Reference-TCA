..  include:: /Includes.rst.txt

..  _fields_common:

=============
Common fields
=============

..  _fields_mandatory:

Mandatory fields
================

If a table has a TCA definition, TYPO3 will automatically create the following fields:

:sql:`uid`
    An auto-incrementing unique identifier. This field is the table key
    and is used as a reference in relationships between records.

:sql:`pid`
    The `uid` field of the parent page. A record is situated on its parent page.
    If this value is 0 the record is not connected to a page.

These fields are not defined anywhere else in the TCA configuration. It is
not possible to use other names for these fields.

..  _fields_convention:

Fields used by convention
=========================

..  warning::
    It is possible to change the names of the following fields, but it is
    strongly discouraged. Doing so breaks convention and may lead to compatibility
    issues with third party extensions.

    All the fields mentioned below are added to the database automatically. You do
    not need to define these fields in :file:`ext_tables.sql` and doing so may lead to
    problems later on. You only need to configure the fields in the TCA php files.

..  _field_deleted:

Soft delete
===========

:sql:`deleted`
    This field enables soft delete in records. Configure it
    by setting :ref:`ctrl->delete <ctrl-reference-delete>`:

    ..  literalinclude:: /Ctrl/_CodeSnippets/_Delete.php
        :caption: EXT:my_extension/Configuration/TCA/tx_myextension_domain_model_something.php


    ..  warning::
        If you do not configure this field, records will be hard deleted.
        The backend DataHandler and Extbase will automatically execute
        (hard) :sql:`DELETE` statements.

    The :sql:`deleted` field is not visible in backend forms. It is
    handled separately by the DataHandler and therefore does not need to be
    defined in the :php:`columns` section.

Enablecolumns
=============

..  _field_hidden:

:sql:`hidden`
    This field enables soft hiding of records. Configure it
    by setting :ref:`ctrl->enablecolumns->disabled <ctrl-reference-enablecolumns>`:

    ..  literalinclude:: /Ctrl/_CodeSnippets/_Hidden.php
        :caption: EXT:my_extension/Configuration/TCA/tx_myextension_domain_model_something.php

..  _field_starttime:
..  _field_endtime:

:sql:`starttime` and :sql:`endtime`
    These fields can enable records at a starttime and disable them at
    an endtime. Configure them
    by setting :ref:`ctrl->enablecolumns->starttime or endtime <ctrl-reference-enablecolumns>`:

    ..  literalinclude:: /Ctrl/_CodeSnippets/_StarttimeEndtime.php
        :caption: EXT:my_extension/Configuration/TCA/tx_myextension_domain_model_something.php

..  _field_fe_group:

:sql:`fe_group`
    This field defines which field is used for access control. Configure it
    by setting :ref:`ctrl->enablecolumns->fe_group <ctrl-reference-enablecolumns>`:

    ..  literalinclude:: /Ctrl/_CodeSnippets/_FeGroup.php
        :caption: EXT:my_extension/Configuration/TCA/tx_myextension_domain_model_something.php

..  warning::
    These fields that enable records ("enable fields") are only respected in the frontend if you
    use the correct queries and Extbase repository settings in your extension code.
    See :ref:`enablefields_usage` for more information.

..  _field_sorting:

Manual sorting in the backend
=============================

:sql:`sorting`
    This field is used to sort records in the backend. Configure it
    by setting :ref:`ctrl->sortby <ctrl-reference-sortby>`:

    ..  literalinclude:: /Ctrl/_CodeSnippets/_Sorting.php
        :caption: EXT:my_extension/Configuration/TCA/tx_myextension_domain_model_something.php

..  attention::
    The sortby field contains an integer and is managed by the DataHandler. It
    should not be defined in the :ref:`columns` section in a TCA file. The value of this
    field can be changed at any time by the DataHandler.

    Use :ref:`default_sortby <ctrl-reference-default-sortby>` if you want to
    sort by a field that belongs to the domain.

..  _fields_for_datahandler:

Fields managed by the DataHandler
=================================

The following fields are automatically set when a record is written by the
:ref:`DataHandler <t3coreapi:datahandler-basics>`. They should never be
displayed in backend forms or explicitly set. They do not need to be defined
in the :ref:`columns` section of the TCA.

..  literalinclude:: /Ctrl/_CodeSnippets/_DataHandlerFields.php
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_domain_model_something.php

..  _field_tstamp:

:sql:`tstamp`
    This field is automatically updated to the current timestamp
    when the record is updated or saved in the DataHandler.

    It can be configured by setting :ref:`ctrl->tstamp <ctrl-reference-tstamp>`.

..  _field_crdate:

:sql:`crdate`
    This field is automatically set to the current timestamp
    if the record is created by the DataHandler.

    It can be configured by setting :ref:`ctrl->crdate <ctrl-reference-crdate>`.

..  _field_t3_origuid:

:sql:`t3_origuid`
    Field name containing the uid of the original record if a
    record is created as a copy or new version of another record.

    It can be configured by setting :ref:`ctrl->origUid <ctrl-reference-origuid>`.
