..  include:: /Includes.rst.txt

..  _columns-uuid-properties-version:

=======
version
=======

..  confval:: version
    :name: uuid-version
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: integer
    :Scope: Display

    The :php:`version` option defines the UUID version to be used. Allowed
    values are `4`, `6` or `7`. The default is `4`. For more information
    about the different versions, have a look at the corresponding
    `Symfony documentation`_.


..  _Symfony documentation: https://symfony.com/doc/current/components/uid.html#uuids
