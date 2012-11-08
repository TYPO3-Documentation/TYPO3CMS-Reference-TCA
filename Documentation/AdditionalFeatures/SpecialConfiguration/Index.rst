.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt
.. include:: Images.txt


Special Configuration introduction
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

In relation to "types"-configuration it is possible to pass special
parameters to a field only for certain “types”-configurations. For
instance you can define that a text field should not wrap text lines
for certain types. Let's add the “description” field to our previous
example, a field which was not displayed until now. The configuration
for type “0” becomes::

   '0' => array('showitem' => 'hidden;;;;1-1-1, record_type;;;;2-2-2, title;;;;3-3-3, description;;;nowrap, some_date;;1 '),

Notice the keyword "nowrap" in position 4 for the field "description".
The field itself is defined like this in the columns section::

   'description' => array(
           'exclude' => 0,
           'label' => 'LLL:EXT:examples/locallang_db.xml:tx_examples_dummy.description',
           'config' => array(
                   'type' => 'text',
                   'cols' => 50,
                   'rows' => 3
           )
   )

The result is a textarea field where lines are not wrapped
automatically when reaching the width of the box:

|img-60| The point of setting "nowrap" in the “types”-configuration is that
under other "types"-configurations the field  *will* wrap lines.
Likewise you can configure an RTE to appear for a field only if a
certain type of the record is set and in other cases not.


Default Special Configuration (defaultExtras)
"""""""""""""""""""""""""""""""""""""""""""""

Since "types"-configuration does not apply for FlexForms and since a
feature available as special configuration is sometimes needed
regardless of type value you can also configure the default value of
the special configuration. This is done with a key in the ['columns'][
*field name* ] array. Thus, the alternative configuration for the
example above could be::

   'description' => array(
           'exclude' => 0,
           'label' => 'LLL:EXT:examples/locallang_db.xml:tx_examples_dummy.description',
           'config' => array(
                   'type' => 'text',
                   'cols' => 50,
                   'rows' => 3
           ),
        'defaultExtras' => 'nowrap'
   )

and the “nowrap” parameter doesn't appear in the “types”-configuration
anymore::

   '0' => array('showitem' => 'hidden;;;;1-1-1, record_type;;;;2-2-2, title;;;;3-3-3, description, some_date;;1 '),

This works equally well.

