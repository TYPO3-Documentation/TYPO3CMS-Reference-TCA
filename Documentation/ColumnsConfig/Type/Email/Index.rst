.. include:: /Includes.rst.txt

.. _columns-email:

=====
Email
=====

..  versionadded:: 12.0
    The TCA type :php:`email` has been introduced. It replaces the
    :php:`eval=email` option of TCA type :php:`input`.

..  versionadded:: 13.0
    When using the `email` type, TYPO3 takes care of
    :ref:`generating the according database field <t3coreapi:auto-generated-db-structure>`.
    A developer does not need to define this field in an extension's
    :file:`ext_tables.sql` file.

The TCA type :php:`email` should be used to input values representing email
addresses.

Migration
=========

The migration from :php:`eval='email'` to :php:`type=email` is done like following:

.. code-block:: php

    // Before

    'email_field' => [
        'label' => 'Email',
        'config' => [
            'type' => 'input',
            'eval' => 'trim,email',
            'max' => 255,
        ]
    ]

   // After

    'email_field' => [
        'label' => 'Email',
        'config' => [
            'type' => 'email',
        ]
    ]

An automatic TCA migration is performed on the fly, migrating all occurrences
to the new TCA type and triggering a PHP :php:`E_USER_DEPRECATED` error
where code adoption has to take place.

.. note::

   The value of TCA type :php:`email` columns is automatically trimmed before
   being stored in the database. Therefore, the :php:`eval=trim` option is no
   longer needed and should be removed from the TCA configuration.

.. toctree::
   :titlesonly:

   Properties/Index
