.. include:: /Includes.rst.txt
.. _columns-input-renderType-inputDateTime-eval:
.. _columns-datetime-properties-eval:

====
eval
====

.. confval:: eval (type => datetime)

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :type: string (list of keywords)
   :Scope: Display / Proc.

   **Required**

   Configuration of field evaluation, must be set to one of the value below:

   null
      An empty value (string) will be stored as :code:`NULL` in the database,
      requires a proper SQL definition.

   int
      The :php:`eval=int` option should always be set in case no specific
      :confval:`dbType` is used since the value will then be stored as timestamp.
      Using an `integer` database column will be enforced in future versions.

   .. note::

      TYPO3 does not handle the following dates properly:

      *  Before Christ (negative year)
      *  double-digit years
