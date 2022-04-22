.. include:: /Includes.rst.txt

.. _columns-password:

========
Password
========

.. versionadded:: 12.0
   The TCA type :php:`password` has been introduced. It replaces the
   :php:`eval=password` and :php:`eval=saltedPassword` option of
   TCA type :php:`input`.

The TCA type :php:`password` should be used to input values representing
passwords.

Example
=======

A simple password field:

.. code-block:: php

    'password_field' => [
        'label' => 'Password',
        'config' => [
            'type' => 'password',
        ]
    ]

Migration
=========

The migration from :php:`eval='password'` and :php:`eval='saltedPassword'` to
:php:`type=password` is done like following:

.. code-block:: php

    // Before

    'password_field' => [
        'label' => 'Password',
        'config' => [
            'type' => 'input',
            'eval' => 'trim,password,saltedPassword',
        ]
    ]

    // After

    'password_field' => [
        'label' => 'Password',
        'config' => [
            'type' => 'password',
        ]
    ]

    // Before

    'another_password_field' => [
        'label' => 'Password',
        'config' => [
            'type' => 'input',
            'eval' => 'trim,password',
        ]
    ]

    // After

    'another_password_field' => [
        'label' => 'Password',
        'config' => [
            'type' => 'password',
            'hashed' => false,
        ]
    ]

An automatic TCA migration is performed on the fly, migrating all occurrences
to the new TCA type and triggering a PHP :php:`E_USER_DEPRECATED` error
where code adoption has to take place.

.. note::

   The value of TCA type :php:`password` column is automatically trimmed before
   being stored (and optionally hashed) in the database. Therefore, the :php:`eval=trim`
   option is no longer needed and should be removed from the TCA configuration.

.. toctree::
   :titlesonly:

   Properties/Index
