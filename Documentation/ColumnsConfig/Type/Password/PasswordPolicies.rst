:navigation-title: Password policy examples
..  include:: /Includes.rst.txt

..  _columns-password-properties-passwordPolicy-examples:

=====================================================
Examples for using different password policies in TCA
=====================================================

..  _columns-password-properties-passwordPolicy-example-default:

Use the `default` policy
------------------------

..  literalinclude:: _Snippets/_PasswordPolicyDefault.php
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_domain_model_something.php (excerpt)

..  _columns-password-properties-passwordPolicy-example-frontend:

Use the globally defined policy for frontend
--------------------------------------------

..  literalinclude:: _Snippets/_PasswordPolicyFE.php
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_domain_model_something.php (excerpt)

..  _columns-password-properties-passwordPolicy-example-backend:

Use the globally defined policy for backend
-------------------------------------------

..  literalinclude:: _Snippets/_PasswordPolicyBE.php
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_domain_model_something.php (excerpt)
