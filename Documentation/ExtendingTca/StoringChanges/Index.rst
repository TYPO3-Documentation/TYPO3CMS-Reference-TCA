.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt


.. _storing-changes:

Storing the changes
^^^^^^^^^^^^^^^^^^^

Changes to :code:`$GLOBALS['TCA']` are generally packaged into extensions and – more
precisely – reside in the :file:`ext_tables.php` file (more details about
extension structure can be found :ref:`in the Core APIs manual <t3api:extension-architecture>`).
Or, since TYPO3 CMS 6.2, inside an extension, in a folder called
:file:`Configuration/TCA/Overrides`.

A best practice consists of creating in that directory one file
per modified table. The file is named along the pattern:
"tablename.php". Be aware that $TCA is not available in this environment. Use 
$GLOBALS['TCA'] instead.

.. important::

   Be aware that :code:`$TCA` is not available in this context. Use 
   :code:`$GLOBALS['TCA']` instead.

They can also be written to a general file in the :file:`typo3conf` directory.
The name of this file is defined by the configuration variable
:code:`$GLOBALS['TYPO3_CONF_VARS']['DB']['extTablesDefinitionScript']`.
TYPO3 official packages (like the dummy or the Introduction Pacakage)
predefine the name as :file:`extTables.php`.

It's perfectly possible to work without that file by not defining it at all
or unsetting existing definitions. Usage of that file is deprecated
since TYPO3 CMS 6.2.

If you are targeting only TYPO3 CMS 6.2 or higher, you should use
only the :file:`Configuration/TCA/Overrides` storage method. All changes to
:code:`$GLOBALS['TCA']` found in such files are incorporated into
:code:`$GLOBALS['TCA']` **before** it is cached. This is thus the most efficient
method.

The extension loading order is obviously an issue. If you want to
modify :code:`$GLOBALS['TCA']` information provided by another extension
you need to ensure that your extension is loaded afterwards. This
can be simply achieved by registering that other extension as
a dependency of yours. See the
:ref:`description of constraints in Core APIs <t3api:extension-declaration>`.

.. note::

   This feature was introduced in TYPO3 CMS 6.2.1.


.. _storing-changes-on-the-fly:

Changing the TCA "on the fly"
"""""""""""""""""""""""""""""

It is also possible to perform some special manipulations on
:code:`$GLOBALS['TCA']` right before it is stored into cache, thanks to the
:code:`tcaIsBeingBuilt` signal. This signal was introduced in
TYPO3 CMS 6.2.1.


.. _storing-changes-legacy:

Legacy information
""""""""""""""""""

.. note::

   The information below is relevant only for versions of TYPO3 CMS
   older than 6.2.


The advantage of using the "extTablesDefinitionScript" file is that it is
loaded last. This means that you are sure that your changes are not
overridden by some other customizations. Also editing :code:`$GLOBALS['TCA']`
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
