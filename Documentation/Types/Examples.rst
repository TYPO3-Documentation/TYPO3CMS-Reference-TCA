.. include:: /Includes.rst.txt


========
Examples
========

.. _types-required:

Required type - minimal configuration
=====================================

The type :php:`0` is required to be defined. It has to have at least the
property :ref:`showitem <types-properties-showitem>` defined. A minimal
configuration can be seen here, for example:

.. include:: /Includes/Snippets/Styleguide/RstIncludes/Manual/TypeMinimal.rst.txt

It displays nothing but a single field.

Required type - tabs and palettes
=================================

The following configuration specifies two tabs: the first one labelled "general"
with three fields "category" "subject" and "message", and the second one
labelled "access" with the field "personal". Only the default type "0" is
specified. Opening such a record looks like this:

.. include:: /Includes/Images/Styleguide/RstIncludes/TxStyleguideCtrlCommon.rst.txt

.. _types-optional:

Optional additional types
=========================

The power of the "types" configuration becomes clear when you want the form
composition of a record to depend on a value from the record. Let's look at the
:sql:`tx_styleguide_type` table from the :ref:`styleguide <styleguide>`
extension. The :php:`ctrl` section of its TCA contains a property called
:php: `type`:

.. include:: /Includes/Snippets/Styleguide/RstIncludes/Manual/CtrlTypeCtrl.rst.txt

This indicates that the field called :php:`record\_type` is to specify the type
of any given record of the table. Let's look at how this field is defined in
the property :php:`columns`:

.. include:: /Includes/Snippets/Styleguide/RstIncludes/Manual/CtrlTypeTypes.rst.txt

There's nothing unusual here. It's a pretty straightforward select field, with
three options. Finally, in the :php:`types` section, we define what fields
should appear and in what order for every value of the type field:

.. include:: /Includes/Snippets/Styleguide/RstIncludes/Manual/CtrlTypeTypes.rst.txt

The result if the following display when type :php:`0` is chosen:

.. include:: /Includes/Images/Styleguide/RstIncludes/CtrlType0.rst.txt

Changing to type :php:`withChangedFields` reloads the form and displays
the a different set of fields:

.. include:: /Includes/Images/Styleguide/RstIncludes/CtrlTypeWithChangedFields.rst.txt

And finally, type :php:`withOverriddenColumns` shows the fields and overrides
part of the configuration of the fields:

.. include:: /Includes/Images/Styleguide/RstIncludes/CtrlTypeWithOverriddenColumns.rst.txt

.. note::
   It is a good idea to give all "types" speaking names, except the default
   type :php:`0`. Therefore we named the other types  :php:`withChangedFields`
   and :php:`withOverriddenColumns` instead of 1, 2 etc. In a real life example
   they should have names from the domain.
