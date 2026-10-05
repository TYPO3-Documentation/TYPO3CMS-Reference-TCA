:navigation-title: Password policy examples
..  include:: /Includes.rst.txt

..  _columns-password-properties-passwordpolicy-examples:

=====================================================
Examples for using different password policies in TCA
=====================================================

..  _columns-password-properties-passwordpolicy-example-default:

Use the `default` policy
------------------------

..  literalinclude:: /CodeSnippets/my_extension/Configuration/TCA/Overrides/119-tx_myextension_conference-livestream_password.php
    :caption: EXT:my_extension/Configuration/TCA/Overrides/119-tx_myextension_conference-livestream_password.php
    :emphasize-lines: 14

..  _columns-password-properties-passwordpolicy-example-frontend:

Use the globally defined policy for frontend
--------------------------------------------

..  code-block:: php

    'passwordPolicy' => $GLOBALS['TYPO3_CONF_VARS']['FE']['passwordPolicy'] ?? '',

..  _columns-password-properties-passwordpolicy-example-backend:

Use the globally defined policy for backend
-------------------------------------------

..  code-block:: php

    'passwordPolicy' => $GLOBALS['TYPO3_CONF_VARS']['BE']['passwordPolicy'] ?? '',
