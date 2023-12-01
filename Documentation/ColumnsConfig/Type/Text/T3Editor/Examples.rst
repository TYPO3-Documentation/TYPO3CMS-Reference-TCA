..  include:: /Includes.rst.txt

=======
Example
=======

..  _tca_example_codeEditor_1:
..  _tca_example_t3editor_1:

Code highlighting with code editor
==================================

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
