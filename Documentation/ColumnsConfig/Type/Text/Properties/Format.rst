..  include:: /Includes.rst.txt
..  _columns-text-properties-format:

======
format
======

..  confval:: format
    :name: text-format
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: string (keyword)
    :Scope: Display
    :RenderType: :ref:`codeEditor <columns-text-renderType-codeEditor>`

    The value specifies the language the code editor should handle. Allowed
    values:

    *   :php:`css`
    *   :php:`html`
    *   :php:`javascript`
    *   :php:`php`
    *   :php:`typoscript`
    *   :php:`xml`

Examples
========

Code editor with format HTML
----------------------------

..  figure:: /Images/ManualScreenshots/Codeeditor.png
    :alt: Code editor with highlighting HTML
    :class: with-shadow

    Code editor with highlighting HTML

..  code-block:: php
    :caption: Excerpt of TCA definition (EXT:my_extension/Configuration/TCA/tx_myextension_domain_model_mytable.php)

    [
        'columns' => [
            'codeeditor1' => [
                'label' => 'codeEditor_1 format=html, rows=7',
                'description' => 'field description',
                'config' => [
                    'type' => 'text',
                    'renderType' => 'codeEditor',
                    'format' => 'html',
                    'rows' => 7,
                ],
            ],
        ],
    ]
