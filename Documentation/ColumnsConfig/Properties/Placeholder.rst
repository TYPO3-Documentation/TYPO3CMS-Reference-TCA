placeholder
~~~~~~~~~~~

:aspect:`Datatype`
    string

:aspect:`Scope`
    Display

:aspect:`Description`
    Placeholder text for the field. This can be a simple string or a reference to a value in the current record
    or another one. With a syntax like :code:`__row|field` the placeholder will take
    the value of the given field from the current record.

    This can be recursive to follow a longer patch in a table record chain. If the designated field is a relation to
    another table (is of type :ref:`select <columns-select>`, :ref:`group <columns-group>` or
    :ref:`inline <columns-inline>`), the related record will be loaded and the placeholder searched within it.

    **Example from the "sys_file_reference" table:**

    .. code-block:: php
        :emphasize-lines: 7

        'title' => [
            'label' => 'LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.title',
            'config' => [
                'type' => 'input',
                'size' => '20',
                'eval' => 'null',
                'placeholder' => '__row|uid_local|metadata|title',
                'mode' => 'useOrOverridePlaceholder',
            ],
        ],

    In the above placeholder syntax, :code:`uid_local` points to the related "sys_file" record and :code:`metadata`
    points to the "sys_file_metata" of the related "sys_file" record. From there we take the content
    of the :code:`title` field as placeholder value.
