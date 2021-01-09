.. include:: /Includes.rst.txt
.. _columns-flex-properties:
.. _columns-flex-properties-type:
.. _columns-flex-properties-behaviour:

==========
Properties
==========

There can be multiple data structures defined in `TCA` and it depends on the
configuration and the record which one is chosen. All the different "ds" properties
allow to specify the lookup mechanism, see the :ref:`example section <columns-flex-ds-pointer>`.

.. toctree::

   ../../CommonProperties/Behaviour
   ../../CommonProperties/Behaviour/AllowLanguageSynchronization
   Ds
   DsPointerField
   DsPointerFieldSearchParent
   DsPointerFieldSearchParentSubField
   ../../CommonProperties/FieldInformation
   ../../CommonProperties/FieldWizard
   ../../CommonProperties/FieldWizard/DefaultLanguageDifferences
   ../../CommonProperties/FieldWizard/LocalizationStateSelector
   ../../CommonProperties/FieldWizard/OtherLanguageContent
   InvertStateDisplay
   Items
   ../../CommonProperties/ItemsProcFunc
   ../../CommonProperties/ReadOnly
   DsTableField
   Validation


.. note::

   It is **not** possible to override any of these properties in
   :ref:`TCA type columnsOverrides <types-properties-columnsOverrides>` or to manipulate
   them in an inline parent-child relation from the parent `TCA`.
