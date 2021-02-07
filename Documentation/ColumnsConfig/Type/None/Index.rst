.. include:: /Includes.rst.txt

.. _columns-none:
.. _columns-none-introduction:

================
The `none` field
================

.. include:: /Includes/Images/Styleguide/RstIncludes/None1.rst.txt

There are three columns config types that do similar things but still have subtle differences between them.
These are the :ref:`none type <columns-none>`, the :ref:`passthrough type <columns-passthrough>` and the
:ref:`user type <columns-user>`.

Characteristics of `none`:

* The DataHandler discards values send for type none and never persists or updates them in the database.
* Type none is the only type that does **not** necessarily need a database field.
* Type none fields does have a default renderType in FormEngine that displays the value as read read only
  if a database field exists and the value can be formatted.
* If no database field exists for none fields, an empty read only input field is rendered by default.
* Type none fields are designed to be not rendered at other places in the backend, for instance they can
  not be selected to be displayed in the list module "single table view" if everything has been configured
  correctly.

The `none` field can be useful, if:

* A "virtual" field that has no database representation is needed. A simple example could be a rendered
  map that receives values from `latitude` and `longitude` fields but that needs to database representation
  itself.
* A third party feeds the database field with a value and the value should be formatted and displayed
  in FormEngine. However, a :ref:`input type <columns-input>` with :php:`readOnly=true` is usually better
  suited to do that.

Since the formatting part of `none` fields can be done with `input` type as well, most useful usage
of type `none` fields is a "virtual" field that is combined with a custom
:ref:`renderType <t3coreapi:FormEngine-Rendering-NodeExpansion>` by an extension.
The TYPO3 core makes little or no use of `none` fields itself.


.. toctree::
   :titlesonly:

   Examples
   Properties/Index

