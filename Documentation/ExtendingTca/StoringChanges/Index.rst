.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt
.. include:: Images.txt


Storing the changes
^^^^^^^^^^^^^^^^^^^

Changes to the $TCAare generally packaged into extensions and – more
precisely – reside in the "ext\_tables.php" file (more details about
extension structure can be found in the "Core APIs" manual).

They can also be written in the "typo3conf/extTables.php" file. The
name of this file can be changed – if you so wish – by changing the
value of the global variable $typo\_db\_extTableDef\_scriptin the
"typo3conf/localconf.php" file. It's also possible to remove the
"typo3conf/extTables.php" file by setting::

   $typo_db_extTableDef_script = 1;

also in "typo3conf/localconf.php". This variable is then stored into
the constant TYPO3\_extTableDef\_script.

The advantage of the TYPO3\_extTableDef\_scriptfile is that it is
loaded last. This means that you are sure that your changes are not
overridden by some other customizations.

The advantage of putting your changes inside an extension is that they
are nicely packaged in a self-contained entity which can be easily
deployed on multiple servers. The drawback is that the extension
loading order cannot be finely controlled, except by editing the
loaded extension list manually. At a somewhat coarser level, setting
the "priority" property in the "ext\_emconf.php" file can help (a
"bottom" extension will load last, but its exact load order may vary
if there are several "bottom"-priority extensions).

