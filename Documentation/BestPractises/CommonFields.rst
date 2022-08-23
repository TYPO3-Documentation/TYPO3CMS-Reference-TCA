.. include:: /Includes.rst.txt

.. _fields_common:

================
Common fields
================

Mandatory fields
================

All data tables with a TCA definition need to have at least the following
fields defined in the :file:`ext_tables.sql`:

.. code-block:: sql
   :caption: EXT:my_extension/ext_tables.sql

   CREATE TABLE tx_myextension_domain_model_something (
      uid          INT(11)                 NOT NULL AUTO_INCREMENT,
      pid          INT(11) DEFAULT '0'     NOT NULL,
   )

There is no separate definition of these fields in the TCA configuration. It is
not possible to use different names for these fields.

Fields used by convention
=========================

.. warning::
   It is possible to change the names of the following fields, however this is
   strongly discouraged as it breaks convention and may lead to compatibility
   issues with third party extensions.

   All fields mentioned below get added to the database automatically. It is
   not recommended to define them in the :file:`ext_tables.sql`. Doing so
   with incompatible SQL settings can lead to problems later on.


.. _field_deleted:

Soft delete
===========

:sql:`deleted`
   This field is used to enable soft delete in records. In can be configured
   by setting :ref:`ctrl->delete <ctrl-reference-delete>`:


   .. include:: /CodeSnippets/Manual/Ctrl/Delete.rst.txt

   .. warning::
      If no :sql:`deleted` field is configured, records will be hard deleted.
      The DataHandler in the backend and Extbase will automatically execute
      :sql:`DELETE` statements.

   The :sql:`deleted` field is never directly visible in backend forms. It is
   handled separately by the DataHandler. Therefore it
   needs no definition in the :php:`columns` section.

Enablecolumns
=============

.. _field_hidden:

:sql:`hidden`
   This field is used to enable soft hiding of records. In can be configured
   by setting :ref:`ctrl->enablecolumns->disabled <ctrl-reference-enablecolumns>`:

   .. include:: /CodeSnippets/Manual/Ctrl/Hidden.rst.txt


.. _field_starttime:
.. _field_endtime:

:sql:`starttime` and :sql:`endtime`
   This field is used to enable records by a starttime and or disable them with
   an endtime. In can be configured
   by :ref:`ctrl->enablecolumns->starttime or endtime <ctrl-reference-enablecolumns>`:

   .. include:: /CodeSnippets/Manual/Ctrl/StarttimeEndtime.rst.txt

.. _field_fe_group:

:sql:`fe_group`
   This field is used to enable soft delete of records. In can be configured
   by :ref:`ctrl->enablecolumns->fe_group <ctrl-reference-enablecolumns>`:

   .. include:: /CodeSnippets/Manual/Ctrl/FeGroup.rst

.. warning::
   These enable fields are only respected in the frontend if you
   use proper queries or Extbase repository settings in your extensions code.
   See :ref:`enablefields_usage` for more information.


.. _field_sorting:

Manual sorting in the backend
=============================

:sql:`sorting`
   This field is used to manually sort records in the backend. In can be configured
   by :ref:`ctrl->sortby <ctrl-reference-sortby>`:

   .. include:: /CodeSnippets/Manual/Ctrl/Sorting.rst

.. attention::
   The sortby field contains an integer and is managed by the DataHandler. It
   therefore should have no definition in the columns section. Any value in this
   field can be changed at any time by the DataHandler.

   Use :ref:`default_sortby <ctrl-reference-default-sortby>` if you want to
   sort by an existing field of the domain instead.

.. _fields_for_datahandler:

Fields managed by the DataHandler
=================================

The following fields are automatically set when a record is written by the
:ref:`DataHandler <t3coreapi:datahandler-basics>`. They should never be
displayed in backend forms or explicitly set, therefore they need no entry in
the `columns` section of the TCA.

.. include:: /CodeSnippets/Manual/Ctrl/DataHandlerFields.rst.txt

.. _field_tstamp:

:sql:`tstamp`
   This field is automatically updated to the current timestamp
   each time the record is updated or saved in the DataHandler.

   It can be configured by setting :ref:`ctrl->tstamp <ctrl-reference-tstamp>`.

.. _field_crdate:

:sql:`crdate`
   This field is automatically set to the current timestamp
   if the record is created by the DataHandler.

   It can be configured by setting :ref:`ctrl->crdate <ctrl-reference-crdate>`.

.. _field_cruser_id:

:sql:`cruser_id`
   This field is automatically set to the uid of the backend user
   who originally created the record if the record is created by the DataHandler.

   It can be configured by setting :ref:`ctrl->cruser_id <ctrl-reference-cruser-id>`.

.. _field_t3_origuid:

:sql:`t3_origuid`
   Field name, which contains the uid of the original record in case a
   record is created as a copy or new version of another record.

   It can be configured by setting :ref:`ctrl->origUid <ctrl-reference-origuid>`.
