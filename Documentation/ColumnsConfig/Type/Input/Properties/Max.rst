..  include:: /Includes.rst.txt
..  _columns-input-properties-max:

===
max
===

..  confval:: max
    :name: input-max
    :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
    :type: integer
    :Scope: Display
    :RenderTypes: default, colorpicker, inputLink

    Value for the "maxlength" attribute of the :code:`<input>` field. Javascript prevents adding more than
    these number of characters.

    If the form element edits a varchar(40) field in the database you should also set this value to 40.
