.. include:: /Includes.rst.txt
.. _columns-flex-properties:
.. _columns-flex-properties-type:
.. _columns-flex-properties-behaviour:

==========
Properties
==========


Special properties
==================

There can be multiple data structures defined in `TCA` and it depends on the
configuration and the record which one is chosen. All the different "ds" properties
allow to specify the lookup mechanism, see the :ref:`example section <columns-flex-ds-pointer>`.

.. toctree::

   Ds
   DsPointerField

.. note::

   It is **not** possible to override any of these properties in
   :ref:`TCA type columnsOverrides <types-properties-columnsOverrides>` or to manipulate
   them in an inline parent-child relation from the parent `TCA`.

Common properties
=================

*  :ref:`behaviour > allowLanguageSynchronization <tca_property_behaviour_allowLanguageSynchronization>`
*  :ref:`fieldInformation <tca_property_fieldInformation>`
*  :ref:`fieldWizard <tca_property_fieldWizard>` with the following options

   *  :ref:`defaultLanguageDifferences <tca_property_fieldwizard>`
   *  :ref:`localizationStateSelector <tca_property_fieldWizard_localizationStateSelector>`
   *  :ref:`otherLanguageContent <tca_property_fieldWizard_otherLanguageContent>`

*  :ref:`itemsProcFunc <tca_property_itemsProcFunc>`
*  :ref:`readOnly <tca_property_readOnly>`
