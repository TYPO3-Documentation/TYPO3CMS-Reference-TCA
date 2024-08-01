..  include:: /Includes.rst.txt

..  _columns-password-properties-passwordGenerator_examples:

===========================
Password generator examples
===========================

..  _columns-password-properties-passwordGenerator_include_special_chars:

Include special characters
==========================

Example: `qe8)i2W1it-msR8`

..  figure:: /Images/ManualScreenshots/PasswordGeneratorAllChars.png
    :alt: A password generator using special chars.
    :class: with-shadow

    A password generator using special chars.

..  include:: _Snippets/_Password_6.rst.txt

..  _columns-password-properties-passwordGenerator_only_digits:

Only digits, length 8 (minimum length)
======================================

Example: `28233371`

..  figure:: /Images/ManualScreenshots/PasswordGeneratorDigits.png
    :alt: A generated 8 digit number
    :class: with-shadow

    A generated 8 digit number

..  include:: _Snippets/_Password_7.rst.txt


..  _columns-password-properties-passwordGenerator_hexadecimal:

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

..  _columns-password-properties-passwordGenerator_base64:

Base64 random bytes, readonly
==============================

Example: `zrt8sJd6GiqUI_EFgjPiedOj--D0NbTVOJz`

..  figure:: /Images/ManualScreenshots/PasswordGeneratorBase64Readonly.png
    :alt: A password generator using base64 random bytes, readonly
    :class: with-shadow

    A password generator using base64 random bytes, readonly.

..  include:: _Snippets/_Password_5.rst.txt

..  _columns-password-properties-passwordGenerator_properties:

Properties
==========

..  _columns-password-properties-passwordGenerator_fieldControl:

Field control options
=====================

..  _columns-password-properties-passwordGenerator_fieldControl_title:

title
-----

..  confval:: title
    :name: password-passwordGenerator-title
    :Path: :php:`$GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']['passwordGenerator']['options']['title']`
    :Type: String / localized string
    :Default: :php:`"LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.generatePassword"`

    Define a title for the control button.

..  _columns-password-properties-passwordGenerator_fieldControl_allowedit:

allowEdit
---------

..  confval:: allowEdit
    :name: password-passwordGenerator-allowEdit
    :Path: :php:`$GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']['passwordGenerator']['options']['allowEdit']`
    :Type: boolean
    :Default: :php:`true`

    If set to :php:`false`, the user cannot edit the generated password.

..  _columns-password-properties-passwordGenerator_passwordRules:

Password rules
==============

Define rules for the password.

..  _columns-password-properties-passwordGenerator_passwordRules_length:

passwordRules.length
--------------------

..  confval:: passwordRules.length
    :name: password-passwordRules-length
    :Path: :php:`$GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']['passwordGenerator']['options']['passwordRules']['length']`
    :Type: int
    :Default: :php:`16`
    :Minimum: :php:`8`

    Defines the amount of characters for the generated password.

..  _columns-password-properties-passwordGenerator_passwordRules_random:

passwordRules.random
--------------------

..  confval:: passwordRules.random
    :name: password-passwordRules-random
    :Path: :php:`$GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']['passwordGenerator']['options']['passwordRules']['random']`
    :Type: String
    :Values: :php:`"hex"`, :php:`"base64"`

    Defines the encoding of random bytes. Overrules character definitions.

    :php:`"hex"`
        Generates a random password in hexadecimal format. Example:
        `d0f4030d568ab483b8442735e9e3a7`.

    :php:`"base64"`
        Generates a random password in base64 format. Example:
        `dtbpykd4vf1hda_Ag9kG983y-_N2zyLZzof`.

    ..  note::
        Defining the `passwordRules.random`
        password rule takes precedence over any character definition, which
        should therefore be omitted as soon as
        `passwordRules.random` is set to one
        of the available encodings: :php:`hex` or :php:`base64`.

..  _columns-password-properties-passwordGenerator_passwordRules_digitcharacters:

passwordRules.digitCharacters
-----------------------------

..  confval:: passwordRules.digitCharacters
    :name: password-passwordRules-digitCharacters
    :Path: :php:`$GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']['passwordGenerator']['options']['passwordRules']['digitCharacters']`
    :Type: boolean
    :Default: :php:`true`

    If set to :php:`false`, the generated password contains no digit.

..  _columns-password-properties-passwordGenerator_passwordRules_lowercasecharacters:


passwordRules.lowerCaseCharacters
---------------------------------

..  confval:: passwordRules.lowerCaseCharacters
    :name: password-passwordRules-lowerCaseCharacters
    :Path: :php:`$GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']['passwordGenerator']['options']['passwordRules']['lowerCaseCharacters']`
    :Type: boolean
    :Default: :php:`true`

    If set to :php:`false`, the generated password contains no lower case characters.

..  _columns-password-properties-passwordGenerator_passwordRules_uppercasecharacters:

passwordRules.upperCaseCharacters
---------------------------------

..  confval:: passwordRules.upperCaseCharacters
    :name: password-passwordRules-upperCaseCharacters
    :Path: :php:`$GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']['passwordGenerator']['options']['passwordRules']['upperCaseCharacters']`
    :Type: boolean
    :Default: :php:`true`

    If set to :php:`false`, the generated password contains no upper case characters.

..  _columns-password-properties-passwordGenerator_passwordRules_specialcharacters:

passwordRules.specialCharacters
---------------------------------

..  confval:: passwordRules.specialCharacters
    :name: password-passwordRules-specialCharacters
    :Path: :php:`$GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']['passwordGenerator']['options']['passwordRules']['specialCharacters']`
    :Type: boolean
    :Default: :php:`false`

    If set to :php:`true`, the generated password also contains special
    characters (`!"#$%&\'()*+,-./:;<=>?@[\]^_`{|}~`).
