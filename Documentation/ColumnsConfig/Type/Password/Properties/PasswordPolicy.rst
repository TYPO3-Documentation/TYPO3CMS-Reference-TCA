..  include:: /Includes.rst.txt
..  _columns-password-properties-passwordPolicy:

==============
passwordPolicy
==============

..  versionadded:: 12.3

..  confval:: passwordPolicy (type => password)

    :Path: :php:`$GLOBALS['TCA'][$table]['columns'][$field]['config']['fieldControl']['passwordPolicy']`
    :type: string
    :Scope: Display, Proc.

    This option assigns a :ref:`password policy <password-policies>` to fields
    of the type `password`. For configured fields, the password policy validator
    will be used in :ref:`DataHandler <t3coreapi:tce-database-basics>` to ensure,
    that the new password complies with the configured password policy.

    Password policy requirements are shown below the password field, when the
    focus is changed to the password field.

Examples
========

Use the `default` policy
------------------------

..  code-block:: php

    'password_field' => [
        'label' => 'Password',
        'config' => [
            'type' => 'password',
            'passwordPolicy' => 'default',
        ],
    ],

Use the globally defined policy for frontend
--------------------------------------------

..  code-block:: php

    'password_field' => [
        'label' => 'Password',
        'config' => [
            'type' => 'password',
            'passwordPolicy' => $GLOBALS['TYPO3_CONF_VARS']['FE']['passwordPolicy'] ?? '',
        ],
    ],

Use the globally defined policy for backend
-------------------------------------------

..  code-block:: php

    'password_field' => [
        'label' => 'Password',
        'config' => [
            'type' => 'password',
            'passwordPolicy' => $GLOBALS['TYPO3_CONF_VARS']['BE']['passwordPolicy'] ?? '',
        ],
    ],
