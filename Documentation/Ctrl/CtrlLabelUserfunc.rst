label\_userFunc
---------------

:aspect:`Datatype`
    string

:aspect:`Scope`
    Display

:aspect:`Description`
    Function or method reference. This can be used whenever the label or
    :ref:`label_alt <ctrl-reference-label-alt>` options don't offer enough flexibility, e.g. when you want
    to look up another table to create your label. The result of this
    function overrules the :ref:`label <ctrl-reference-label>`, :ref:`label_alt <ctrl-reference-label-alt>`
    and :ref:`label_alt_force <ctrl-reference-label-alt-force>` settings.

    When calling a method from a class, enter "[classname]->[methodname]". Two arguments will be passed to the method:
    The first argument is an array which contains the following information about the record for which to get the title::

       $params['table'] = $table;
       $params['row'] = $row;

    The resulting title must be written to $params['title'], which is passed by reference. The second argument is a
    reference to the parent object.

    .. warning::
        The title is passed later on through :code:`htmlspecialchars()` so it may not include any HTML formatting.

    **Example:**

    Let's look at what is done for the "haiku" table of the "examples" extension. The call to the user function appears
    in the :file:`EXT:examples/Configuration/TCA/tx_examples_haiku.php` file:

    .. code-block:: php

        'ctrl' => [
            'label' => 'title',
            'label_userFunc' => '\Documentation\Examples\Userfuncs\Tca::class . '->haikuTitle',
        ],

    Class :code:`Documentation\Examples\Userfuncs\Tca` contains the code itself:

    .. code-block:: php

        public function haikuTitle(&$parameters, $parentObject)
        {
            $record = BackendUtility::getRecord($parameters['table'], $parameters['row']['uid']);
            $newTitle = $record['title'];
            $newTitle .= ' (' . substr(strip_tags($record['poem']), 0, 10) . '...)';
            $parameters['title'] = $newTitle;
        }
