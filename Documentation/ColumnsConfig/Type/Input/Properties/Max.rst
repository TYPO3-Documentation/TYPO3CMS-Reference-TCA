.. include:: /Includes.rst.txt
.. _columns-input-properties-max:

max
===


   :type: integer   :Scope: Display

:aspect:`Render types`
    default, colorpicker, inputLink
    Value for the "maxlength" attribute of the :code:`<input>` field. Javascript prevents adding more than
    these number of characters.

    If the form element edits a varchar(40) field in the database you should also set this value to 40.
