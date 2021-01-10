.. include:: /Includes.rst.txt
.. _columns-group-properties-hideSuggest:

===========
hideSuggest
===========

:aspect:`Datatype`
    boolean

:aspect:`Scope`
    Display

:aspect:`Description`
    **Only with internal\_type='db'**

    The "suggest wizard" is added by default to all database relation group fields. After a couple of characters have
    been typed into this field, an ajax based search starts and shows a list of records matching the search word.

    A :ref:`set of options <columns-group-properties-suggestOptions>` is available to configure search details.

    Setting this property to `true` disables the suggest wizard.

    .. figure:: ../../Images/TypeGroupSuggest8.png
        :alt: Suggest wizard showing some suggestions
        :class: with-shadow

        Suggest wizard showing some suggestions
