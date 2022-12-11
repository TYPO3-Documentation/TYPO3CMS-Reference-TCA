.. include:: /Includes.rst.txt
.. _columns-password-properties-passwordGenerator:

=================
passwordGenerator
=================

.. versionadded:: 12.1

..  confval:: passwordGenerator (type => password)

    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']['passwordGenerator']
    :type: boolean
    :Scope: Display

    The control
    renders a button next to the password field allowing the user to generate
    a random password based on defined rules.

    Using the control adds the generated password to the corresponding field.
    The password is visible to the backend user only once and stored encrypted
    in the database. Integrators are also able to define whether the user
    is allowed to edit the generated password before saving.

    ..  figure:: /Images/ManualScreenshots/PasswordGenerator.png
        :alt: A basic password generator
        :class: with-shadow

        A basic password generator

    ..  figure:: /Images/ManualScreenshots/PasswordGeneratorAfterSaving.png
        :alt: The same field as above after saving - the password is not displayed anymore
        :class: with-shadow

        The same field as above after saving - the password is not displayed anymore

    ..  literalinclude:: _PasswordGenerator.php
        :caption: EXT:my_extension/Configuration/TCA/Overrides/tx_myextension_table.php
        :emphasize-lines: 8-10

..  contents:: Table of Content
    :local:

Examples
========

Include special characters
--------------------------

Example: `tA7'jZEIv!{96z.D`

..  figure:: /Images/ManualScreenshots/PasswordGeneratorAllChars.png
    :alt: A password generator using special chars.
    :class: with-shadow

    A password generator using special chars.

..  include:: _Password_6.rst.txt

Only digits, length 8 (minimum length)
--------------------------------------

Example: `90684069`

..  include:: _Password_7.rst.txt

Hexadecimal random bytes, length 30
-----------------------------------

Example: `4617eb24bd001b04fa4e9645043b96`.

The following example will generate a 30 characters long random hex string, which
could be used for secret tokens or similar:

..  include:: _Password_4.rst.txt


Base64 random bytes, readonly
------------------------------

Example: `zrt8sJd6GiqUI_EFgjPiedOj--D0NbTVOJz`

..  figure:: /Images/ManualScreenshots/PasswordGeneratorBase64Readonly.png
    :alt: A password generator using base64 random bytes, readonly
    :class: with-shadow

    A password generator using base64 random bytes, readonly.

..  include:: _Password_5.rst.txt

Properties
==========

Field control options
---------------------

title
~~~~~

..  t3-fieldcontrol-passwordgenerator:: title

    :Path: :php:`$GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']['passwordGenerator']['options']['title']`
    :Type: String / localized string
    :Default: :php:`"LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.generatePassword"`

    Define a title for the control button.

allowEdit
~~~~~~~~~

..  t3-fieldcontrol-passwordgenerator:: allowEdit

    :Path: :php:`$GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']['passwordGenerator']['options']['allowEdit']`
    :Type: boolean
    :Default: :php:`true`

    If set to :php:`false`, the user cannot edit the generated password.

Password rules
--------------

Define rules for the password.

passwordRules.length
~~~~~~~~~~~~~~~~~~~~

..  t3-fieldcontrol-passwordgenerator:: passwordRules.length

    :Path: :php:`$GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']['passwordGenerator']['options']['passwordRules']['length']`
    :Type: int
    :Default: :php:`16`
    :Minimum: :php:`8`

    Defines the amount of characters for the generated password.

passwordRules.random
~~~~~~~~~~~~~~~~~~~~

..  t3-fieldcontrol-passwordgenerator:: passwordRules.random

    :Path: :php:`$GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']['passwordGenerator']['options']['passwordRules']['random']`
    :Type: String
    :Values: :php:`"hex"`, :php:`"base64"`

    Defines the encoding of random bytes. Overrules character definitions.

    :php:`"hex"`
        Generates a random password in hexadecimal format. Example:
        `d0f4030d568ab483b8442735e9e3a7`.

    :php:`"hex"`
        Generates a random password in base64 format. Example:
        `dtbpykd4vf1hda_Ag9kG983y-_N2zyLZzof`.

    ..  note::
        Defining the :t3-fieldcontrol-passwordgenerator:`passwordRules.random`
        password rule takes precedence over any character definition, which
        should therefore be omitted as soon as
        :t3-fieldcontrol-passwordgenerator:`passwordRules.random` is set to one
        of the available encodings: :php:`hex` or :php:`base64`.

passwordRules.digitCharacters
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

..  t3-fieldcontrol-passwordgenerator:: passwordRules.digitCharacters

    :Path: :php:`$GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']['passwordGenerator']['options']['passwordRules']['digitCharacters']`
    :Type: boolean
    :Default: :php:`true`

    If set to :php:`false`, the generated password contains no digit.


passwordRules.lowerCaseCharacters
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

..  t3-fieldcontrol-passwordgenerator:: passwordRules.lowerCaseCharacters

    :Path: :php:`$GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']['passwordGenerator']['options']['passwordRules']['lowerCaseCharacters']`
    :Type: boolean
    :Default: :php:`true`

    If set to :php:`false`, the generated password contains no lower case characters.

passwordRules.upperCaseCharacters
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

..  t3-fieldcontrol-passwordgenerator:: passwordRules.upperCaseCharacters

    :Path: :php:`$GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']['passwordGenerator']['options']['passwordRules']['upperCaseCharacters']`
    :Type: boolean
    :Default: :php:`true`

    If set to :php:`false`, the generated password contains no upper case characters.

passwordRules.specialCharacters
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

..  t3-fieldcontrol-passwordgenerator:: passwordRules.specialCharacters

    :Path: :php:`$GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']['passwordGenerator']['options']['passwordRules']['specialCharacters']`
    :Type: boolean
    :Default: :php:`false`

    If set to :php:`true`, the generated password also contains special
    characters (`!"#$%&\'()*+,-./:;<=>?@[\]^_`{|}~`).
