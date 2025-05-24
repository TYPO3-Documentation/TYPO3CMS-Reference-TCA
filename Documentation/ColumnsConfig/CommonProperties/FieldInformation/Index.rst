..  include:: /Includes.rst.txt
..  _tca_property_fieldInformation:

================
fieldInformation
================

The `fieldInformation` is a reserved area within a single form element between
the label and the form element itself.

..  include:: /Images/Rst/FieldInformationTcaDescription.rst.txt

..  confval:: fieldInformation
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: array
    :Scope: Display

Currently, TYPO3 comes with following implemented `fieldInformation` nodes:

..  toctree::
    AdminIsSystemMaintainer
    BackendLayoutFromParentPage
    TcaDescription

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

The custom FieldInformation must be rendered in :file:`ext_localconf.php`:

..  code-block:: php
    :caption: EXT:news/ext_localconf.php


    $GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1552726986] = [
        'nodeName' => 'NewsStaticText',
        'priority' => 70,
        'class' => \GeorgRinger\News\Backend\FieldInformation\StaticText::class
    ];
