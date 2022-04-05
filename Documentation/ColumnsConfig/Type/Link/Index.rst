.. include:: /Includes.rst.txt

.. _columns-link:

====
Link
====

.. versionadded:: 12.0
   The TCA type :php:`link` has been introduced. It replaces the
   :php:`renderType=inputLink` option of TCA type :php:`input`.

The TCA type :php:`link` should be used to input values representing typolinks.

Example
=======

A simple link field:

.. code-block:: php

   'a_link_field' => [
       'label' => 'Link',
       'config' => [
           'type' => 'link',
           'allowedTypes' => ['page', 'url', 'record'],
       ]
   ]

Migration
=========

The migration from :php:`renderType=inputLink` to :php:`type=link` is done like following:

.. code-block:: php

   // Before

   'a_link_field' => [
       'label' => 'Link',
       'config' => [
           'type' => 'input',
           'renderType' => 'inputLink',
           'required' => true,
           'size' => 20,
           'max' => 1024,
           'eval' => 'trim,null',
           'fieldControl' => [
               'linkPopup' => [
                   'disabled' => true,
                   'options' => [
                       'title' => 'Browser title',
                       'allowedExtensions' => 'jpg,png',
                       'blindLinkFields' => 'class,target,title',
                       'blindLinkOptions' => 'mail,folder,file,telephone',
                   ],
               ],
           ],
           'softref' => 'typolink',
       ],
   ],

   // After

   'a_link_field' => [
       'label' => 'Link',
       'config' => [
           'type' => 'link',
           'required' => true,
           'size' => 20,
           'eval' => 'null',
           'allowedTypes' => ['page', 'url', 'record'],
           'appearance' => [
               'enableBrowser' => false,
               'browserTitle' => 'Browser title',
               'allowedFileExtensions' => ['jpg', 'png'],
               'allowedOptions' => ['params', 'rel'],
           ],
       ]
   ]

An automatic TCA migration is performed on the fly, migrating all occurrences
to the new TCA type and triggering a PHP :php:`E_USER_DEPRECATED` error
where code adoption has to take place.

.. note::

   The value of TCA type :php:`link` columns is automatically trimmed before
   being stored in the database. Therefore, the :php:`eval=trim` option is no
   longer needed and should be removed from the TCA configuration. The only
   valid option for :php:`eval` is :php:`null`.


.. toctree::
   :titlesonly:

   Properties/Index

