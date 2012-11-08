.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt
.. include:: Images.txt


Loading the full $TCA dynamically
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

You may load table descriptions dynamically (as needed) from separate
files using the function t3lib\_div::loadTCA($tablename) where
$tablename is the name of the table you wish to load a complete
description of.

Dynamic tables must always be configured with a  *full* [ctrl]-section
(and [feInterface] section if needed). That is, it must be represented
by $TCA[$table]['ctrl']. If the table is dynamic, the value of
[ctrl][dynamicConfigFile] points to an includefile with the full array
in.

The loadTCA-function determines whether a table is fully loaded based
on whether $TCA[$table][columns] is an array. If it is found to be an
array the function just returns - else it loads the table if there is
a value for “dynamicConfigFile”

The table “pages” must not be dynamic. All others can be in principle.
You can also define more than one table in a dynamicConfigFile - as
long as the $TCA array is correctly updated with table information it
doesn't matter if a file contains configuration for more than the
requested table - although the requested table should of cause always
be configured, because it's expected to be. In fact there is not much
error checking; The function loadTCA simply includes the file in blind
faith that this action will fully configure the table in question.


Locating places where t3lib\_div::loadTCA call is needed
""""""""""""""""""""""""""""""""""""""""""""""""""""""""

To find places in your backend code where this should probably be
implemented search for:

**"each($TCA)"** - This is potentially dangerous in a construction
like this::

      while(list($table,$config)=each($TCA))

where $config would obtain non-complete content. Hopefully there are
none left. Instead it should look like::

      while(list($table)=each($TCA))  {
                   t3lib_div::loadTCA($table);
                   $config=$TCA[$table]
                   ...
           }

\[“?(palettes\|types\|columns\|interface)”?\] (regex) - to find places
where the palettes, types, columns and interfaces keys are used -
which would require the whole array to be loaded!

It's recommended to always call the function t3lib\_div::loadTCA()
before using the non-[ctrl] sections of the $TCA array. The function
returns immediately if the table is already loaded, so the overhead
should be small and the importance is great.

