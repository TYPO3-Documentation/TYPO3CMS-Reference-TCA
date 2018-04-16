dbType
~~~~~~

:aspect:`Datatype`
    string

:aspect:`Scope`
    Proc.

:aspect:`Description`
    If set, the date / time will not be stored as timestamp, but as native `date` or `datetime` field in the database.
    Keep in mind that no timezone conversion will happen.

    **Example**

    :file:`ext_tables.sql`:

    .. code-block:: php

        CREATE TABLE tx_example_domain_model_foo (
            synced_at datetime default NULL
        )

    :file:`Configuration/TCA/tx_example_domain_model_foo.php`:

    .. code-block:: php

        'synced_at' => [
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'dbType' => 'datetime',
                'eval' => 'datetime',
            ],
        ],
