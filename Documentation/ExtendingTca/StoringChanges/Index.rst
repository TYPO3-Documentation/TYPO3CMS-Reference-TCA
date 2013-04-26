.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt


.. _storing-changes:

Storing the changes
^^^^^^^^^^^^^^^^^^^

Changes to the $TCA are generally packaged into extensions and – more
precisely – reside in the :file:`ext_tables.php` file (more details about
extension structure can be found :ref:`in the Core APIs manual <extension-architecture>`).

They can also be written to a general file in the :file:`typo3conf`directory.
The name of this file is defined by the configuration variable
:code:`$GLOBALS['TYPO3_CONF_VARS']['DB']['extTablesDefinitionScript']`.
TYPO3 official packages (like the dummy or the Introduction Pacakage)
predefine the name as :file:`extTables.php`.

It's perfectly possible to work without that file by not defining it at all
or unsetting existing definitions.

The advantage of using the "extTablesDefinitionScript" file is that it is
loaded last. This means that you are sure that your changes are not
overridden by some other customizations. Also editing the :code:`$TCA`
from the Admin Tools > Configuration module will only work if such a file
is defined (and writable, of course).

The advantage of putting your changes inside an extension is that they
are nicely packaged in a self-contained entity which can be easily
deployed on multiple servers. The drawback is that the extension
loading order cannot be finely controlled, except by editing the
loaded extension list manually. At a somewhat coarser level, setting
the "priority" property in the :code:`ext_emconf.php` file can help (a
"bottom" extension will load last, but its exact load order may vary
if there are several "bottom"-priority extensions).

