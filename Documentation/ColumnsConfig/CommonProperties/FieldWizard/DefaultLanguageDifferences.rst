.. include:: /Includes.rst.txt
.. _tca_property_fieldWizard_defaultLanguageDifferences:

==========================
defaultLanguageDifferences
==========================

:aspect:`Datatype`
   array

:aspect:`Scope`
   fieldWizard

:aspect:`types`
   :ref:`check <columns-check>`, :ref:`flex <columns-flex>`,
   :ref:`group <columns-group>`,
   :ref:`imageManipulation <columns-imageManipulation>`,
   :ref:`input <columns-input>`, :ref:`radio <columns-radio>`


:aspect:`Description`
   Show a "diff-view" if the content of the default language record has been changed after the
   translation overlay has been created. The ['ctrl'] section property
   :ref:`transOrigDiffSourceField <ctrl-reference-transorigdiffsourcefield>` has to be specified
   to enable this wizard in a translated record.

   This wizard is important for editors who maintain translated records: They can see what has been
   changed in their localization parent between the last save operation of the overlay.

   .. figure:: Images/DefaultLanguageDifferences.png
      :alt: A field has been changed in default language record
      :class: with-shadow

      A field has been changed in default language record
