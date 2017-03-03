formattedLabel\_userFunc
------------------------

:aspect:`Datatype`
    string

:aspect:`Scope`
    Display

:aspect:`Description`
    Similar to :ref:`label_userFunc <ctrl-reference-label-userfunc>` but allowes to return formatted HTML for the label
    **and used only for the labels of inline (IRRE) records**. The referenced user function may receive optional arguments using the
    :ref:`formattedLabel_userFunc_options <ctrl-reference-formattedlabel-userfunc-options>` property.

    **Example from table "sys_file_reference"**

    .. code-block:: php

        'formattedLabel_userFunc' => TYPO3\CMS\Core\Resource\Service\UserFileInlineLabelService::class . '->getInlineLabel',
        'formattedLabel_userFunc_options' => [
            'sys_file' => [
                'title',
                'name'
            ]
        ],

    See class :ref:`TYPO3\\CMS\\Core\\Resource\\Service\\UserFileInlineLabelService <t3api:TYPO3\\CMS\\Core\\Resource\\Service\\UserFileInlineLabelService>`
    for how such a user function should be designed and how the options are used.
