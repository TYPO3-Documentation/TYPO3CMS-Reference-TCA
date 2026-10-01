..  include:: /Includes.rst.txt

..  _columns-password-properties-passwordgenerator-examples:

===========================
Password generator examples
===========================

..  _columns-password-properties-passwordgenerator-include-special-chars:

Include special characters
==========================

Example: `qe8)i2W1it-msR8`

..  figure:: /Images/ManualScreenshots/PasswordGeneratorAllChars.png
    :alt: A password generator using special chars.
    :class: with-shadow

    A password generator using special chars.

..  include:: _Snippets/_Password_6.rst.txt

..  _columns-password-properties-passwordgenerator-only-digits:

Only digits, length 8 (minimum length)
======================================

Example: `28233371`

..  figure:: /Images/ManualScreenshots/PasswordGeneratorDigits.png
    :alt: A generated 8 digit number
    :class: with-shadow

    A generated 8 digit number

..  include:: _Snippets/_Password_7.rst.txt


..  _columns-password-properties-passwordgenerator-hexadecimal:

Hexadecimal random bytes, length 30
===================================

Example: `0d95c0936c54b97bf908a3c963b508`.

..  figure:: /Images/ManualScreenshots/PasswordGeneratorHexadecimal.png
    :alt: A generated 30 characters long random hex string
    :class: with-shadow

    A generated 30 characters long random hex string

The following example will generate a 30 characters long random hex string, which
could be used for secret tokens or similar:

..  include:: _Snippets/_Password_4.rst.txt

..  _columns-password-properties-passwordgenerator-base64:

Base64 random bytes, readonly
==============================

Example: `zrt8sJd6GiqUI_EFgjPiedOj--D0NbTVOJz`

..  figure:: /Images/ManualScreenshots/PasswordGeneratorBase64Readonly.png
    :alt: A password generator using base64 random bytes, readonly
    :class: with-shadow

    A password generator using base64 random bytes, readonly.

..  include:: _Snippets/_Password_5.rst.txt

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
    :default: `default`

    ..  versionadded:: 14.2

    This option can be used to configure which
    `Password policy <https://docs.typo3.org/permalink/t3coreapi:password-policies>`_
    should be used for the password field. Use the key of the policy as
    defined in :php:`$GLOBALS['TYPO3_CONF_VARS']['SYS']['passwordPolicies']`.

    If the policy defines a `generator`
    section, the field control uses that generator.

    ..  literalinclude:: _Snippets/_PasswordPolicy.php
        :caption: EXT:my_extension/Configuration/TCA/Overrides/fe_users.php


..  _columns-password-properties-passwordgenerator-passwordrules:

Password rules
==============

..  deprecated:: 14.2
    The `passwordRules` option of the `passwordGenerator` field control has been
    deprecated. Password generation is now configured through
    `Password policies <https://docs.typo3.org/permalink/t3coreapi:password-policies>`_
    registered in :php:`$GLOBALS['TYPO3_CONF_VARS']['SYS']['passwordPolicies']`.

Define rules for the password.

..  _columns-password-properties-passwordgenerator-passwordrules-migration:

Migration from `passwordRules` to password policies
---------------------------------------------------

Replace the `passwordRules` option with a `Password policiy <https://docs.typo3.org/permalink/t3coreapi:password-policies>`_ reference.

..  code-block:: diff
    :caption: EXT:my_extension/Configuration/TCA/Overrides/be_users.php

     'fieldControl' => [
         'passwordGenerator' => [
             'renderType' => 'passwordGenerator',
             'options' => [
    -            'passwordRules' => [
    -                'length' => 20,
    -                'upperCaseCharacters' => true,
    -                'lowerCaseCharacters' => true,
    -                'digitCharacters' => true,
    -                'specialCharacters' => false,
    -            ],
    +            'passwordPolicy' => 'myCustomPolicy',
             ],
         ],
     ],

..  _columns-password-properties-passwordgenerator-passwordrules-length:

passwordRules.length
--------------------

..  confval:: passwordRules.length
    :name: password-passwordRules-length
    :TCA path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']['passwordGenerator']['options']['passwordRules']['length']
    :type: int
    :default: `16`
    :Minimum: `8`

    ..  deprecated:: 14.2

    Defines the amount of characters for the generated password.

..  _columns-password-properties-passwordgenerator-passwordrules-random:

passwordRules.random
--------------------

..  confval:: passwordRules.random
    :name: password-passwordRules-random
    :TCA path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']['passwordGenerator']['options']['passwordRules']['random']
    :type: String
    :Values: `"hex"`, `"base64"`

    ..  deprecated:: 14.2

    Defines the encoding of random bytes. Overrules character definitions.

    `"hex"`
        Generates a random password in hexadecimal format. Example:
        `d0f4030d568ab483b8442735e9e3a7`.

    `"base64"`
        Generates a random password in base64 format. Example:
        `dtbpykd4vf1hda_Ag9kG983y-_N2zyLZzof`.

    ..  note::
        Defining the `passwordRules.random`
        password rule takes precedence over any character definition, which
        should therefore be omitted as soon as
        `passwordRules.random` is set to one
        of the available encodings: :php:`hex` or :php:`base64`.

..  _columns-password-properties-passwordgenerator-passwordrules-digitcharacters:

passwordRules.digitCharacters
-----------------------------

..  confval:: passwordRules.digitCharacters
    :name: password-passwordRules-digitCharacters
    :TCA path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']['passwordGenerator']['options']['passwordRules']['digitCharacters']
    :type: boolean
    :default: :php:`true`

    ..  deprecated:: 14.2

    If set to :php:`false`, the generated password contains no digit.

..  _columns-password-properties-passwordgenerator-passwordrules-lowercasecharacters:


passwordRules.lowerCaseCharacters
---------------------------------

..  confval:: passwordRules.lowerCaseCharacters
    :name: password-passwordRules-lowerCaseCharacters
    :TCA path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']['passwordGenerator']['options']['passwordRules']['lowerCaseCharacters']
    :type: boolean
    :default: :php:`true`

    ..  deprecated:: 14.2

    If set to :php:`false`, the generated password contains no lower case characters.

..  _columns-password-properties-passwordgenerator-passwordrules-uppercasecharacters:

passwordRules.upperCaseCharacters
---------------------------------

..  confval:: passwordRules.upperCaseCharacters
    :name: password-passwordRules-upperCaseCharacters
    :TCA path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']['passwordGenerator']['options']['passwordRules']['upperCaseCharacters']
    :type: boolean
    :default: :php:`true`

    ..  deprecated:: 14.2

    If set to :php:`false`, the generated password contains no upper case characters.

..  _columns-password-properties-passwordgenerator-passwordrules-specialcharacters:

passwordRules.specialCharacters
---------------------------------

..  confval:: passwordRules.specialCharacters
    :name: password-passwordRules-specialCharacters
    :TCA path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']['passwordGenerator']['options']['passwordRules']['specialCharacters']
    :type: boolean
    :default: :php:`false`

    ..  deprecated:: 14.2

    If set to :php:`true`, the generated password also contains special
    characters (`!"#$%&\'()*+,-./:;<=>?@[\]^_`{|}~`).
