.. include:: /Includes.rst.txt
.. _columns-input-properties-format:
.. _columns-datetime-properties-format:

======
format
======

.. confval:: format

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: string (keyword)
   :Scope: Display

   Sets the output format if the field is set to read-only. Read-only fields
   with :code:`format` set to "date" will be formatted as "date", "datetime"
   as "datetime" and "time" as "time".

   .. note::

      The :php:`format` option defines only the display of the field value.
      The storage format is defined via :confval:`dbType`
      or :ref:`eval=int <columns-datetime-properties-eval>`.
