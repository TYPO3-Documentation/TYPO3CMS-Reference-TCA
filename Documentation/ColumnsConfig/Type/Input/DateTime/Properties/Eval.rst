.. include:: /Includes.rst.txt

eval
====

:type: string (list of keywords)
:Scope: Display / Proc.

**Required**

Configuration of field evaluation, must be set to one of the value below:

date
   The field will evaluate the input as a date, automatically converting the
   input to a UNIX-time in seconds. The value stored in the database will be in
   UTC! That means that any input in the Backend will be treated as a local time
   (default timezone is either set by PHP configuration or in the Install Tool),
   but will be stored in UTC. The display will be like "12-8-2003" (assuming
   UTC+2) while the database value stored will be "1060639200".

datetime
   The field will evaluate the input as a date with time (detailed to hours and
   minutes), automatically converting the input to a UNIX-time in seconds. Data
   is stored in UTC (see above). The display will be like "16:32 12-8-2003"
   (assuming UTC+2) while the database value will be "1060698720".

time
   The field will evaluate the input as a timestamp in seconds for the current
   day (with a precision of minutes). The display will be like "23:45" while the
   database will be "85500".

timesec
   The field will evaluate the input as a timestamp in seconds for the current
   day (with a precision of seconds). The display will be like "23:45:13" while
   the database will be "85513".


.. note::

   TYPO3 does not handle the following dates properly:

   *  Before Christ (negative year)

   *  double-digit years

