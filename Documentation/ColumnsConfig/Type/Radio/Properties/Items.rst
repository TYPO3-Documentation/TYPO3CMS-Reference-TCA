.. include:: /Includes.rst.txt
.. _columns-radio-properties-items:

=====
items
=====

.. confval:: items (type => radio)

   :Path: $GLOBALS['TCA'][$table]['columns'][$field]['config']
   :required: true
   :type: array
   :Scope: Display  / Proc.

   An array of values which can be selected.

   Each entry is in itself an associative array.

   .. deprecated:: 12.3

      Using the numerical index :php:`0` for setting the label and :php:`1` for
      the value is deprecated. Use the newly introduced :php:`label` and
      :php:`value` keys.

   label (string or LLL reference)
      The displayed title.

   value (integer or string)
      The value stored in the database.
