.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt


.. _storing-changes:

Storing the changes
^^^^^^^^^^^^^^^^^^^

There are various ways to store changes to :code:`$GLOBALS['TCA']`. They
depend - partly - on what you are trying to achieve and - a lot -
on the version of TYPO3 CMS which you are targeting.

.. important::

   Be aware that :code:`$TCA` is not available in all contexts.
   It is advised to always use :code:`$GLOBALS['TCA']` instead.

There are two mains ways to store your TCA changes: inside an extension
or straight in the :file:`typo3conf` folder. Both are described below in
more details.


.. _storing-changes-extension:

Storing in extensions
"""""""""""""""""""""

The advantage of putting your changes inside an extension is that they
are nicely packaged in a self-contained entity which can be easily
deployed on multiple servers.

The drawback is that the extension loading order must be
finely controlled. Indeed if your extension modifies another extension,
your extension must be loaded *after* the extension you are modifying.
This can be achieved by registering that other extension as
a dependency of yours. See the
:ref:`description of constraints in Core APIs <t3api:extension-declaration>`.

.. note::

   This works particularly well since TYPO3 CMS 6.2, which comes
   with a rewritten dependency resolver.

Before TYPO3 CMS 6.0, it is also possible to use the
the "priority" property in the :code:`ext_emconf.php` file can help (a
"bottom" extension will load last, but its exact loading order may vary
if there are several "bottom"-priority extensions).

For more information about an extension's structure, please refer to the
:ref:`extension architecture <t3api:extension-architecture>` chapter in
Core APIs.

.. _storing-changes-extension-exttables:

Storing in ext_tables files
~~~~~~~~~~~~~~~~~~~~~~~~~~~

Until TYPO3 CMS 6.2 changes to :code:`$GLOBALS['TCA']` are packaged
into an extension's :file:`ext_tables.php` file.

.. _storing-changes-extension-overrides:

Storing in the Overrides folder
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

Since TYPO3 CMS 6.2 (6.2.1 to be precise) changes to :code:`$GLOBALS['TCA']`
should be stored inside a folder called :file:`Configuration/TCA/Overrides`.

A best practice consists of creating in that directory one file
per modified table. The file is named along the pattern:
"tablename.php".

The advantage of this method is that all such changes are incorporated into
:code:`$GLOBALS['TCA']` **before** it is cached. This is thus far more efficient.


.. _storing-changes-typo3conf:

Storing in typo3conf folder
"""""""""""""""""""""""""""

.. note::

   The information below is relevant only for versions of TYPO3 CMS
   older than 6.2.


Changes can also be written to a general file in the :file:`typo3conf` directory.
The name of this file is defined by the configuration variable
:code:`$GLOBALS['TYPO3_CONF_VARS']['DB']['extTablesDefinitionScript']`.
The name :file:`extTables.php` is most generally used.

The advantage of using the "extTablesDefinitionScript" file is that it is
loaded last. This means that you are sure that your changes are not
overridden by some other customizations. Also editing :code:`$GLOBALS['TCA']`
from the Admin Tools > Configuration module will only work if such a file
is defined (and writable, of course).

It's perfectly possible to work without that file by not defining it at all
or unsetting existing definitions. Usage of that file is deprecated
since TYPO3 CMS 6.2. Use the ":ref:`extension method <storing-changes-extension>`"
described above instead.


.. _storing-changes-on-the-fly:

Changing the TCA "on the fly"
"""""""""""""""""""""""""""""

It is also possible to perform some special manipulations on
:code:`$GLOBALS['TCA']` right before it is stored into cache, thanks to the
:code:`tcaIsBeingBuilt` signal. This signal was introduced in
TYPO3 CMS 6.2.1.
