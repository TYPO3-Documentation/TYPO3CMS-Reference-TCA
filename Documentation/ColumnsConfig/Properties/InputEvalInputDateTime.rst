eval
~~~~

:aspect:`Datatype`
    string (list of keywords)

:aspect:`Scope`
    Display / Proc.

:aspect:`Description`
    **Required**

    Configuration of field evaluation, must be set to one of the value below:

    date
      The field will evaluate the input as a date, automatically converting the input to a UNIX-time in seconds.
      The display will be like "12-8-2003" while the database value stored will be "1060639200".

    datetime
      The field will evaluate the input as a date with time (detailed to hours and minutes), automatically converting
      the input to a UNIX-time in seconds. The display will be like "16:32 12-8-2003"
      while the database value will be "1060698720".

    time
      The field will evaluate the input as a timestamp in seconds for the current day (with a precision of minutes).
      The display will be like "23:45" while the database will be "85500".

    timesec
      The field will evaluate the input as a timestamp in seconds for the current day (with a precision of seconds).
      The display will be like "23:45:13" while the database will be "85513".
