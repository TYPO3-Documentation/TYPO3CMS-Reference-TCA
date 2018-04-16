ds\_tableField
~~~~~~~~~~~~~~

:aspect:`Datatype`
    string

:aspect:`Scope`
    Display / Proc.

:aspect:`Description`
    Contains the value "[table]:[field name]" from which to fetch Data Structure XML.

    :ref:`ds_pointerField <columns-flex-properties-ds-pointerfield>` is in this case the pointer which
    should contain the uid of a record from that table.

    This is used by TemplaVoila extension for instance where a field in the "tt\_content" table points to
    a TemplaVoila Data Structure record:

    .. code-block:: php

        'tx_templavoila_flex' => [
            'label' => '...',
            'displayCond' => 'FIELD:tx_templavoila_ds:REQ:true',
            'config' => [
                'type' => 'flex',
                'ds_pointerField' => 'tx_templavoila_ds',
                'ds_tableField' => 'tx_templavoila_datastructure:dataprot',
            ],
        ],
