.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt


.. _special-configuration:

Special Configuration introduction
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

In relation to "types"-configuration it is possible to pass special
parameters to a field only for certain "types"-configurations. For
instance you can define that a text field should not wrap text lines
for certain types. The following definition (in the "tx_examples_dummy"
table of the "examples" extension) adds a :code:`nowrap` configuration to the
"description field":

.. code-block:: php

	'0' => array('showitem' => 'hidden;;;;1-1-1, record_type;;;;2-2-2, title;;;;3-3-3, description;;;nowrap, some_date;;1 '),

The field itself is defined absolutely normally:

.. code-block:: php

	'description' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tx_examples_dummy.description',
		'config' => array(
			'type' => 'text',
			'cols' => 50,
			'rows' => 3
		)
	)

The result is a textarea field where lines are not wrapped
automatically when reaching the width of the box:

.. figure:: ../../Images/SpecialConfigurationNoWrap.png
   :alt: Text field with nowrap option

   A text field which does not wrap automatically

The point of setting :code:`nowrap` in the "types"-configuration is that
under other "types"-configurations the field *will* wrap lines.
Likewise you can configure an RTE to appear for a field only if a
certain type of the record is set and in other cases not.


.. _special-configuration-default:

Default Special Configuration (defaultExtras)
"""""""""""""""""""""""""""""""""""""""""""""

Since "types"-configuration does not apply for FlexForms and since a
feature available as special configuration is sometimes needed
regardless of type value you can also configure the default value of
the special configuration. This is done with a key in the
:code:`['columns'][field name]` array. Thus, the alternative configuration for the
example above could be:

.. code-block:: php

	'description' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:examples/Resources/Private/Language/locallang_db.xlf:tx_examples_dummy.description',
		'config' => array(
			'type' => 'text',
			'cols' => 50,
			'rows' => 3
		),
		'defaultExtras' => 'nowrap'
	)

and the :code:`nowrap` parameter doesn't appear in the "types"-configuration
anymore:

.. code-block:: php

	'0' => array('showitem' => 'hidden;;;;1-1-1, record_type;;;;2-2-2, title;;;;3-3-3, description, some_date;;1 '),

This works equally well.

