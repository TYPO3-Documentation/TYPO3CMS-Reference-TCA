..  include:: /Includes.rst.txt
..  _types-properties-creationOptions:

===============
creationOptions
===============

..  confval:: creationOptions
    :name: types-creationOptions
    :Path: $GLOBALS['TCA'][$table]['types'][$type]['creationOptions']
    :type: list of options

    ..  versionadded:: 13.0
        The page TSconfig option
        :confval:`newContentElement.wizardItems.[group].elements.[name] <t3tsconfig:mod-wizards-newcontentelement-wizarditems>`
        option can be defined through TCA as well:

    ..  confval:: saveAndClose
        :name: types-creationOptions-saveAndClose
        :Path: $GLOBALS['TCA'][$table]['types'][$type]['creationOptions']['saveAndClose']
        :type: bool
        :default: false

        If true, clicking on the new element wizard directs the user back to
        the page module directly instead of showing the edit form from the form
        engine. Can be overridden with page TSconfig
        :confval:`newContentElement.wizardItems.[group].elements.[name] <t3tsconfig:mod-wizards-newcontentelement-wizarditems>`.

..  _types-properties-creationOptions-example:

Example: Activate save and close for divider content element
============================================================

..  literalinclude:: _creationOptions.php
    :language: php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/tt_content.php
