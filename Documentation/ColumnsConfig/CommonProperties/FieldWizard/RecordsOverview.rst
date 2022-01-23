.. include:: /Includes.rst.txt
.. _tca_property_fieldWizard_recordsOverview:

===============
recordsOverview
===============

.. confval:: recordsOverview

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldWizard']
   :type: array
   :Scope: fieldWizard
   :Types: :ref:`group <columns-group>`

   **Only with internal\_type='db'**

   Render an overview of the selected records with correct icon and click menu and title. Allows to
   perform actions on the selected records directly. Links the record title to a direct editing form.
