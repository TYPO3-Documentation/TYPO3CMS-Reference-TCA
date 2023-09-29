.. include:: /Includes.rst.txt
.. _tca_property_fieldInformation:

================
fieldInformation
================

.. confval:: fieldInformation

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: array
   :Scope: Display
   :Types: :ref:`check <columns-check>`, :ref:`flex <columns-flex>`,
      :ref:`group <columns-group>`,
      :ref:`imageManipulation <columns-imageManipulation>`,
      :ref:`input <columns-input>`, :ref:`none <columns-none>`,
      :ref:`radio <columns-radio>`

   Show information between an element label and the main element input area. Configuration
   works identical to the "fieldWizard" property, no default configuration in the core exists (yet).
   In contrast to "fieldWizard", HTML returned by fieldInformation is limited, see
   :ref:`FormEngine docs <t3coreapi:FormEngine-Rendering-NodeExpansion>` for more details.

..  hint:: 

    :php:`fieldInformation` is not implemented by default. Use :ref:`columns-properties-description`
    display general information below a fields title.

Example
=======

You can have a look at the extension `georgringer/news` in version 9.4 for an example:
https://github.com/georgringer/news/blob/9.4.0/Configuration/TCA/tx_news_domain_model_news.php#L521
(with `georgringer/news ^10.0` this was moved to a non-public extension).

..  code-block:: php
    :caption: EXT:news/Configuration/TCA/tx_news_domain_model_news.php (Excerpt)

        'tags' => [
            'config' => [
                // ...
                'fieldInformation' => [
                    'tagInformation' => [
                        'renderType' => 'NewsStaticText',
                        'options' => [
                            'labels' => [
                                [
                                    'label' => '',
                                    'bold' => true,
                                    'italic' => true,
                                ],
                            ],
                        ],
                    ],
                ],
            ]


The implementation can be found in https://github.com/georgringer/news/blob/9.4.0/Classes/Backend/FieldInformation/StaticText.php:

..  code-block:: php

    <?php
    
    declare(strict_types=1);
    
    namespace GeorgRinger\News\Backend\FieldInformation;
    
    use TYPO3\CMS\Backend\Form\AbstractNode;
    
    class StaticText extends AbstractNode
    {
        public function render(): array
        {
            // ...

            return [
                'requireJsModules' => [
                    'TYPO3/CMS/News/TagSuggestWizard',
                ],
                'html' => '...>',
            ];
        }
    }
