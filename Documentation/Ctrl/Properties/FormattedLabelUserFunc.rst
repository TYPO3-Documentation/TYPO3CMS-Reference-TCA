.. include:: /Includes.rst.txt
.. _ctrl-reference-formattedlabel-userfunc:

========================
formattedLabel\_userFunc
========================

.. confval:: formattedLabel_userFunc

   :type: string
   :Scope: Display


   Similar to :ref:`label_userFunc <ctrl-reference-label-userfunc>` but allows
   to return formatted HTML for the label **and is used only for the labels of
   inline (IRRE) records**. The referenced user function may receive optional
   arguments using the :ref:`formattedLabel_userFunc_options
   <ctrl-reference-formattedlabel-userfunc-options>` property.

   .. tip::

      Read more about :ref:`Inline Relational Record Editing (IRRE)
      <columns-inline>`.

Examples
========

*  Example from table "sys_file_reference"::

      'formattedLabel_userFunc' => TYPO3\CMS\Core\Resource\Service\UserFileInlineLabelService::class . '->getInlineLabel',
      'formattedLabel_userFunc_options' => [
         'sys_file' => [
            'title',
            'name'
         ]
      ],

In this example, :php:`getInlineLabel` will be called with an array of :php:`$parameters` which is passed by reference.
This array consists of the following keys (and values):

*  `table`: The table name of the current record
*  `row`: The database row of the current record
*  `isOnSymmetricSide`: True if we are looking from the symmetric ("other") side *to* the relation
*  `options`: The options configured in TCA - see :ref:`formattedLabel_userFunc_options <ctrl-reference-formattedlabel-userfunc-options>`
*  `parent`: Contains another array with the keys `uid` (referencing the inline child's parent uid) and `config` (referencing the parent configuration)
*  `title`: Initialized to an empty string, this is the title that is manipulated by the user function

The resulting title must be written to :php:`$parameters['title']`.

.. seealso::

   See class :php:`TYPO3\CMS\Core\Resource\Service\UserFileInlineLabelService`
   for how such a user function should be designed and how the options are used.
