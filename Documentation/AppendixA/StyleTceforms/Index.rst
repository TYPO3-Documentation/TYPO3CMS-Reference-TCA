.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt


Visual style of TCEforms
^^^^^^^^^^^^^^^^^^^^^^^^

The design of the auto-generated forms in TYPO3 (typically referred to
as "TCEforms") can be controlled down to fine detail. The fifth
parameter in the $TCA/types configuration is used for this.

The value consists of three integer pointers separated by a dash
("-"). The first parameter points to a color scheme, the second points
to a style scheme for the form elements and the third points to the a
border scheme for the table surrounding all form elements until the
next border is defined.

The integer pointers refer to entries in the global $TBE\_STYLES
variable. Here the definitions for each pointer is configured.


$TBE\_STYLES entries related to TCEforms
""""""""""""""""""""""""""""""""""""""""

The array $TBE\_STYLES is a part of the skinning API in TYPO3 and
therefore the full description is found in the `section about skinning
<#$TBE_STYLES%7Coutline>`_ . However the definition of the three
entries related to TCEforms will be explained in detail here below.


Default integer pointers
~~~~~~~~~~~~~~~~~~~~~~~~

The "[0-x]" values in the "Subkeys" column in the table below
represents the integer pointers that you use in the types-
configuration of $TCA. You can set up any positive integer key you
like, but TYPO3s core parts already implements the keys from 0-5 with
a certain meaning which you are encouraged to follow as well:


.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Int. pointer
         Int. pointer

   Title
         Title

   Description
         Description


.. container:: table-row

   Int. pointer
         0

   Title
         Default

   Description
         Default index. Always used on main-palettes in the bottom of the
         forms.


.. container:: table-row

   Int. pointer
         1

   Title
         Meta fields

   Description
         Typically used for "Hidden", "Type" and other primary "meta" fields


.. container:: table-row

   Int. pointer
         2

   Title
         Headers

   Description
         For fields related to header information


.. container:: table-row

   Int. pointer
         3

   Title
         Main content

   Description
         For main content


.. container:: table-row

   Int. pointer
         4

   Title
         Extras

   Description
         For extra content, like images, files etc.


.. container:: table-row

   Int. pointer
         5

   Title
         Advanced

   Description
         For special content


.. ###### END~OF~TABLE ######


Even if these pointers are used in the core of TYPO3 the default
configuration as found in typo3/sysext/core/ext_tables.php includes only a
definition of the default "0" (zero) pointer::

   $TBE_STYLES = array(
           'colorschemes' => array(
                   '0' => '#E4E0DB,#CBC7C3,#EDE9E5',
           ),
           'borderschemes' => array(
                   '0' => array('border:solid 1px black;',5)
           )
   );


Reference table:
~~~~~~~~~~~~~~~~


.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Key
         Key

   Sub-keys
         Sub-keys

   Description
         Description


.. container:: table-row

   Key
         colorschemes

   Sub-keys
         [0-x]

   Description
         This value is a comma separated list of five color/class definitions.
         The meaning of each color/class is defined as:

         [general cell] , [header cell] , [palette header cell] , [header
         label] , [palette header label]

         Each composite color/class value is split with a "\|" (vertical bar).
         The first part is a color value, typically setting a background color
         or font color. The second part is a class attribute value which will
         be set either for the table cell (td) or the span-tag around text

         For both color and class values these facts apply:

         - Omitting a color (blank value) will use the default value (from index
           "0" and if index "0" is not defined, based on the general mainColors
           in $TBE\_STYLES)

         - Setting a color value to dash ("-") will make it transparent (or just
           not set).

         Class attributes are set only if there was a class value set. There
         are no default class values.

         **Example:** ::

            $TBE_STYLES['colorschemes'][0]='red,yellow,blue,olive,green';


         .. figure:: ../../Images/StyleTceFormsColors.png
            :alt: Setting any color in forms

            Setting any color in forms

         **Example:** ::

            $TBE_STYLES['colorschemes'][0]='-|class-red,-|class-yellow,-|class-blue,-|class-olive,-|class-green';

         This sets class attribute values instead. If you add this to the
         stylesheet you will get the same result as entering the real color
         values::

            TABLE.typo3-TCEforms .class-red { background-color: red; }
            TABLE.typo3-TCEforms .class-yellow { background-color: yellow; }
            TABLE.typo3-TCEforms .class-blue { background-color: blue; }
            TABLE.typo3-TCEforms .class-olive { color: olive; }
            TABLE.typo3-TCEforms .class-green { color: green; }


.. container:: table-row

   Key
         styleschemes

   Sub-keys
         [0-x][elementKey]

   Description
         This value is the content of the "style" attribute of a form element
         (defined by "elementKey").

         If the value is prefixed "CLASS:" then it will set the class attribute
         instead to the value after the prefix.

         "elementKey" is the value of a ['columns']['field name']['config'] /
         TYPE (e.g. "text", "group", "check", "flex" etc.) or the string "all"
         (for defining a default value)

         **Example:** ::

            $TBE_STYLES['styleschemes'][0]['all'] = 'background-color:#F7F7F3;';
            $TBE_STYLES['styleschemes'][0]['check'] = '';

         This (above) sets the background-color CSS attribute of all form
         elements  *except* checkboxes!

         **Example:** ::

            $TBE_STYLES['styleschemes'][0]['all'] = 'CLASS: formField';

         This will set the class attribute to 'formField' for all elements. The
         associated stylesheet could look like::

            TABLE.typo3-TCEforms .formField { background-color: #F7F7F3; }


.. container:: table-row

   Key
         borderschemes

   Sub-keys
         [0-x][key]

   Description
         This value defines the border style of the group of fields.

         Technically the group of fields are wrapped into a table.

         "key" is an index defining various values:

         - "0" : "style" attribute of the table wrapping the section

         - "1" : Distance in pixels after the wrapping table

         - "2" : "background" attribute of table wrapping the section: Reference
           to background image is relative to typo3/ folder (prefixed with
           ->backPath)

         - "3" : "class" attribute of table wrapping the section.

         **Example:** ::

            $TBE_STYLES['borderschemes'][0][0] = 'border:solid 1px black;';
            $TBE_STYLES['borderschemes'][0][1] = 5;
            $TBE_STYLES['borderschemes'][0][2] = '../typo3conf/freestyler_transp.gif';

         This renders the form fields like this:


         .. figure:: ../../Images/StyleTceFormsBackground.png
            :alt: Setting a background in forms

            Setting a background in forms

         (Black border, the distance to the next section is 5 pixels and there
         is a background image)

         **Example:** ::

            $TBE_STYLES['borderschemes'][0]= array('','','','wrapperTable');

         With an associated stylesheet you can get the same result (image not
         included)::

            TABLE.typo3-TCEforms .wrapperTable { border: 1px solid black; margin-top: 5px; }


.. ###### END~OF~TABLE ######


See next chapter for examples of how to configure your TCEforms.


Style pointers in the "types" configuration
"""""""""""""""""""""""""""""""""""""""""""

The following is examples of how to use the styling features of
TCEforms in real life. These examples will give you a chance to figure
out how the features described in the reference table above is
implemented.

In the examples below the $TBE\_STYLES configuration includes the
following::

   $TBE_STYLES['colorschemes'] = Array (
       '0' => '#F7F7F3,#E3E3DF,#EDEDE9',
       '1' => '#94A19A,#7C8D84,#7C8D84',
       '2' => '#E4D69E,#E7DBA8,#E9DEAF',
       '3' => '#C2BFC0,#C7C5C5,#C7C5C5',
       '4' => '#B2B5C3,#C4C6D1,#D5D7DE',
       '5' => '#C3B2B5,#D1C4C6,#DED5D7'
   );
   $TBE_STYLES['styleschemes'] = Array (
       '0' => array('all'=>'background-color: #F7F7F3;border:#7C8D84 solid 1px;', 'check'=>''),
       '1' => array('all'=>'background-color: #94A19A;border:#7C8D84 solid 1px;', 'check'=>''),
       '2' => array('all'=>'background-color: #E4D69E;border:#7C8D84 solid 1px;', 'check'=>''),
       '3' => array('all'=>'background-color: #C2BFC0;border:#7C8D84 solid 1px;', 'check'=>''),
       '4' => array('all'=>'background-color: #B2B5C3;border:#7C8D84 solid 1px;', 'check'=>''),
       '5' => array('all'=>'background-color: #C3B2B5;border:#7C8D84 solid 1px;', 'check'=>''),
   );
   $TBE_STYLES['borderschemes'] = Array (
       '0' => array('border:solid 1px black;',5),
       '1' => array('border:solid 1px black;',5),
       '2' => array('border:solid 1px black;',5),
       '3' => array('border:solid 1px black;',5),
       '4' => array('border:solid 1px black;',5),
       '5' => array('border:solid 1px black;',5)
   );


Examples
~~~~~~~~

First, lets look at a plain types-configuration which merely renders a
list of fields::

   'types' => Array (
       '0' => Array('showitem' => 'title;;1,photodate,description,images,fe_cruser_id')
   ),

It renders this form:

.. figure:: ../../Images/StyleTceFormsNormal.png
   :alt: The forms standard look

   The forms standard look

Now I modify the types config to include the fifth parameters (in
red)::

   'types' => Array (
           '0' => Array('showitem' => 'title;;1;;1--0,photodate;;;;-4-,description;;;;2-0-,images;;;;1--0,fe_cruser_id')
   ),

And this looks like:

.. figure:: ../../Images/StyleTceFormsDark.png
   :alt: The forms dark look

   The forms dark look

To understand how the style pointers works, lets organize them into a
table. This is the "types"-configuration string::

   title;;1;;1--0,photodate;;;;-4-,description;;;;2-0-,images;;;;1--0,fe_cruser_id

Splitting this information into a table looks like this:


.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Fieldname
         Fieldname

   5th param
         5th param:

   'colorscheme' pnt
         'colorscheme' pnt:

   'stylescheme' pnt
         'stylescheme' pnt:

   'borderscheme' pnt
         'borderscheme' pnt:


.. container:: table-row

   Fieldname
         title

   5th param
         ::

            1--0

   'colorscheme' pnt
         1

   'stylescheme' pnt
         [blank]

   'borderscheme' pnt
         0


.. container:: table-row

   Fieldname
         photodate

   5th param
         ::

            -4-

   'colorscheme' pnt
         [blank]

   'stylescheme' pnt
         4

   'borderscheme' pnt
         [blank]


.. container:: table-row

   Fieldname
         description

   5th param
         ::

            2-0-

   'colorscheme' pnt
         2

   'stylescheme' pnt
         0

   'borderscheme' pnt
         [blank]


.. container:: table-row

   Fieldname
         images

   5th param
         ::

            1--0

   'colorscheme' pnt
         1

   'stylescheme' pnt
         [blank]

   'borderscheme' pnt
         0


.. container:: table-row

   Fieldname
         fe\_cruser\_id

   5th param
         ::

            [blank]

   'colorscheme' pnt
         [blank]

   'stylescheme' pnt
         [blank]

   'borderscheme' pnt
         [blank]


.. ###### END~OF~TABLE ######


Explanation:

- "colorscheme" : The pointer is set to "1" for the first field ("title"
  field). This gives a green style (according to definitions in
  $TBE\_STYLES['colorscheme'][1]) which is active until the
  "description" field is rendered. Here the pointer is changed to "2"
  which gives the yellow style. Immediately after the pointer is set
  back to "1" and that is active throughout the form.

- "stylescheme" : The pointer starts by being blank. Since no previous
  value is set, the pointer is implicitly "0" (zero) then. At the field
  "photodate" the pointer is set to "4" which means the style attribute
  gets the value "background-color: #B2B5C3;border:#7C8D84 solid 1px;"
  (according to the current configuration of
  $TBE\_STYLES['stylescheme'][4]). This gives the blueish background of
  the date field. Immediately after the pointer is back at "0" again and
  that lasts for the rest of the fields.

- "borderscheme" : The pointer is set to "0", then blank for three
  fields and then set to "0" again for the last two fields. In effect we
  get the form divided into two sections. As you can see setting the
  borderscheme pointer explicitly -  *even if set to the same value!* -
  breaks up the form each time into a new section. Setting the first
  pointer to the default border scheme was actually not necessary but
  served to illustrate that the same border was applied twice.

It should also be clear now, that setting an empty pointer (blank
string) will just let the former value pass through.

The three schemes are designed to go in pairs. It is most likely that
all three pointers should be set each time you apply the fifth
parameter value. Example::

   'types' => Array (
           '0' => Array('showitem' => 'title;;1;;1-1-1,photodate;;;;2-2-2,description;;;;3-3-3,images,fe_cruser_id;;;;5-5-5')
   ),


.. figure:: ../../Images/StyleTceFormsAllSchemes.png
   :alt: All forms color schemes

   All forms color schemes
