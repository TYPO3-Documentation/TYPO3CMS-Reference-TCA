.. include:: /Includes.rst.txt
.. _ctrl-reference-delete:

======
delete
======

.. confval:: delete
   :name: ctrl-delete
   :Path: $GLOBALS['TCA'][$table]['ctrl']
   :type: string (field name)
   :Scope: Proc. / Display


   Field name, which indicates if a record is considered deleted or not.

   If this "soft delete" feature is used, then records are not really deleted, but just marked as 'deleted' by setting
   the value of the field name to "1". In turn, the whole system *must* strictly respect the record as deleted. This
   means that any SQL query must exclude records where this field is true.

   This is a very common feature. Most tables use it throughout the TYPO3 Core. The core extension "recycler"
   can be used to "revive" those deleted records again.

Example
=======

Enable soft delete for the following table:

..  literalinclude:: _CodeSnippets/_Delete.php
    :caption: EXT:my_extension/Configuration/TCA/tx_myextension_domain_model_something.php
