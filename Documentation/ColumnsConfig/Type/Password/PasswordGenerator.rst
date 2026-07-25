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
    :Default: `LLL:core.core:labels.generatePassword`

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

..  _columns-password-properties-passwordGenerator-passwordPolicy:

Password policy
===============

..  confval:: passwordPolicy
    :name: password-passwordGenerator-passwordPolicy
    :Path: :php:`$GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']['passwordGenerator']['options']['passwordPolicy']`
    :Type: string
    :Default: `default`

    ..  versionadded:: 14.2

    This option can be used to configure which
    `Password policy <https://docs.typo3.org/permalink/t3coreapi:password-policies>`_
    should be used for the password field. Use the key of the policy as
    defined in :php:`$GLOBALS['TYPO3_CONF_VARS']['SYS']['passwordPolicies']`.

    If the policy defines a `generator`
    section, the field control uses that generator.

    ..  literalinclude:: _Snippets/_PasswordPolicy.php
        :caption: EXT:my_extension/Configuration/TCA/Overrides/fe_users.php
