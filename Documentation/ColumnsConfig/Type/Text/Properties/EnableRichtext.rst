.. include:: /Includes.rst.txt
.. _columns-text-properties-enableRichtext:

==============
enableRichtext
==============

:aspect:`Datatype`
    boolean

:aspect:`Scope`
    Display / Proc.

:aspect:`renderType`
    :ref:`default <columns-text-renderType-default>`

:aspect:`Description`
    If set to true, the system renders a Rich Text Editor if that is enabled for the editor (default: yes),
    and if a suitable editor extension is loaded (default: rteckeditor).

    If either of these requirements is not met, the system falls back to a :code:`<textarea>` field.
