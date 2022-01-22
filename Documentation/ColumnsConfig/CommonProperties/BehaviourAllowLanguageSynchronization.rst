.. include:: /Includes.rst.txt

.. _tca_property_behaviour_allowLanguageSynchronization:

=======================================
allowLanguageSynchronization behaviour
=======================================

.. confval:: behaviour > allowLanguageSynchronization

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: boolean
   :Scope: Proc.
   :Types: :ref:`check <columns-check>`, :ref:`flex <columns-flex>`,
      :ref:`group <columns-group>`,
      :ref:`imageManipulation <columns-imageManipulation>`,
      :ref:`inline <columns-inline>`, :ref:`input <columns-input>`,
      :ref:`radio <columns-radio>`

   Allows an editor to select in a localized record whether the value is copied
   over from default or source language record, or if the field has an own value
   in the localization. If set to true and if the table supports localization
   and if a localized record is edited, this setting enables FieldWizard
   :ref:`LocalizationStateSelector <columns-input-properties-fieldWizard-localizationStateSelector>`:
   Two or three radio buttons shown below the field input. The state of this is
   stored in a json encoded array in the database table called :code:`l10n_state`.
   It tells the DataHandler which fields of the localization records should be kept
   in sync if the underlying default or source record changes.

   Example::

       'aField' => [
          'config' => [
             'type' = 'sometype',
             'behaviour' => [
                  'allowLanguageSynchronization' => true
             ]
          ]
       ]

:aspect:`Default`
   false
