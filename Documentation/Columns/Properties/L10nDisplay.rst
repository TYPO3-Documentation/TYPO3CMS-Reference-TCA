.. include:: /Includes.rst.txt
.. _columns-properties-l10n-display:

====================================
Localization display (l10n\_display)
====================================

.. confval:: l10n_display

   :Required: false
   :type: string (list of keywords)
   :Scope: Display

   Localization display, see :ref:`l10n\_mode <columns-properties-l10n-mode>`.

   This option can be used to define the language related field
   rendering. This has nothing to do with the processing of language
   overlays and data storage but the display of form fields.

   Keywords are:

   hideDiff
      The differences to the default language field will not be displayed.

   defaultAsReadonly
      This renders the field as read only field with the content of the default
      language record. The field will be rendered even if
      :ref:`l10n_mode <columns-properties-l10n-mode>` is set to
      :php:`'exclude'`. While `exclude` defines the field not to be
      translatable, this option activates the display of the default data.


Examples
========

.. _tca_example_translated_select_single_13:

Select field with `defaultAsReadonly`
-------------------------------------

The following field has the option :php:`'l10n_display' => 'defaultAsReadonly'`
set:

.. include:: /Includes/Images/Styleguide/RstIncludes/TranslatedSelectSingle13.rst.txt

Complete TCA definition of the field:

.. include:: /Includes/Snippets/Styleguide/RstIncludes/TranslatedSelectSingle13.rst.txt

.. _tca_example_translated_select_single_8:

Translated field without `l10n_display` definition
--------------------------------------------------

The following has no :php:`'l10n_display'` definition:

.. include:: /Includes/Images/Styleguide/RstIncludes/TranslatedSelectSingle8.rst.txt

Complete TCA definition of the field:

.. include:: /Includes/Snippets/Styleguide/RstIncludes/TranslatedSelectSingle8.rst.txt
