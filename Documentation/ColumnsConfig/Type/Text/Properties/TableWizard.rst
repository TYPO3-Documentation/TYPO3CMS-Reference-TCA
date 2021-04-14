.. include:: /Includes.rst.txt
.. _tca_property_fieldControl_tableWizard:

===========
tableWizard
===========

.. confval:: tableWizard

   :type: array
   :Scope: fieldControl
   :Types: :aspect:`Description`

   The table wizard field control is used in :code:`type='text'` with :code:`renderType='textTable'`
   elements and renders a button to the stand alone table wizard.

   The table wizard is used typically with the Content Elements, type "Table". It allows to edit
   the code-like configuration of the tables with a visual editor.

   Note the control button is only displayed after a new record has been saved the first time.

   .. include:: /Includes/Images/Styleguide/RstIncludes/TableWizard.rst.txt

   Available options:

   xmlOutput
      (boolean) If set to true, the output from the wizard is XML instead of the
      TypoScript table configuration code. This variable still needs binding
      to the wizard parameters. Otherwise only an empty wizard will be rendered.
      Default false.

   numNewRows
     (integer) Setting the number of blank rows that will be added in the bottom of the table when the
     plus-icon is pressed. The default is 5, the range is 1-50.

Example
=======

Overriding defaults of a :code:`renderType='textTable'` element:

.. include:: /Includes/Snippets/Styleguide/RstIncludes/Text21.rst.txt
