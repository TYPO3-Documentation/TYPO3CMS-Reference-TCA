.. include:: /Includes.rst.txt
.. _columns-input-properties-disableAgeDisplay:

=================
disableAgeDisplay
=================

.. confval:: disableAgeDisplay

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: boolean
   :Scope: Display

   Disable the display of the age (for example "2015-08-30 (-27 days)") of date fields in some places of the backend,
   for instance the list module. It will be respected if the field has the type `input` and its eval is set to `date`.
