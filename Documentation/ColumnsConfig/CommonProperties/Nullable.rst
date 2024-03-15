.. include:: /Includes.rst.txt
.. _tca_property_nullable:

========
nullable
========

.. versionadded:: 12.0
   This option should be used instead of an `eval` property with the
   deprecated keyword `null`.

.. confval:: nullable

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: boolean
   :Scope: Display / Proc.
   :Default: false
   :Types:
      :ref:`input <columns-input>`,
      :ref:`text <columns-text>`

   If set to true a null value is possible in the field. The
   form can be saved even if no entries have been made.
   The database field must not forbid the :sql:`NULL` value.

