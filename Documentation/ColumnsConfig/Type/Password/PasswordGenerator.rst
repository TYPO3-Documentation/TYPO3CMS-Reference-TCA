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


..  code-block:: php

    'fieldControl' => [
      'passwordGenerator' => [
        'renderType' => 'passwordGenerator',
        'options' => [
          // A policy in $GLOBALS['TYPO3_CONF_VARS']['SYS']['passwordPolicies']
          // whose generator creates 8 digits
          'passwordPolicy' => 'myExtensionDigits',
        ],
      ],
    ],


..  _columns-password-properties-passwordgenerator-hexadecimal:

Hexadecimal random bytes, length 40
===================================

Example: `a3f1c9e07b5d4e2f8c6a1b0d9e7f3c5a2b4d6e8f`

..  figure:: /Images/Conference/PasswordSecretToken.png
    :alt: The secret of the ticket shop, generated as a hex string
    :class: with-shadow

    The secret of the ticket shop, generated as a hex string

The secret of the ticket shop uses the policy `secretToken` of the core. Its
generator creates a random hex string with 40 characters:

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/134-tx_myextension_conference-ticketing_secret.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/134-tx_myextension_conference-ticketing_secret.php
    :emphasize-lines: 17

..  _columns-password-properties-passwordgenerator-base64:

Base64 random bytes, readonly
==============================

Example: `zrt8sJd6GiqUI_EFgjPiedOj--D0NbTVOJz`


..  code-block:: php

    'fieldControl' => [
      'passwordGenerator' => [
        'renderType' => 'passwordGenerator',
        'options' => [
          // A policy whose generator creates base64 random bytes
          'passwordPolicy' => 'myExtensionBase64',
          'allowEdit' => false,
        ],
      ],
    ],

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

    ..  versionadded:: 14.2

    This option can be used to configure which
    `Password policy <https://docs.typo3.org/permalink/t3coreapi:password-policies>`_
    should be used for the password field. Use the key of the policy as
    defined in :php:`$GLOBALS['TYPO3_CONF_VARS']['SYS']['passwordPolicies']`.

    The field control uses the `generator` section of the policy. If the
    option is missing, or the policy has no generator, the field shows no
    password generator.

    ..  literalinclude:: _Snippets/_PasswordPolicy.php
        :caption: EXT:my_extension/Configuration/TCA/Overrides/fe_users.php
