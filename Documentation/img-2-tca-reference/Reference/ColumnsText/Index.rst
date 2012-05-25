.. include:: Images.txt

.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. ==================================================
.. DEFINE SOME TEXTROLES
.. --------------------------------------------------
.. role::   underline
.. role::   typoscript(code)
.. role::   ts(typoscript)
   :class:  typoscript
.. role::   php(code)


['columns'][ *field name* ]['config'] / TYPE: "text"
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

This field type generates a <textarea> field or inserts a RTE (Rich
Text Editor).

Such a field looks like this:

|img-15| 

.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Key
         Key
   
   Datatype
         Datatype
   
   Description
         Description
   
   Scope
         Scope


.. container:: table-row

   Key
         type
   
   Datatype
         string
   
   Description
         *[Must be set to "text"]*
   
   Scope
         Display / Proc.


.. container:: table-row

   Key
         cols
   
   Datatype
         integer
   
   Description
         Abstract value for the width of the <textarea> field. To set the
         textarea to the full width of the form area, use the value 48. Default
         is 30.
   
   Scope
         Display


.. container:: table-row

   Key
         rows
   
   Datatype
         integer
   
   Description
         The number of rows in the textarea. May be corrected for harmonization
         between browsers. Will also automatically be increased if the content
         in the field is found to be of a certain length, thus the field will
         automatically fit the content.
         
         Default is 5. Max value is 20.
   
   Scope
         Display


.. container:: table-row

   Key
         wrap
   
   Datatype
         ["off", "virtual"]
   
   Description
         Determines the wrapping of the textarea field. There are two options:
         
         - **"virtual"** : (Default) The textarea will automatically wrap the
           lines like it would be expected for editing a text.
         
         - **"off"** : The textarea will  *not* wrap the lines as you would
           expect when editing some kind of code.
         
         **Notice:** If the string "nowrap" is found among options in the
         fields extra configuration from the "types" listing this will override
         the setting here to "off".
         
         **Example:**
         
         This configuration will create a textarea useful for entry of code
         lines since it will not wrap the lines:
         
         ::
         
            'config' => array(
                    'type' => 'text',
                    'cols' => '40',
                    'rows' => '15',
                    'wrap' => 'off',
            )
   
   Scope
         Display


.. container:: table-row

   Key
         default
   
   Datatype
         string
   
   Description
         Default value
   
   Scope
         Display / Proc.


.. container:: table-row

   Key
         eval
   
   Datatype
         list of keywords
   
   Description
         Configuration of field evaluation.
         
         Some of these evaluation keywords will trigger a JavaScript pre-
         evaluation in the form. Other evaluations will be performed in the
         backend.
         
         The evaluation functions will be executed in the list-order.
         
         Keywords:
         
         - **required** : A non-empty value is required in the field (otherwise
           the form cannot be saved).
         
         - **trim** : The value in the field will have white spaces around it
           trimmed away.
         
         - **tx\_\*** : User-defined form evaluations. See the "eval" key
           description for input-type field above.
   
   Scope
         Display / Proc.


.. container:: table-row

   Key
         is\_in
   
   Datatype
         string
   
   Description
         If a user-defined evaluation is used for the field (see above, under
         key "eval"), then this values will be passed as argument to the user-
         defined evaluation function.
   
   Scope
         Display / Proc.


.. container:: table-row

   Key
         wizards
   
   Datatype
         array
   
   Description
         [See section later for options]
   
   Scope
         Display


.. ###### END~OF~TABLE ######


Now follows some code listings as examples:


((generated))
"""""""""""""

Example: A quite normal field
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

This is the typical configuration for a textarea field:

::

               'message' => array(
                   'label' => 'LLL:EXT:sys_note/locallang_tca.php:sys_note.message',
                   'config' => array(
                       'type' => 'text',
                       'cols' => '40',    
                       'rows' => '15'
                   )
               ),

