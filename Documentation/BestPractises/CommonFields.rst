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
   Though it is possible to change the name of the following fields it is
   highly recommended not to do as it is confusing to most developers and
   might break third party extensions.

   All fields mentioned below get added to the database automatically. It is
   not recommended to define them in the :file:`ext_tables.sql`. Doing so
   with incompatible SQL settings can lead to problems.


.. _field_deleted:

Soft delete
===========

:sql:`deleted`
   This field is used to enable soft delete of records. In can be configured
   by setting :ref:`ctrl->deleted <ctrl-reference-delete>`:


   .. include:: /CodeSnippets/Manual/Ctrl/Delete.rst.txt

   .. warning::
      If no :sql:`deleted` field is configured records will be hard deleted.
      The DataHandler in the backend and Extbase will automatically execute
      :sql:`DELETE` statements.

   The :sql:`deleted` field is never directly visible in backend forms. It is
   handled separately by the DataHandler. Therefore it
   needs no definition in the :php:`columns` section.

.. _field_hidden:
.. _field_starttime:
.. _field_fe_group:

Enablecolumns
=============

:sql:`hidden`
   This field is used to enable soft hiding of records. In can be configured
   by setting :ref:`ctrl->enablecolumns->disabled <ctrl-reference-enablecolumns>`:

   .. include:: /CodeSnippets/Manual/Ctrl/Hidden.rst.txt

:sql:`starttime` and :sql:`endtime`
   This field is used to enable records by a starttime and or disable them by
   a endtime. In can be configured
   by :ref:`ctrl->enablecolumns->starttime or endtime <ctrl-reference-enablecolumns>`:

   .. include:: /CodeSnippets/Manual/Ctrl/StarttimeEndtime.rst.txt

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
   This field is used manually sort records in the backend. In can be configured
   by :ref:`ctrl->sortby <ctrl-reference-sortby>`:

   .. include:: /CodeSnippets/Manual/Ctrl/Sorting.rst

.. attention::
   The sortby field contains an integer and is managed by the DataHandler. It
   therefore should have no definition in the columns section. Any value in this
   field can be changed at any time by the DataHandler.

   Use :ref:`default_sortby <ctrl-reference-default-sortby>` if you want to
   sort by an existing field of the domain instead.
