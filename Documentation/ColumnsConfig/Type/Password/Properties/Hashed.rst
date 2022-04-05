.. include:: /Includes.rst.txt
.. _columns-password-properties-hashed:

======
hashed
======

.. confval:: hashed (type => password)

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: boolean
   :Scope: Proc.
   :Default: true

   If :php:`hashed` is set to :php:`false`, if the field value will be saved as
   plaintext to the database.

   .. note::

       The configuration :php:`'hashed' => false` has no effect for all fields in
       the tables :php:`be_users` and :php:`fe_users`. In general it is not
       recommended to save passwords as plain text to the database.


Examples
========

The password will be saved as plain text:

.. code-block:: php

   'tx_mytable' => [
      'columns' => [
         'my_password_field => [
            'label' => 'Password',
            'config' => [
               'type' => 'password',
               'hashed' => false,
            ]
         ]
      ]
   ]
