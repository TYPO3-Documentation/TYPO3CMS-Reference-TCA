..  include:: /Includes.rst.txt
..  _columns-none-properties-pass-content:

=============
pass\_content
=============

..  deprecated:: 12.2
    Instances with field configs for :php:`type="none"` having key
    :php:`pass_content` will trigger a deprecation warning during TCA cache
    warmup. The option will be removed with TYPO3 v13.

..  confval:: pass_content
    :name: none-pass-content
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: boolean
    :Scope: Display

    If set, then content from the field is directly outputted in the :code:`<input>` section as value attribute.
    Otherwise, the content will be passed through :code:`htmlspecialchars()`.

    Be careful to set this flag since it allows HTML from the field to be outputted on the page, thereby creating
    the possibility of XSS security holes.
