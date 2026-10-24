..  include:: /Includes.rst.txt

..  _columns-password-properties-passwordgenerator-examples:

===========================
Password generator examples
===========================

..  _columns-password-properties-passwordgenerator-include-special-chars:

Include special characters
==========================

Example: `qe8)i2W1it-msR8`

..  figure:: /Images/Conference/PasswordGenerator.png
    :alt: The password of the live stream with its generator
    :class: with-shadow

    The password of the live stream with its generator

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/119-tx_myextension_conference-livestream_password.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/119-tx_myextension_conference-livestream_password.php
    :emphasize-lines: 19

..  _columns-password-properties-passwordgenerator-only-digits:

Only digits, length 8 (minimum length)
======================================

Example: `28233371`

The door code of a room uses the policy `myExtensionDigits`. The extension
defines it in its :file:`ext_localconf.php`, and its generator creates
8 digits:

..  literalinclude:: /CodeSnippets/my_extension/ext_localconf.php
    :caption: EXT:my_extension/ext_localconf.php (excerpt)
    :lines: 1-2,11-14,57-71

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/445-tx_myextension_location-door_code.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/445-tx_myextension_location-door_code.php
    :emphasize-lines: 17-18

..  _columns-password-properties-passwordgenerator-hexadecimal:

Hexadecimal random bytes, length 40
===================================

Example: `a3f1c9e07b5d4e2f8c6a1b0d9e7f3c5a2b4d6e8f`

..  figure:: /Images/Conference/PasswordSecretToken.png
    :alt: The secret of the ticket shop, generated as a hex string
    :class: with-shadow

    The secret of the ticket shop, generated as a hex string

The secret of the ticket shop uses the policy `secretToken` of the Core. Its
generator creates a random hex string with 40 characters:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/134-tx_myextension_conference-ticketing_secret.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/134-tx_myextension_conference-ticketing_secret.php
    :emphasize-lines: 20

..  _columns-password-properties-passwordgenerator-base64:

Base64 random bytes, readonly
==============================

Example: `zrt8sJd6GiqUI_EFgjPiedOj--D0NbTVOJz`

The token of the upload link of a speaker uses the policy
`myExtensionBase64` of the extension. Its generator creates a random base64
string with 35 characters, and the editors cannot change it:

..  literalinclude:: /CodeSnippets/my_extension/ext_localconf.php
    :caption: EXT:my_extension/ext_localconf.php (excerpt)
    :lines: 1-2,11-14,72-81

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/345-tx_myextension_speaker-upload_token.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/345-tx_myextension_speaker-upload_token.php
    :emphasize-lines: 17-20

..  _columns-password-properties-passwordgenerator-properties:

Properties
==========

..  _columns-password-properties-passwordgenerator-fieldcontrol:

Field control options
=====================

..  _columns-password-properties-passwordgenerator-fieldcontrol-title:

title
-----

..  confval:: title
    :name: password-passwordGenerator-title
    :TCA path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']['passwordGenerator']['options']['title']
    :type: String / localized string
    :default: `LLL:core.core:labels.generatePassword`

    Define a title for the control button.

..  _columns-password-properties-passwordgenerator-fieldcontrol-allowedit:

allowEdit
---------

..  confval:: allowEdit
    :name: password-passwordGenerator-allowEdit
    :TCA path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']['passwordGenerator']['options']['allowEdit']
    :type: boolean
    :default: :php:`true`

    If set to :php:`false`, the user cannot edit the generated password.

..  _columns-password-properties-passwordgenerator-passwordpolicy:

Password policy
===============

..  confval:: passwordPolicy
    :name: password-passwordGenerator-passwordPolicy
    :TCA path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']['passwordGenerator']['options']['passwordPolicy']
    :type: string
    :added: 14.2
    :Examples: :ref:`Digits for a door code
        <columns-password-properties-passwordgenerator-only-digits>`,
        :ref:`Hex string for a secret
        <columns-password-properties-passwordgenerator-hexadecimal>`,
        :ref:`Base64 string for a token
        <columns-password-properties-passwordgenerator-base64>`

    This option can be used to configure which
    `Password policy <https://docs.typo3.org/permalink/t3coreapi:password-policies>`_
    should be used for the password field. Use the key of the policy as
    defined in :php:`$GLOBALS['TYPO3_CONF_VARS']['SYS']['passwordPolicies']`.

    The field control uses the `generator` section of the policy. If the
    option is missing, or the policy has no generator, the field shows no
    password generator.
