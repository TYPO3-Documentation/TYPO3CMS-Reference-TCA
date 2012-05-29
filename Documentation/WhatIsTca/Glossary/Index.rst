.. include:: Images.txt

.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. ==================================================
.. DEFINE SOME TEXTROLES
.. --------------------------------------------------
.. role::   underline
.. role::   typoscript(code)
.. role::   ts(typoscript)
   :class:  typoscript
.. role::   php(code)


Glossary
^^^^^^^^

Before you read on, let's just refresh the meaning of a few concepts
mentioned on the next pages:

- **TCE:** Short for "TYPO3 Core Engine". Also referred to as "TCEmain".
  This class (class.t3lib\_tcemain) should ideally handle all updates to
  records made in the backend of TYPO3. The class will handle all the
  rules which may be applied to each table correctly. It will also
  handle logging, versioning, history/undo features,
  copying/moving/deleting etc.

- **"list of":** Typically used like "list of field names". Whenever
  "list of" is used it means  *a list of strings separated by comma and
  with NO space between the values* .

- **field name:** The name of a field from a database table. Another
  word for the same is "column" but it is used more rarely, however the
  meaning is exactly the same.

- **record type:** A record can have different types, expressed by the
  value of a certain field in the record. This field is defined by the
  [ctrl][type]value and it affects also which fields
  ("types"-configuration) is used to display possible form fields.

- **LLL reference:** is a localized string fetched from a locallang file
  by prefixing the string with "LLL:".

