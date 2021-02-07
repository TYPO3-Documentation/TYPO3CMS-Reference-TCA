.. include:: /Includes.rst.txt
.. _columns-properties-onChange:

========
onChange
========

.. confval:: onChange

   :Required: false
   :type: string
   :Scope: Display

   If set to `reload`, it triggers a form reload once the value of this field
   is changed. This is automatically set for fields specified as
   :ref:`record type <ctrl-reference-type>` in the control section.

   The :php:`onChange` property is useful for fields which are targets of a
   :ref:`display condition's FIELD: evaluation <columns-properties-displaycond>`.

   On changing the field a modal gets displayed prompting to reload the record.

   .. include:: /Includes/Images/Styleguide/RstIncludes/CtrlTypeChangeModal.rst.txt

Examples
========

Select field triggering reload
------------------------------

.. include:: /Includes/Images/Styleguide/RstIncludes/SelectRequestupdate1.rst.txt
.. include:: /Includes/Snippets/Styleguide/RstIncludes/SelectRequestupdate1.rst.txt
