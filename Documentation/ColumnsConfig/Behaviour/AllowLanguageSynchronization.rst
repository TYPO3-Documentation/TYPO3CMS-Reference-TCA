:orphan:

.. this file could be removed, but right now there are search results for it
.. there will be a general solution for broken links, so we leave it for now. (Sybille/2018-04-10)

============================
allowLanguageSynchronization
============================

.. rst-class:: dl-parameters

allowLanguageSynchronization
   :sep:`|` :aspect:`Scope:`    Proc.
   :sep:`|` :aspect:`Datatype:` boolean
   :sep:`|` :aspect:`Default:`  false
   :sep:`|`

   Allows an editor to select in a localized record if the value is copied over from default or source
   language record, or if the field has an own value in the localization.
   If set to true, and if the table supports localization and if a localized record is edited, this setting enables
   FieldWizard :ref:`LocalizationStateSelector <columns-input-properties-fieldWizard-localizationStateSelector>`:
   Two or three radio buttons shown below the field input.
   The state of this is stored in a json encoded array in the database table called :code:`l10n_state`. It tells
   the DataHandler which fields of the localization records should be kept in sync if the underlying default or
   source record changes.

.. include:: CommonAllowLanguageSynchronization.txt

Example::

   COLUMN => [
      'config' => [
         'type' => TYPE,
         'behaviour' => [
            'allowLanguageSynchronization' = true,
         ]
      ]
   ]

