.. include:: /Includes.rst.txt
.. _columns-inline:
.. _columns-inline-introduction:

=============
IRRE / inline
=============

Inline-Relational-Record-Editing (IRRE) offers a way of directly editing parent-child-relations in one backend view.
New child records are created using AJAX calls to prevent a reload of the complete backend view.

type='inline' is a powerful element that allows handling a huge list of relations. This includes simple :code:`1:n`
and nested :code:`1:n-1:n` relations, as well as various :code:`m:n` relation scenarios with different view aspects
and localization setups. Combined with other TCA properties in 'ctrl' and 'types', the sheer amount of different
display variants is amazing.

Be aware that inline has been mostly designed to manage :code:`1:n` relations. In those relations one parent record
can have multiple children, but one child is connected to only one parent. Children can not be moved from one parent
to another.

The exception are :code:`m:n` relations where a child can be connected via an intermediate table to
multiple parents, and the intermediate table can have editable fields on its own, thus attaching additional information
to one specific parent-child relation. In the core, the "FAL" / resource handling is an example of that. A parent record
(for instance of table "tt_content") is connected via table "sys_file_reference" to one media resource in "sys_file".
A sys_file record has table "sys_file_metadata" as child record which holds meta information details of the file in
question (for instance a description). This information can be overwritten for the specific file resource used in
"tt_content" by adding a new description in table "sys_file_reference". The various inline and field properties
like "placeholder" help managing this complex setup in TCA.

.. hint::

   The type inline does not have the properties :code:`fieldInformation`,
   :code:`fieldControl` or :code:`fieldWizard` like the other types. This is
   due to the fact that this type is a container and not an element. You can
   still add fieldInformation or fieldWizard, but this must be configured
   within the :code:`ctrl`. Please see the
   :ref:`example <inline-example-field-information>`.

.. toctree::
   :titlesonly:

   Properties/Index
   Examples

