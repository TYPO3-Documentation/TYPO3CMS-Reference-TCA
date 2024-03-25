.. include:: /Includes.rst.txt
.. _ctrl-reference-label-userfunc:

===============
label\_userFunc
===============

.. confval:: label_userFunc
   :name: ctrl-label-userFunc
   :Path: $GLOBALS['TCA'][$table]['ctrl']
   :type: string
   :Scope: Display

   Function or method reference. This can be used whenever the label or
   :ref:`label_alt <ctrl-reference-label-alt>` options don't offer enough flexibility, e.g. when you want
   to look up another table to create your label. The result of this
   function overrules the :ref:`label <ctrl-reference-label>`, :ref:`label_alt <ctrl-reference-label-alt>`
   and :ref:`label_alt_force <ctrl-reference-label-alt-force>` settings.

   When calling a method from a class, enter :php:`[classname]->[methodname]`. The passed argument is an array
   which contains the following information about the record for which to get the title::

      $params['table'] = $table;
      $params['row'] = $row;

   The resulting title must be written to $params['title'], which is passed by reference.

   .. warning::

      The title is passed later on through :code:`htmlspecialchars()`
      so it may not include any HTML formatting.

Example
=======

Let's look at what is done for the "haiku" table of the "examples" extension. The call to the user function appears
in the :file:`EXT:examples/Configuration/TCA/tx_examples_haiku.php` file::

   'ctrl' => [
      'label' => 'title',
      'label_userFunc' => \Documentation\Examples\Userfuncs\Tca::class . '->haikuTitle',
   ],

Class :code:`Documentation\Examples\Userfuncs\Tca` contains the code itself::

   public function haikuTitle(&$parameters)
   {
      $record = BackendUtility::getRecord($parameters['table'], $parameters['row']['uid']);
      $newTitle = $record['title'];
      $newTitle .= ' (' . substr(strip_tags($record['poem']), 0, 10) . '...)';
      $parameters['title'] = $newTitle;
   }


.. _ctrl-reference-label-userfunc-options:

label\_userFunc\_options
========================

.. confval:: label_userFunc_options

   :type: array
   :Scope: Display


   Options for :ref:`label_userFunc <ctrl-reference-label-userfunc>`.
   The array of options is passed to the user function in the parameters array with key "options".

   .. note::
      When the :code:`label_userFunc` is used for inline (IRRE)
      elements, the options are **not** passed. If you need options
      use :ref:`formattedLabel_userFunc <ctrl-reference-formattedlabel-userfunc>` instead.
