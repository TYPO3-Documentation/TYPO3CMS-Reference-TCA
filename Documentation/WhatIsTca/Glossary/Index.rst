.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt


.. _tca-glossary:

Glossary
^^^^^^^^

Before you read on, let's just refresh the meaning of a few concepts
mentioned on the next pages:

- **TCE:** Short for "TYPO3 Core Engine". Also referred to as "TCEmain".
  The corresponding class
  :ref:`TYPO3\\CMS\\Core\\DataHandling\\DataHandler <t3cmsapi:TYPO3\\CMS\\Core\\DataHandling\\DataHandler>`
  should ideally handle all updates to
  records made in the backend of TYPO3. The class will handle all the
  rules which may be applied to each table correctly. It will also
  handle logging, versioning, history and undo features,
  and copying, moving, deleting etc.

- **"list of":** Typically used like "list of field names". Whenever
  "list of" is used it means  *a list of strings separated by comma and
  with NO space between the values* .

- **field name:** The name of a field from a database table. Another
  word for the same thing is "column", but it is used more rarely.

- **record type:** A record can have different types, determined by the
  value of a certain field in the record. This field is defined by the
  TCA [ctrl][type] value and it affects also which fields of the table
  (TCA "types"-configuration) are used to display the backend entry form (TCE).
  You can consider the record type as a switch in the interpretation of the whole record.

- **LLL reference:** is a localized string fetched from a locallang file
  by prefixing the string with "LLL:".

