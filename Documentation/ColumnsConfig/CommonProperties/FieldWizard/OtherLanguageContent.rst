..  include:: /Includes.rst.txt
..  _tca_property_fieldWizard_otherLanguageContent:

====================
otherLanguageContent
====================

..  confval:: otherLanguageContent
    :name: fieldWizard-otherLanguageContent
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldWizard']
    :type: array
    :Scope: fieldWizard
    :Types: :ref:`check <columns-check>`, :ref:`flex <columns-flex>`,
        :ref:`group <columns-group>`,
        :ref:`imageManipulation <columns-imageManipulation>`,
        :ref:`input <columns-input>`, :ref:`radio <columns-radio>`

    Show values from the default language record and other localized records if the edited row is a
    localized record. Often used in :php:`tt_content` fields. By default, only the value of the default
    language record is shown, values from further translations can be shown by setting the
    :ref:`user TSconfig property additionalPreviewLanguages <t3tsconfig:useroptions-additionalPreviewLanguages>`.

    The wizard shows content only for "simple" fields. For instance, it does not work for database relation fields,
    and if the field is set to :php:`readOnly`. Additionally, the table has to be language aware by setting up the
    according fields in ['ctrl'] section.

    ..  include:: /Images/ManualScreenshots/OtherLanguageContent.rst.txt
