.. include:: ../../../Includes.txt


.. _columns-none:

TYPE: "none"
^^^^^^^^^^^^

This type will just show the value of the field in the backend. The
field is not editable.

.. only:: html

   .. contents::
      :local:
      :depth: 1


.. _columns-none-properties:

Properties
""""""""""

.. container:: ts-properties

   ================ =========
   Property         Data Type
   ================ =========
   `cols`_          integer
   `format`_        string
   `pass\_content`_ boolean
   `rows`_          integer
   `size`_          integer
   `type`_          string
   ================ =========

Property details
""""""""""""""""

.. only:: html

   .. contents::
      :local:
      :depth: 1


.. _columns-none-properties-type:

type
~~~~

.. container:: table-row

   Key
         type

   Datatype
         string

   Description
         *[Must be set to "none"]*



.. _columns-none-properties-format:

format
~~~~~~

.. container:: table-row

   Key
         format

   Datatype
         string (keyword) + array

   Description
         The value of a none-type fields is normally displayed as is.
         It is however possible to format it using this property. The
         following keywords are available, some having sub-properties.
         Sub-properties are called with the :code:`format.` keyword
         (note the trailing dot), which is itself an array.

         date
           Formats the value of the field as a date. The default formatting
           uses PHP's :code:`date()` function and :code:`d-m-Y` as a format.
           Possible options are:

           strftime
             *(boolean)* If true, :code:`strftime()` is used instead :code:`date()`
             for formatting.
           option
             *(string)* Format string (i.e. :code:`Y-m-d` or :code:`%x`, etc.).
           appendAge
             *(boolean)* If true, the age of the value is appended is appended to
             the formatted output.

         datetime
           Formats the values using PHP's :code:`date()` function and
           :code:`H:i d-m-Y` as a format.

         time
           Formats the values using PHP's :code:`date()` function and
           :code:`H:i` as a format.

         timesec
           Formats the values using PHP's :code:`date()` function and
           :code:`H:i:s` as a format.

         year
           Formats the values using PHP's :code:`date()` function and
           :code:`Y` as a format.

         int
           Formats the values as an integer using PHP's :code:`sprintf()`
           in various bases. The default base is decimal (:code:`dec`).
           The base is defined as an option:

           base
             *(string)* Defines the base of the value. Possible bases are "dec",
             "hex", "HEX", "oct" and "bin".

         float
           Formats the values as an real number using PHP's :code:`sprintf()`
           and the :code:`%f` marker. The number of decimals is an option:

           precision
             *(integer)* Defines the number of decimals to use
             (maximum is 10, default is 2).

         number
           Formats the values as a number using PHP's :code:`sprintf()`.
           The format to use is an option:

           option
             *(string)* A format definition according to PHP's :code:`sprintf()`
             function (`see the reference <http://php.net/sprintf>`_).

         md5
           Returns the md5 hash of the values.

         filesize
           Formats the values as file size using
           :code:`\TYPO3\CMS\Core\Utility\GeneralUtility::formatSize()`.
           One option exists:

           appendByteSize
             *(boolean)* If true, the original value is appended
             to the formatted string (between brackets).

         user
           Calls a user-defined function to format the values. The
           only option is the reference to the function:

           userFunc
             *(string)* Reference to the user-defined function.
             The function receives the field configuration and the
             field's value as parameters.


         **Examples**

         .. code-block:: php

				'format' => 'date'
				'format.' => array(
					'strftime' => TRUE,
					'option' => '%x'
				)

				'eval' => 'double2'
				'format' => 'float'
				'format.' => array(
					'precision' => 8
				)



.. _columns-none-properties-pass-content:

pass\_content
~~~~~~~~~~~~~

.. container:: table-row

   Key
         pass\_content

   Datatype
         boolean

   Description
         If set, then content from the field is directly outputted in the :code:`<div>`
         section. Otherwise the content will be passed through
         :code:`htmlspecialchars()` and possibly :code:`nl2br()`
         if there is configuration for rows.

         Be careful to set this flag since it allows HTML from the field to be
         outputted on the page, thereby creating the possibility of XSS
         security holes.



.. _columns-none-properties-rows:

rows
~~~~

.. container:: table-row

   Key
         rows

   Datatype
         integer

   Description
         If this value is greater than 1 the display of the non-editable
         content will be shown in a :code:`<div>` area trying to simulate the
         rows/columns known from a :ref:`text-type element <columns-text>`.



.. _columns-none-properties-cols:

cols
~~~~

.. container:: table-row

   Key
         cols

   Datatype
         integer

   Description
         See :ref:`rows <columns-none-properties-rows>` and :ref:`size <columns-none-properties-size>`.



.. _columns-none-properties-size:

size
~~~~

.. container:: table-row

   Key
         size

   Datatype
         integer

   Description
         If rows is less than one, the :ref:`cols <columns-none-properties-cols>` value is used to set the width of
         the field and if :code:`cols` is not found, then :ref:`size <columns-none-properties-size>`
         is used to set the width.

         The measurements corresponds to those of :ref:`input <columns-input>` and :ref:`text <columns-text>` type fields.
