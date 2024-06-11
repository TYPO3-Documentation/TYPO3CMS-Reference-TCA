..  include:: /Includes.rst.txt
..  _columns-group-properties-hideSuggest:

===========
hideSuggest
===========

..  confval:: hideSuggest
    :name: group-hideSuggest
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: boolean
    :Scope: Display

    The "suggest wizard" is added by default to all database relation group fields. After a couple of characters have
    been typed into this field, an ajax based search starts and shows a list of records matching the search word.

    The syntax for the search is: `"multiple words" something`, so you can enclose words which need to be
    found next to another within double quotes.

    A :ref:`set of options <columns-group-properties-suggestOptions>` is available to configure search details.

    Setting this property to `true` disables the suggest wizard.

Examples
========

..  _tca_example_group_db_11:

Suggest wizard is hidden
------------------------

..  include:: /Images/Rst/GroupDb11.rst.txt

..  include:: /CodeSnippets/GroupDb11.rst.txt

..  _tca_example_group_db_8:

Suggest wizard is shown
------------------------

..  include:: /Images/Rst/GroupDb8.rst.txt

..  include:: /CodeSnippets/GroupDb8.rst.txt


