.. include:: /Includes.rst.txt
.. _columns-email-properties:

==========
Properties
==========

Special properties
==================

.. toctree::
   :titlesonly:

   Autocomplete
   Eval
   Size

Common properties
=================

*  :ref:`behaviour > allowLanguageSynchronization <tca_property_behaviour_allowLanguageSynchronization>`
*  :ref:`default <tca_property_default>`
*  :ref:`fieldControl <tca_property_fieldControl>`
*  :ref:`fieldInformation <tca_property_fieldInformation>`
*  :ref:`fieldWizard <tca_property_fieldWizard>` with the following options

   *  :ref:`defaultLanguageDifferences <tca_property_fieldwizard>`
   *  :ref:`localizationStateSelector <tca_property_fieldWizard_localizationStateSelector>`
   *  :ref:`otherLanguageContent <tca_property_fieldWizard_otherLanguageContent>`

*  :ref:`mode <tca_property_mode>`
*  :ref:`placeholder <tca_property_placeholder>`
*  :ref:`readOnly <tca_property_readOnly>`
*  :ref:`required <tca_property_required>`
*  :ref:`search <tca_property_search>`

.. note::

    The softref definition :php:`softref=typolink` is automatically applied
    to all TCA type :php:`link` columns.


The following properties can be overwritten by Page TSconfig:

- :typoscript:`readOnly`
- :typoscript:`size`
