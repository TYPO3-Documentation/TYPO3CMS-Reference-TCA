.. include:: ../../Includes.txt

.. _columns-user:

type = 'user'
-------------


.. _columns-user-introduction:

Introduction
============

Allows to render a whole form field by a developer defined class method.

.. note::
    type='user' is outdated and currently mostly only kept for compatibility reasons.
    The 'renderType' approach which can be extended by extensions is much more powerful.
    See :ref:`FormEngine <t3coreapi:FormEngine-Rendering-NodeFactory>` for details.


.. _columns-user-examples:

Examples
========

.. figure:: ../../Images/TypeUserExample.png
    :alt: A sample user-defined field
    :class: with-shadow

    A sample user-defined field

TCA configuration:

.. code-block:: php

    'tx_examples_special' => [
        'label' => 'LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:fe_users.tx_examples_special',
        'config' => [
            'type' => 'user',
            'userFunc' => Documentation\Examples\Userfuncs\Tca::class . '->specialField',
            'parameters' => [
                'color' => 'blue'
            ],
        ],
    ],

This is how the corresponding PHP method in class :php:`\Documentation\Examples\Userfuncs\Tca` looks like:

.. code-block:: php

    public function specialField($PA, $fObj)
    {
        $color = (isset($PA['parameters']['color'])) ? $PA['parameters']['color'] : 'red';
        $formField  = '<div style="padding: 5px; background-color: ' . $color . ';">';
        $formField .= '<input type="text" name="' . $PA['itemFormElName'] . '"';
        $formField .= ' value="' . htmlspecialchars($PA['itemFormElValue']) . '"';
        $formField .= ' onchange="' . htmlspecialchars(implode('', $PA['fieldChangeFunc'])) . '"';
        $formField .= $PA['onFocus'];
        $formField .= ' /></div>';
        return $formField;
    }



.. _columns-user-properties:

Properties renderType default
=============================

.. _columns-user-properties-type:

.. _columns-user-properties-notablewrapping:
.. include:: ../Properties/UserNoTableWrapping.rst.txt

.. _columns-user-properties-parameters:
.. include:: ../Properties/UserParameters.rst.txt

.. _columns-user-properties-userfunc:
.. include:: ../Properties/UserUserFunc.rst.txt
