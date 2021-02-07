.. include:: /Includes.rst.txt
.. _ctrl-reference-container:

=========
container
=========

.. confval:: container

   :type: array
   :Scope: Display


   Array to configure additional items in render containers of :ref:`FormEngine <t3coreapi:FormEngine>`,
   see section :ref:`Node expansion <t3coreapi:FormEngine-Rendering-NodeExpansion>`.

   Next to single elements, some render container allow to be "enriched" with additional information via
   the "node expansion" API. Currently, the :php:`OuterWrapContainer` implements :php:`fieldWizard` and
   :php:`fieldInformation`. :php:`InlineControlContainer` implements :php:`fieldWizard` and comes with
   the default wizard :php:`localizationStateSelector`. Custom containers may implement expansion nodes, too,
   and if implemented correctly will automatically have their configuration merged with the definition
   provided in this TCA array.

   The basic array looks like::

      'ctrl' => [
         'container' => [
            'containerRenderType' => [
               'fieldWizard' => [
                  'aName' => [
                     'renderType' => 'aRenderType',
                     'before' => ['anotherName'],
                     'after' => ['yetAnotherName'],
                     'disabled' => false,
                     'options' => [],
                  ],
               ],
            ],
         ],
      ],

   -  "renderType" refers to a registered node name from :php:`NodeFactory`

   -  "before" and "after" can be set to sort single wizards relative to each other.

   -  "disabled" can be used to disable built in default wizards.

   -  Some wizards may support additional "options".

   -  Note, next to "fieldWizard", some containers may also implement "fieldInformation", which can be
      manipulated the same way.

Examples
========

Disable a built-in wizard
-------------------------

.. code-block:: php

   'ctrl' => [
      'container' => [
         'inlineControlContainer' => [
            'fieldWizard' => [
               'localizationStateSelector' => [
                  'disabled' => true,
               ],
            ],
         ],
      ],
   ],

This disables the default :php:`localizationStateSelector` fieldWizard of
:php:`inlineControlContainer`.


Add your own wizard
-------------------

Register an own node in a :file:`ext_localconf.php`::

   $GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1486488059] = [
      'nodeName' => 'ReferencesToThisRecordWizard',
      'priority' => 40,
      'class' => \T3G\AgencyPack\EditorsChoice\FormEngine\FieldWizard\ReferencesToThisRecordWizard::class,
   ];



Register the new node as "fieldWizard" of "tt\_content" table in an :file:`Configuration/TCA/Overrides/tt\_content.php`
file::

   $GLOBALS['TCA']['tt_content']['ctrl']['container'] = [
      'outerWrapContainer' => [
         'fieldWizard' => [
            'ReferencesToThisRecordWizard' => [
               'renderType' => 'ReferencesToThisRecordWizard',
            ],
         ],
      ],
   ];

In PHP, the node has to implement an interface, but can return any additional HTML which is rendered in the
"OuterWrapContainer" between the record title and the field body when editing a record:

.. include:: /Includes/Images/Core/Frontend/RstIncludes/OuterFieldWizard.rst.txt
