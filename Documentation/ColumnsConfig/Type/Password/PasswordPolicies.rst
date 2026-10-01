:navigation-title: Password policy examples
..  include:: /Includes.rst.txt

..  _columns-password-properties-passwordPolicy-examples:

=====================================================
Examples for using different password policies in TCA
=====================================================

..  _columns-password-properties-passwordPolicy-example-default:

Use the `default` policy
------------------------

..  literalinclude:: /ColumnsConfig/Type/Password/_Snippets/_Password.php
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_mytable.php
    :visible-lines: 34-40
    :emphasize-lines: 38

..  _columns-password-properties-passwordPolicy-example-frontend:

Use the globally defined policy for frontend
--------------------------------------------

..  literalinclude:: /ColumnsConfig/Type/Password/_Snippets/_Password.php
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_mytable.php
    :visible-lines: 42-49
    :emphasize-lines: 46

..  _columns-password-properties-passwordPolicy-example-backend:

Use the globally defined policy for backend
-------------------------------------------

..  literalinclude:: /ColumnsConfig/Type/Password/_Snippets/_Password.php
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_mytable.php
    :visible-lines: 51-58
    :emphasize-lines: 55
