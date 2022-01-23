.. include:: /Includes.rst.txt
.. _columns-input-properties-format:

======
format
======

.. confval:: format

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: string (keyword)
   :Scope: Display

   Set output format if field is set to readOnly. Read-only fields with :code:`format` set to "date"
   will be formatted as "date", "datetime" as "datetime" and "time" as "time".
