.. include:: ../../Includes.txt

.. _columns-user:

type = 'user'
-------------


.. _columns-user-introduction:

Introduction
============

There are three columns config types that do similar things but still have subtle differences between them.
These are the :ref:`none type <columns-none>`, the :ref:`passthrough type <columns-passthrough>` and the
:ref:`user type <columns-user>`.

Characteristics of `user`:

* A value sent to the DataHandler is just kept as is and put into the database field. Default FormEngine
  however never sends values.
* Unlike none, type user must have a database field.
* FormEngine only renders a dummy element for type user fields by default. It should be combined with a
  custom renderType.
* Type user field values are rendered as-is at other places in the backend. They for instance can be selected
  to be displayed in the list module "single table view".
* Field updates by the DataHandler get logged and the history/undo function will work with such values.

The `user` field can be useful, if:

* A special rendering and evaluation is needed for a value when editing records via FormEngine.

.. note::
    In previous versions of TYPO3 core, :php:`type='user'` had a property `userFunc` to call an own class
    method of some extension. This has been substituted with a custom element using a `renderType`.
    See example below.


.. _columns-user-examples:

Examples
========

The example registers an own node element a TCA field using it and a class implementing a rendering.
See :ref:`FormEngine docs<t3coreapi:FormEngine-Rendering-NodeFactory>` for more details on this.

Register an own node element::

    // Register a node in ext_localconf.php
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][<unix timestamp of "now">] = [
        'nodeName' => 'lollisCustomMapElement',
        'priority' => 40,
        'class' => \Vendor\Extension\Form\Element\LollisCustomMapElement::class,
    ];

Use it as renderType in TCA::

    'myMapElement' = [
        'label' => 'My map element',
        'config' => [
            'type' => 'user',
            'renderType' => 'lollisCustomMapElement',
            'parameters' => [
                'useOpenStreetMap' => true,
            ],
        ],
    ],

Add a class implementation::

    <?php
    declare(strict_types = 1);
    namespace Vendor\Extension\Form\Element;

    use TYPO3\CMS\Backend\Form\Element\AbstractFormElement;

    class LollisCustomMapElement extends AbstractFormElement
    {
        public function render()
        {
            // Custom TCA properties and other data can be found in $this->data, for example the above
            // parameters are available in $this->data['parameterArray']['fieldConf']['config']['parameters']
            $result = $this->initializeResultArray();
            $result['html'] = 'my map content';
            return $result;
        }
    }


.. _columns-user-properties:

Properties renderType default
=============================

The default renderType just renders a dummy entry to indicate a custom renderType should be added.

.. _columns-user-properties-type:
.. _columns-user-properties-notablewrapping:
.. _columns-user-properties-parameters:
.. _columns-user-properties-userfunc:
