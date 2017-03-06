format
~~~~~~

:aspect:`Datatype`
    string (keyword) + array

:aspect:`Scope`
    Display

:aspect:`Description`
    The value of a none-type fields is normally displayed as is. It is however possible to format it using this property.
    The following keywords are available, some having sub-properties. Sub-properties are called with the :code:`format.`
    keyword (note the trailing dot), which in itself is an array.

    date
      Formats the value of the field as a date. The default formatting uses PHP's :code:`date()` function
      and :code:`d-m-Y` as a format.

      Possible options are:

      strftime
        *(boolean)* If true, :code:`strftime()` is used instead :code:`date()` for formatting.
      option
        *(string)* Format string (i.e. :code:`Y-m-d` or :code:`%x`, etc.).
      appendAge
        *(boolean)* If true, the age of the value is appended is appended to the formatted output.

    datetime
      Formats the values using PHP's :code:`date()` function and :code:`H:i d-m-Y` as a format.

    time
      Formats the values using PHP's :code:`date()` function and :code:`H:i` as a format.

    timesec
      Formats the values using PHP's :code:`date()` function and :code:`H:i:s` as a format.

    year
      Formats the values using PHP's :code:`date()` function and :code:`Y` as a format.

    int
      Formats the values as an integer using PHP's :code:`sprintf()` in various bases. The default base is
      decimal (:code:`dec`). The base is defined as an option:

      base
        *(string)* Defines the base of the value. Possible bases are "dec", "hex", "HEX", "oct" and "bin".

    float
      Formats the values as an real number using PHP's :code:`sprintf()` and the :code:`%f` marker. The number of
      decimals is an option:

      precision
        *(integer)* Defines the number of decimals to use (maximum is 10, default is 2).

    number
      Formats the values as a number using PHP's :code:`sprintf()`. The format to use is an option:

      option
        *(string)* A format definition according to PHP's :code:`sprintf()`
        function (`see the reference <https://php.net/sprintf>`_).

    md5
      Returns the md5 hash of the values.

    filesize
      Formats the values as file size using :code:`\TYPO3\CMS\Core\Utility\GeneralUtility::formatSize()`.
      One option exists:

      appendByteSize
        *(boolean)* If true, the original value is appended to the formatted string (between brackets).

    user
      Calls a user-defined function to format the values. The only option is the reference to the function:

    userFunc
      *(string)* Reference to the user-defined function. The function receives the field configuration and the
      field's value as parameters.

    Examples
      .. code-block:: php

          'aField' => [
              'config' => [
                  'type' => 'none',
                  'format' => 'date'
                  'format.' => [
                      'strftime' => TRUE,
                      'option' => '%x'
                  ],
              ],
          ],

      .. code-block:: php

          'aField' => [
              'config' => [
                  'type' => 'none',
                  'format' => 'float'
                  'format.' => [
                      'precision' => 8
                  ],
              ],
          ],
