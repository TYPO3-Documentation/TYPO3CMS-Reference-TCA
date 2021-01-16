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
   :ref:`['ctrl']['type'] <ctrl-reference-type>`, but can
   be additionally useful for fields which are targets of a
   :ref:`display condition FIELD: evaluation <columns-properties-displaycond>`.
