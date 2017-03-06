userFunc
~~~~~~~~

:aspect:`Datatype`
    string (class->method reference)

:aspect:`Scope`
    Display / Proc.

:aspect:`Description`
    [classname]->[methodname]

    Two arguments will be passed: The first argument is an array (passed by reference) which contains
    information about the current field being rendered. The second argument is a reference to the parent object,
    an instance of the :php:`TYPO3\CMS\Backend\Form\Element\UserElement` wrapper class.

    The array with current information will contain any parameters declared with the "parameters" property.
