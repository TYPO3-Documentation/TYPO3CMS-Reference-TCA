..  include:: /Includes.rst.txt

..  _selectCheckBox-check-compared:

=============================================
selectCheckBox and type check fields compared
=============================================

There is a subtle difference between select fields with the
**render type selectCheckBox** and fields of the **type check**:


Select values from a checkbox list
==================================

..  include:: /Images/Rst/SelectCheckbox3.rst.txt

The select checkbox stores the values as comma separated values.

..  include:: /CodeSnippets/SelectCheckbox3.rst.txt

The field in the database is of type text or varchar.

..  include:: /CodeSnippets/Manual/SqlSelectCheckbox3.rst.txt


Select values from a checkbox list
==================================

..  include:: /Images/Rst/Checkbox3.rst.txt

On the contrary the type :ref:`check <columns-check>` saves multiple values
as bits. Therefore if the first value is chosen it stores `1` (binary `00000001`),
if only the second is chosen it stores `2` (binary `00000010`) and if both are
chosen `3` (binary `00000011`).

..  include:: /CodeSnippets/Checkbox3.rst.txt

The field in the database is of type int.

..  include:: /CodeSnippets/Manual/SqlCheckbox3.rst.txt
