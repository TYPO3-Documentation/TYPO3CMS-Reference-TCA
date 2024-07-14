..  include:: /Includes.rst.txt
..  _tca_property_placeholder:

===========
placeholder
===========

..  confval:: placeholder
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: string
    :Scope: Display
    :Types: :ref:`input <columns-input>`

    Placeholder text for the field. This can be a simple string or a reference to a value in the current record
    or another one. With a syntax like :code:`__row|field` the placeholder will take
    the value of the given field from the current record.

    This can be recursive to follow a longer path in a table record chain. If the designated field is a relation to
    another table (is of type :ref:`select <columns-select>`, :ref:`group <columns-group>` or
    :ref:`inline <columns-inline>`), the related record will be loaded and the placeholder searched within it.

    **Example from the "sys_file_reference" table:**

    ..  code-block:: php
        :emphasize-lines: 10

        'title' => [
            'l10n_mode' => 'prefixLangTitle',
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.title',
            'config' => [
                'type' => 'input',
                'size' => 20,
                'max' => 255,
                'nullable' => true,
                'placeholder' => '__row|uid_local|metadata|title',
                'mode' => 'useOrOverridePlaceholder',
                'default' => null,
            ],
        ],

    In the above placeholder syntax, :code:`uid_local` points to the related "sys_file" record and :code:`metadata`
    points to the "sys_file_metadata" of the related "sys_file" record. From there we take the content
    of the :code:`title` field as placeholder value.
