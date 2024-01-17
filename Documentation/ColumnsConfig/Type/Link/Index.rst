.. include:: /Includes.rst.txt

.. _columns-input-renderType-inputLink:
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

The previously configured :php:`linkPopup` field control is now integrated
into the new TCA type directly. Additionally, instead of exclude lists
(:php:`blindLink[Fields|Options]`), does the new type now use include lists.
Those lists are furthermore no longer comma separated, but PHP :php:`array`'s,
with each option as a separate value.

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
           'nullable' => 'true',
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
   longer needed and should be removed from the TCA configuration.

Create an URL
=============

To create a URL from such a link field in a Fluid template, use the
:html:`<f:link.typolink>` or :html:`<f:uri.typolink>` view helper.

In PHP code, use `LinkFactory::create` or `LinkFactory::createUri`:

.. code-block:: php

   use TYPO3\CMS\Core\Utility\GeneralUtility;
   use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
   use TYPO3\CMS\Frontend\Typolink\LinkFactory;

   $contentObject = GeneralUtility::makeInstance(ContentObjectRenderer::class);
   $linkFactory = GeneralUtility::makeInstance(LinkFactory::class);
   $link = $linkFactory->create(
       '',
       [
           'parameter'        => $tcaLinkValue,
           'forceAbsoluteUrl' => true,
       ],
       $contentObject
   );
   $url = $link->getUrl();

.. toctree::
   :titlesonly:

   Properties/Index

