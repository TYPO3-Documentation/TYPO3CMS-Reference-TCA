.. include:: /Includes.rst.txt
.. _tca_property_localizeReferencesAtParentLocalization:

======================================
localizeReferencesAtParentLocalization
======================================

.. confval:: localizeReferencesAtParentLocalization

   :type: boolean
   :Scope: Proc.
   :Types: :ref:`group <columns-group>`, :ref:`select <columns-select>`

   Defines whether referenced records should be localized when the current
   record gets localized. This does only apply if references are **not** stored using
   `MM` tables.
